<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home.index');
});

/* Controladores */

Route::resource('camiones', CamionController::class);
Route::resource('camioneros', CamioneroController::class);
Route::resource('lugares', LugarController::class);
Route::resource('paquetes', PaqueteController::class);
Route::resource('usuarios', UsuarioController::class);