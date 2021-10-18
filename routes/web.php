<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models;
use App\Http\Controllers\Controller;

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

Route::get('/Jorge', [Controller::class, 'Jorge'])->name('jorge');

//Rutas para Login
Route::get('/login', [Controller::class, 'ViewLogin'])->name('login');
Route::get('/v1/Login/Encuesta/{id_evaluacion}/{id}/{token}', [Controller::class, 'ProcesarLoginEncuesta']);

//Rutas para vistas
Route::middleware(['auth:sanctum', 'verified'])->get('/', [Controller::class, 'ViewDashboard'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/Encuesta/{id_evaluacion}', [Controller::class, 'ViewEncuesta'])->name('encuesta');
Route::middleware(['auth:sanctum', 'verified'])->get('/Evaluaciones', [Controller::class, 'ViewEvaluaciones'])->name('evaluaciones');
Route::middleware(['auth:sanctum', 'verified'])->get('/Evaluacion/{id_encuesta}', [Controller::class, 'ViewDetalles'])->name('detalles');
Route::middleware(['auth:sanctum', 'verified'])->get('/EncuestasPropuestas', [Controller::class, 'ViewEncuestasPropuestas'])->name('encyprop');

//Mensajes
Route::middleware(['auth:sanctum', 'verified'])->get('/Success', [Controller::class, 'MostrarExito'])->name('mostrarExito');

//Encuestas
Route::middleware(['auth:sanctum', 'verified'])->post('/GuardarRespuesta', [Controller::class, 'GuardarRespuesta'])->name('guardarRespuesta');
Route::middleware(['auth:sanctum', 'verified'])->post('/FinalizarEncuesta', [Controller::class, 'FinalizarEncuesta'])->name('finalizarEncuesta');
