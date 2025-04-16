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
use App\Http\Controllers\CamionController;

Route::get('/camiones', [CamionController::class, 'index'])->name('camiones.index');
Route::get('/camiones/detalle/{id}', [App\Http\Controllers\CamionController::class, 'show'])->name('camiones.detalle');
Route::get('/camiones/eliminar/{id}', [App\Http\Controllers\CamionController::class, 'destroy']);

/* Lugares */
use App\Http\Controllers\LugarController;

Route::get('/lugares', [LugarController::class, 'index']);
Route::get('/lugares/detalle/{id}', [App\Http\Controllers\LugarController::class, 'show'])->name('lugares.detalle');
Route::get('/lugares/eliminar/{id}', [App\Http\Controllers\LugarController::class, 'destroy']);

/* Paquetes */
use App\Http\Controllers\PaqueteController;

Route::get('/paquetes', [PaqueteController::class, 'index']);
Route::get('/paquetes/detalle/{id}', [App\Http\Controllers\PaqueteController::class, 'show'])->name('paquetes.detalle');
Route::get('/paquetes/eliminar/{id}', [App\Http\Controllers\PaqueteController::class, 'destroy']);

/* Usuarios */
use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/detalle/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.detalle');
Route::get('/usuarios/eliminar/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy']);