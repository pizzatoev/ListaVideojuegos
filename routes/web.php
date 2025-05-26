<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideojuegoController;

// Ruta principal: lista de videojuegos
Route::get('/', [VideojuegoController::class, 'index']);

// Ruta explícita para ver la lista (opcional)
Route::get('/videojuegos', [VideojuegoController::class, 'index']);

// Ruta para ver el detalle de un videojuego
Route::get('/videojuegos/{id}', [VideojuegoController::class, 'show']);