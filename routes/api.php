<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Ruta para Ordenes
Route::get('/v1/GenerarOrden/{id_proveedor}/{id_periodo}/{id_area}', function(Request $request){
    $proveedor = Models\proveedores::find($request->id_proveedor);
    $periodo = Models\periodos::find($request->id_periodo);
    $area = Models\areas::find($request->id_area);

    if($proveedor && $periodo && $area){
        $encuesta = Models\encuestas::where('id_proveedor', $proveedor->id_proveedor)->where('id_periodo', $periodo->id_periodo)->first();
        if(!$encuesta){
            $encuesta = new Models\encuestas();
            $encuesta->id_proveedor = $proveedor->id_proveedor;
            $encuesta->id_periodo = $periodo->id_periodo;
            $encuesta->save();
        }

        $evaluacion = Models\evaluaciones::where('id_encuesta', $encuesta->id_encuesta)->where('id_area', $area->id_area)->first();
        if(!$evaluacion){
            $evaluacion = new Models\evaluaciones();
            $evaluacion->id_encuesta = $encuesta->id_encuesta;
            $evaluacion->id_area = $area->id_area;

            $evaluacion->save();

            $user = Models\User::find($area->id_user);

            $enlace = new Models\enlaces();
            $enlace->ruta = 'http://evprov.ga/v1/Login/Encuesta/'.$evaluacion->id_evaluacion.'/'.$user->id.'/'.urlencode(urlencode($user->password));
            $enlace->id_evaluacion = $evaluacion->id_evaluacion;
            $enlace->save();
        }

        $orden = new Models\ordenes();
        $orden->id_periodo = $periodo->id_periodo;
        $orden->id_proveedor = $proveedor->id_proveedor;
        $orden->id_area = $area->id_area;
        $orden->fecha_hora = date('Y-m-d H:i:s');
        $orden->save();

        $enlace = Models\enlaces::where('id_evaluacion', $evaluacion->id_evaluacion)->first();

        return [
            'mensaje'=>'Registro exitoso',
            'enlace' => $enlace->ruta,
            'Registros'=>Models\ordenes::all()
        ];
    } else{
        return [
            'Mensaje' => 'Por favor compruebe que el id enviado exista',
            'Registros' => [
                'proveedores' => Models\proveedores::select('id_proveedor', 'razo_social')->get(),
                'periodos' => Models\periodos::all(),
                'areas' => Models\areas::select('id_area', 'nombre')->get()
            ]
        ];
    }
});

//Rutas para probar consultas
Route::get('/Proveedores', function (){
    return Models\proveedores::with('contacto')->get();
});

Route::get('/Ordenes', function (){
    return Models\ordenes::with('proveedor')->with('periodo')->with('area')->get();
});

Route::get('/Areas', function (){
    return Models\areas::with('contacto')->get();
});

Route::get('/Factores', function (){
    return Models\factores::all();
});

Route::get('/Valores', function (){
    return Models\valores::all();
});

Route::get('/Evaluaciones', function (){
    return Models\evaluaciones::with('factores')->get();
});

Route::get('/Detalles', function (){
    return Models\detalles_evaluacion::with('evaluacion')->with('factor')->with('valor')->get();
});

Route::get('/EvaluacionesProveedores', function (){
    return Models\encuestas::with('proveedor')->with('evaluaciones')->get();
});

Route::get('/Enlaces', function (){
    return Models\enlaces::with('evaluacion')->get();
});
