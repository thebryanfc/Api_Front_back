<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TituloController;


Route::get('/titulo', [TituloController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::resource('titulo', TituloController::class);