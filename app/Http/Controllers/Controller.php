<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function Jorge(){
        $usuario = Auth::user();
        $factores = Models\factores::all();
        $valores = Models\valores::all();

        return Inertia::render('Jorge', compact('usuario', 'factores', 'valores'));
    }

    // Login
    function ProcesarLoginEncuesta(Request $request){
        $user = \App\Models\User::where('id', $request->id)->first();
        $id_evaluacion = $request->id_evaluacion;

        if($user && ($user->password ==  urldecode($request->token))){
            Auth::login($user);

            return redirect()->route('encuesta', compact('id_evaluacion'));
        } else{
            $titulo = 'Error, no fue posible comprobar la autenticidad de la url';
            $descripcion = 'Si existe algún problema comunicate con el area de recursos';
            return Inertia::render('Error', compact('titulo', 'descripcion'));
        }
    }

    // Vistas
    function ViewLogin(){
        return Inertia::render('Login');
    }
    function ViewDashboard(){
        $usuario = Auth::user();
        return Inertia::render('EpDashboard', compact('usuario'));
    }
    function ViewEncuesta(Request $request){
        $id_evaluacion = $request->id_evaluacion;
        $evaluacion = Models\evaluaciones::find($id_evaluacion);
        $encuesta = Models\encuestas::with('proveedor')->with('periodo')->find($evaluacion->id_encuesta);
        $usuario = Auth::user();
        $area = Models\areas::where('id_user', $usuario->id)->first();
        $factores = Models\factores::all();
        $valores = Models\valores::all();

        if($area->id_area != $evaluacion->id_area){
            $titulo = 'Error, no tienes permiso de llenar esta encuesta';
            $descripcion = 'Si existe algún problema comunicate con el area de recursos';
            return Inertia::render('Error', compact('titulo', 'descripcion', 'usuario'));
        } else{
            if($evaluacion->status == 3){
                $titulo = 'Aviso, esta encuesta ya fue enviada';
                $descripcion = 'Si existe algún problema comunicate con el area de recursos';
                return Inertia::render('Error', compact('titulo', 'descripcion', 'usuario'));
            } else{
                return Inertia::render('Encuesta', compact('usuario', 'factores', 'valores', 'encuesta', 'area', 'id_evaluacion'));
            }
        }
    }

    // Mensajes
    function MostrarExito(){
        $usuario = Auth::user();
        $titulo = 'La encuesta se envió';
        $descripcion = 'Te agradecemos tu cooperación, los resultados serán tomados en cuentas para las evaluaciones';

        return Inertia::render('Success', compact('usuario', 'titulo', 'descripcion'));
    }

    // Encuesta
    function GuardarRespuesta(Request $request){
        $detalle_ev = Models\detalles_evaluacion::where('id_evaluacion', $request->id_evaluacion)->where('id_factor', $request->id_factor)->first();

        if($detalle_ev){
            $detalle_ev->id_evaluacion = $request->id_evaluacion;
            $detalle_ev->id_factor = $request->id_factor;
            $detalle_ev->id_valor = $request->id_valor;
            $detalle_ev->update();

            $mensaje = 'Se actualizó el registro';
        } else{
            $detalle_ev = new Models\detalles_evaluacion();
            $detalle_ev->id_evaluacion = $request->id_evaluacion;
            $detalle_ev->id_factor = $request->id_factor;
            $detalle_ev->id_valor = $request->id_valor;
            $detalle_ev->save();

            $mensaje = 'Se creó el registro';
        }

        $evaluacion = Models\evaluaciones::find($request->id_evaluacion);
        $evaluacion->ultima_modificacion = date('Y-m-d H:i:s');
        $evaluacion->status = 2;
        $evaluacion->update();

        return [
            'mensaje'=>$mensaje
        ];
    }
    function FinalizarEncuesta(Request $request){
        $detalles = Models\detalles_evaluacion::where('id_evaluacion', $request->id_evaluacion)->with('valor')->get();

        if(count($detalles) != 4){
            return [
                'codigo'=>0,
                'mensaje'=>'Es necesario responder todas las preguntas'
            ];
        } else{
            $resultado = 0;
            foreach ($detalles as $detalle){
                $resultado += $detalle->valor->porcentaje;
            }

            $evaluacion = Models\evaluaciones::find($request->id_evaluacion);
            $evaluacion->status = 3;
            $evaluacion->ultima_modificacion = date('Y-m-d H:i:s');
            $evaluacion->resultado = $resultado;
            $evaluacion->update();

            return [
                'codigo'=>1,
                'mensaje'=>'Se guardó la encuesta',
                'ruta'=>route('mostrarExito')
            ];
        }
    }
}
