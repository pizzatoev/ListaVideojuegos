<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoController;

Route::get('/videojuegos', [VideojuegoController::class, 'index']);
Route::get('/videojuegos/{id}', [VideojuegoController::class, 'show']);


Route::get('/', function () {
    return view('welcome');
});
