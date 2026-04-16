<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CarreraController;

/*
| Redirección inicial
*/

Route::get('/', function () {
    return redirect()->route('estudiantes.index');
});


/*
| RUTAS ESTUDIANTES
*/

// Mostrar lista
Route::get('/estudiantes', [EstudianteController::class, 'index'])
    ->name('estudiantes.index');

// Formulario crear
Route::get('/estudiantes/create', [EstudianteController::class, 'create'])
    ->name('estudiantes.create');

// Guardar estudiante
Route::post('/estudiantes/store', [EstudianteController::class, 'store'])
    ->name('estudiantes.store');

// Formulario editar
Route::get('/estudiantes/{id}/edit', [EstudianteController::class, 'edit'])
    ->name('estudiantes.edit');

// Actualizar estudiante
Route::put('/estudiantes/{id}/update', [EstudianteController::class, 'update'])
    ->name('estudiantes.update');

// Eliminar estudiante
Route::delete('/estudiantes/{id}/delete', [EstudianteController::class, 'destroy'])
    ->name('estudiantes.destroy');


/*
| RUTAS CARRERAS
*/

// Mostrar lista
Route::get('/carreras', [CarreraController::class, 'index'])
    ->name('carreras.index');

// Formulario crear
Route::get('/carreras/create', [CarreraController::class, 'create'])
    ->name('carreras.create');

// Guardar carrera
Route::post('/carreras/store', [CarreraController::class, 'store'])
    ->name('carreras.store');

// Formulario editar
Route::get('/carreras/{id}/edit', [CarreraController::class, 'edit'])
    ->name('carreras.edit');

// Actualizar carrera
Route::put('/carreras/{id}/update', [CarreraController::class, 'update'])
    ->name('carreras.update');

// Eliminar carrera
Route::delete('/carreras/{id}/delete', [CarreraController::class, 'destroy'])
    ->name('carreras.destroy');