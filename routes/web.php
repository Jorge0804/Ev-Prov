<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard2', function () {
    return Inertia::render('Dashboard');
})->name('dashboard2');

Route::get('/Jorge', function () {
    $usuario = Auth::user();
    $factores = Models\factores::all();
    $valores = Models\valores::all();

    return Inertia::render('Jorge', compact('usuario', 'factores', 'valores'));
})->name('jorge');

Route::get('/Elena', function () {
    return Inertia::render('Elena');
})->name('elena');

Route::get('/Yazmin', function () {
    return Inertia::render('Yamin');
})->name('yazmin');

Route::get('/Mariana', function () {
    return Inertia::render('Mariana');
})->name('mariana');

Route::get('/Yamil', function () {
    return Inertia::render('Yamil');
})->name('yamil');

Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    $usuario = Auth::user();
    return Inertia::render('EpDashboard', compact('usuario'));
})->name('dashboard');

Route::get('/EncuestasPropuestas', function () {
    return Inertia::render('EncuestasPropuestas');
})->name('encprop');

Route::get('/v1/Login/Encuesta/{id_encuesta}/{id}/{token}', function(Request $request){
   $user = \App\Models\User::where('id', $request->id)->first();
   if($user && ($user->password ==  urldecode($request->token))){
       \Illuminate\Support\Facades\Auth::login($user);

       return redirect()->route('encuesta', $request->id_encuesta);
   } else{
       return urldecode($request->token);
   }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/Encuesta/{id_encuesta}', function (Request $request) {
    $encuesta = Models\encuestas::find($request->id_encuesta);
    if($encuesta){
        $usuario = Auth::user();
        $area = Models\areas::where('id_user', $usuario->id)->first();
        $factores = Models\factores::all();
        $valores = Models\valores::all();
        $encuesta = Models\encuestas::with('periodo')->with('proveedor')->find($request->id_encuesta);

        return Inertia::render('Encuesta', compact('usuario', 'factores', 'valores', 'encuesta', 'area'));
        //return Models\ordenes::where('id_proveedor', $encuesta->id_proveedor)->where('id_periodo', $encuesta->id_periodo)->with('area')->get();
    }else{
        return 'no se pudo :C ';
    }

})->name('encuesta');

Route::middleware(['auth:sanctum', 'verified'])->post('/GuardarRespuesta', function (Request $request) {
    return Models\evaluaciones::where('id_encuesta', $request->id_encuesta)->get();
})->name('guardarRespuesta');
