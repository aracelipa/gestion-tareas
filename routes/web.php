<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;


// Ruta para la página principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas para el CRUD de Tareas usando el controlador TareaController
Route::resource('tareas', TareaController::class);
