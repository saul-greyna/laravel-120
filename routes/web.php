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
Route::get('/camioneros/crear', [App\Http\Controllers\CamioneroController::class, 'create']);
Route::post('/camioneros/save', [App\Http\Controllers\CamioneroController::class, 'store']);

/* Camiones */
Route::get('/camiones', [App\Http\Controllers\CamionController::class, 'index']);
Route::get('/camiones/detalle/{id}', [App\Http\Controllers\CamionController::class, 'show'])->name('camiones.detalle');
Route::get('/camiones/eliminar/{id}', [App\Http\Controllers\CamionController::class, 'destroy']);
Route::get('/camiones/editar/{id}', [App\Http\Controllers\CamionController::class, 'edit']);
Route::post('/camiones/update/{id}', [App\Http\Controllers\CamionController::class, 'update']);
Route::get('/camiones/crear', [App\Http\Controllers\CamionController::class, 'create']);
Route::post('/camiones/save', [App\Http\Controllers\CamionController::class, 'store']);

/* Lugares */
Route::get('/lugares', [App\Http\Controllers\LugarController::class, 'index']);
Route::get('/lugares/detalle/{id}', [App\Http\Controllers\LugarController::class, 'show'])->name('lugares.detalle');
Route::get('/lugares/eliminar/{id}', [App\Http\Controllers\LugarController::class, 'destroy']);
Route::get('/lugares/editar/{id}', [App\Http\Controllers\LugarController::class, 'edit']);
Route::post('/lugares/update/{id}', [App\Http\Controllers\LugarController::class, 'update']);
Route::get('/lugares/crear', [App\Http\Controllers\LugarController::class, 'create']);
Route::post('/lugares/save', [App\Http\Controllers\LugarController::class, 'store']);

/* Paquetes */
Route::get('/paquetes', [App\Http\Controllers\PaqueteController::class, 'index']);
Route::get('/paquetes/detalle/{id}', [App\Http\Controllers\PaqueteController::class, 'show'])->name('paquetes.detalle');
Route::get('/paquetes/eliminar/{id}', [App\Http\Controllers\PaqueteController::class, 'destroy']);
Route::get('/paquetes/editar/{id}', [App\Http\Controllers\PaqueteController::class, 'edit']);
Route::post('/paquetes/update/{id}', [App\Http\Controllers\PaqueteController::class, 'update']);
Route::get('/paquetes/crear', [App\Http\Controllers\PaqueteController::class, 'create']);
Route::post('/paquetes/save', [App\Http\Controllers\PaqueteController::class, 'store']);

/* Usuarios */
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index']);
Route::get('/usuarios/detalle/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.detalle');
Route::get('/usuarios/eliminar/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy']);
Route::get('/usuarios/editar/{id}', [App\Http\Controllers\UsuarioController::class, 'edit']);
Route::post('/usuarios/update/{id}', [App\Http\Controllers\UsuarioController::class, 'update']);
Route::get('/usuarios/crear', [App\Http\Controllers\UsuarioController::class, 'create']);
Route::post('/usuarios/save', [App\Http\Controllers\UsuarioController::class, 'store']);

/* Consultas */
use App\Http\Controllers\ConsultaController;

Route::get('/consultas', [ConsultaController::class, 'index']);
 