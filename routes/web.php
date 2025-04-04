<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home.index');
});
 
Route::get('/camioneros', function () {
    return view('camioneros.index');
});
 
Route::get('/camiones', function () {
    return view('camiones.index');
});
 
Route::get('/lugares', function () {
    return view('lugares.index');
});
 
Route::get('/paquetes', function () {
    return view('paquetes.index');
});
 
Route::get('/usuarios', function () {
    return view('usuarios.index');
});