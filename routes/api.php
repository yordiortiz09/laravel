<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Sistema_Calificaciones\AlumnoController;
use App\Http\Controllers\Sistema_Calificaciones\CalificacionController;
use App\Http\Controllers\Sistema_Calificaciones\LoginController;
use App\Http\Controllers\Sistema_Calificaciones\ProfesorController;
use App\Http\Controllers\Sistema_Calificaciones\GrupoController;
use App\Http\Controllers\Sistema_Calificaciones\MateriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/alumno/saludo', [AlumnoController::class, 'InsertarAlumno']);
Route::post('/login',[LoginController::class, 'Login']);
Route::get('/alumno',[AlumnoController::class, 'VerAlumno'])->middleware('auth:sanctum');
Route::get('/grupo/{id}',[GrupoController::class, 'VerGrupo']);
Route::get('/calificaciones',[CalificacionController::class, 'VerCalificaciones']);
Route::post('/calificacion',[CalificacionController::class, 'InsertarCalificaciones']);
Route::put('/calificacion/{cal}',[CalificacionController::class, 'ModificarCalificacion'])->where('cal', '[0-9]+')->middleware('rol:1','auth:sanctum');
Route::delete('/calificacion/{cal}',[CalificacionController::class, 'EliminarCalificacion'])->where('cal', '[0-9]+')->middleware('rol:1','auth:sanctum');
Route::get('/materia',[MateriaController::class, 'VerMateria']);