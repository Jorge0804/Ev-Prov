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

Route::get('/Evaluaciones', function (){
    return Models\evaluaciones::with('factores')->get();
});

Route::get('/Detalles', function (){
    return Models\detalles_evaluacion::with('evaluacion')->with('factor')->with('valor')->get();
});
