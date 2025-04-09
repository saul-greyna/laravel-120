<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamioneroController;

Route::resource('camioneros', CamioneroController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home.index');
});
    


use App\Http\Controllers\CamionController;

Route::get('/camiones', [CamionController::class, 'index'])->name('camiones.index');

use App\Http\Controllers\LugarController;

Route::get('/lugares', [LugarController::class, 'index']);
Route::get('/lugares/{id_lugar}', [LugarController::class, 'show']);

use App\Http\Controllers\PaqueteController;

Route::get('/paquetes', [PaqueteController::class, 'index']);
Route::get('/paquetes/{id}', [PaqueteController::class, 'show']);

use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
