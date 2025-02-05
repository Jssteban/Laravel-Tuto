<?php

use App\Http\Controllers\CursoController;
use App\Models\Curso;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', [CursoController::class , 'index'])->name('curso.index');//me  va a listar todas las tablas
Route::get('/cursos/crear', [CursoController::class, 'create'])->name('cursos.create');//manda los datos del curso al servidor y el los devuelve
Route::post('/cursos', [CursoController::class , 'store'])->name('cursos.store');//almacena todo los campos que e enviado
Route::get('/cursos/{id}',[CursoController::class, 'show'])->name('cursos.show');//muestra un campo en espesifico por id
Route::get('/cursos/{id/edit}', [CursoController::class , 'edit'])->name('cursos.edit');
