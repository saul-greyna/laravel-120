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

/* Camiones */
use App\Http\Controllers\CamionController;

Route::get('/camiones', [CamionController::class, 'index'])->name('camiones.index');
Route::get('/camiones/detalle/{id}', [App\Http\Controllers\CamionController::class, 'show'])->name('camiones.detalle');

/* Lugares */
use App\Http\Controllers\LugarController;

Route::get('/lugares', [LugarController::class, 'index']);
Route::get('/lugares/detalle/{id}', [App\Http\Controllers\LugarController::class, 'show'])->name('lugares.detalle');

/* Paquetes */
use App\Http\Controllers\PaqueteController;

Route::get('/paquetes', [PaqueteController::class, 'index']);
Route::get('/paquetes/{id}', [PaqueteController::class, 'show']);

/* Usuarios */
use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
