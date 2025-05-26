<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videojuego>
 */
class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    

    public function definition(): array
    {
        return [
            'titulo' => 'Título genérico',
            'genero' => 'Acción',
            'plataforma' => 'PC',
            'descripcion' => 'Descripción genérica',
            'precio' => 59.99,
            'lanzamiento' => now(),
            'imagen' => 'https://via.placeholder.com/300x200.png?text=Videojuego'
        ];
    }        

}
