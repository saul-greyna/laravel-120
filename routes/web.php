<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamioneroController;

Route::resource('camioneros', CamioneroController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home.index');
});
    
Route::resource('camiones', CamionController::class);
Route::resource('lugares', LugarController::class);
Route::resource('paquetes', PaqueteController::class);
Route::resource('usuarios', UsuarioController::class);