<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    // Lista de videojuegos
    public function index(Request $request)
    {
        $search = $request->input('search');

        $videojuegos = Videojuego::when($search, function ($query, $search) {
            return $query->where('titulo', 'like', '%' . $search . '%');
        })->paginate(9)->withQueryString();

        $destacados = Videojuego::inRandomOrder()->take(3)->get();

        return view('videojuegos.index', compact('videojuegos', 'search', 'destacados'));
    }

    // Detalle de un videojuego
    public function show($id)
    {
        $videojuego = Videojuego::findOrFail($id);
        return view('videojuegos.show', compact('videojuego'));
    }
}
