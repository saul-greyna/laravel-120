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

/* Camiones */
Route::get('/camiones', [App\Http\Controllers\CamionController::class, 'index']);
Route::get('/camiones/detalle/{id}', [App\Http\Controllers\CamionController::class, 'show'])->name('camiones.detalle');
Route::get('/camiones/eliminar/{id}', [App\Http\Controllers\CamionController::class, 'destroy']);

/* Lugares */
Route::get('/lugares', [App\Http\Controllers\LugarController::class, 'index']);
Route::get('/lugares/detalle/{id}', [App\Http\Controllers\LugarController::class, 'show'])->name('lugares.detalle');
Route::get('/lugares/eliminar/{id}', [App\Http\Controllers\LugarController::class, 'destroy']);

/* Paquetes */
Route::get('/paquetes', [App\Http\Controllers\PaqueteController::class, 'index']);
Route::get('/paquetes/detalle/{id}', [App\Http\Controllers\PaqueteController::class, 'show'])->name('paquetes.detalle');
Route::get('/paquetes/eliminar/{id}', [App\Http\Controllers\PaqueteController::class, 'destroy']);

/* Usuarios */
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index']);
Route::get('/usuarios/detalle/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.detalle');
Route::get('/usuarios/eliminar/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy']);