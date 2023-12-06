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
Route::get('/alumno/',[AlumnoController::class, 'VerAlumno'])->middleware('auth:sanctum');
Route::get('/grupo/{user?}/',[GrupoController::class, 'VerGrupo'])->where('user', '[0-9]+')->middleware('auth:sanctum');
Route::get('/materia/{id?}/',[MateriaController::class, 'VerMateria'])->where('id', '[0-9]+')->middleware('auth:sanctum');
Route::get('/materia/{id?}/',[MateriaController::class, 'VerMateria'])->where('id', '[0-9]+')->middleware('auth:sanctum');
Route::get('/materia/{id?}/',[MateriaController::class, 'VerMateria'])->where('id', '[0-9]+')->middleware('auth:sanctum');
Route::get('/materia/{id?}/',[MateriaController::class, 'VerMateria'])->where('id', '[0-9]+')->middleware('auth:sanctum');

