<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home.index');
});

/* Camioneros */
Route::get('/camioneros', [App\Http\Controllers\CamioneroController::class, 'index']);
Route::get('/camioneros/detalle/{id}', [App\Http\Controllers\CamioneroController::class, 'show'])->name('camioneros.show');
Route::get('/camioneros/eliminar/{id}', [App\Http\Controllers\CamioneroController::class, 'destroy']);
Route::get('/camioneros/editar/{id}', [App\Http\Controllers\CamioneroController::class, 'edit']);
Route::post('/camioneros/update/{id}', [App\Http\Controllers\CamioneroController::class, 'update']);

/* Camiones */
Route::get('/camiones', [App\Http\Controllers\CamionController::class, 'index']);
Route::get('/camiones/detalle/{id}', [App\Http\Controllers\CamionController::class, 'show'])->name('camiones.detalle');
Route::get('/camiones/eliminar/{id}', [App\Http\Controllers\CamionController::class, 'destroy']);
Route::get('/camiones/editar/{id}', [App\Http\Controllers\CamionController::class, 'edit']);
Route::post('/camiones/update/{id}', [App\Http\Controllers\CamionController::class, 'update']);

/* Lugares */
Route::get('/lugares', [App\Http\Controllers\LugarController::class, 'index']);
Route::get('/lugares/detalle/{id}', [App\Http\Controllers\LugarController::class, 'show'])->name('lugares.detalle');
Route::get('/lugares/eliminar/{id}', [App\Http\Controllers\LugarController::class, 'destroy']);
Route::get('/lugares/editar/{id}', [App\Http\Controllers\LugarController::class, 'edit']);
Route::post('/lugares/update/{id}', [App\Http\Controllers\LugarController::class, 'update']);

/* Paquetes */
Route::get('/paquetes', [App\Http\Controllers\PaqueteController::class, 'index']);
Route::get('/paquetes/detalle/{id}', [App\Http\Controllers\PaqueteController::class, 'show'])->name('paquetes.detalle');
Route::get('/paquetes/eliminar/{id}', [App\Http\Controllers\PaqueteController::class, 'destroy']);
Route::get('/paquetes/editar/{id}', [App\Http\Controllers\PaqueteController::class, 'edit']);
Route::post('/paquetes/update/{id}', [App\Http\Controllers\PaqueteController::class, 'update']);

/* Usuarios */
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index']);
Route::get('/usuarios/detalle/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.detalle');
Route::get('/usuarios/eliminar/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy']);
Route::get('/usuarios/editar/{id}', [App\Http\Controllers\UsuarioController::class, 'edit']);
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuarioController::class, 'update']);
