<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TituloController;

Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request ->user();
});

Route::apiResource('titulo', TituloController::class);