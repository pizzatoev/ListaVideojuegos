<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videojuego;
class VideojuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    
    public function run(): void
    {
        $juegos = [
                [
                    'titulo' => 'Grand Theft Auto V',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/271590/header.jpg',
                    'descripcion' => 'Aventura criminal en un mundo abierto con total libertad de acción.'
                ],
                [
                    'titulo' => 'Minecraft',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1127400/header.jpg',
                    'descripcion' => 'Construye, explora y sobrevive en mundos generados aleatoriamente.'
                ],
                [
                    'titulo' => 'Among Us',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/945360/header.jpg',
                    'descripcion' => 'Juego de deducción social donde debes encontrar al impostor.'
                ],
                [
                    'titulo' => 'Counter-Strike: Global Offensive',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/730/header.jpg',
                    'descripcion' => 'Shooter competitivo por equipos con misiones y estrategia.'
                ],
                [
                    'titulo' => 'Dota 2',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/570/header.jpg',
                    'descripcion' => 'Juego de estrategia multijugador en línea con batallas intensas 5v5.'
                ],
                [
                    'titulo' => 'Rust',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/252490/header.jpg',
                    'descripcion' => 'Juego de supervivencia extrema en un entorno hostil.'
                ],
                [
                    'titulo' => 'Elden Ring',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1245620/header.jpg',
                    'descripcion' => 'RPG de acción en un mundo abierto lleno de secretos y peligros.'
                ],
                [
                    'titulo' => 'Cyberpunk 2077',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/header.jpg',
                    'descripcion' => 'Mundo futurista lleno de decisiones, acción y narrativa compleja.'
                ],
                [
                    'titulo' => 'Hogwarts Legacy',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/990080/header.jpg',
                    'descripcion' => 'Explora el mundo mágico como estudiante de Hogwarts en el siglo XIX.'
                ],
                [
                    'titulo' => 'Red Dead Redemption 2',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1174180/header.jpg',
                    'descripcion' => 'Una épica historia del Lejano Oeste con mundo abierto y realismo.'
                ],
                [
                    'titulo' => 'The Witcher 3: Wild Hunt',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/292030/header.jpg',
                    'descripcion' => 'Conviértete en un cazador de monstruos y viaja por un mundo lleno de magia.'
                ],
                [
                    'titulo' => 'Hades',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1145360/header.jpg',
                    'descripcion' => 'Escapa del inframundo en este juego de acción roguelike.'
                ],
                [
                    'titulo' => 'Stardew Valley',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/413150/header.jpg',
                    'descripcion' => 'Construye la granja de tus sueños y haz amigos en el pueblo.'
                ],
                [
                    'titulo' => 'Terraria',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/105600/header.jpg',
                    'descripcion' => 'Explora, construye y combate en este sandbox 2D lleno de posibilidades.'
                ],
                [
                    'titulo' => "Don't Starve Together",
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/322330/header.jpg',
                    'descripcion' => 'Sobrevive en un mundo oscuro y peligroso junto a tus amigos.'
                ],
                [
                    'titulo' => 'ARK: Survival Evolved',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/346110/header.jpg',
                    'descripcion' => 'Domina dinosaurios y sobrevive en una isla misteriosa.'
                ],
                [
                    'titulo' => 'Left 4 Dead 2',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/550/header.jpg',
                    'descripcion' => 'Combate hordas de zombis en este shooter cooperativo clásico.'
                ],
                [
                    'titulo' => 'Portal 2',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/620/header.jpg',
                    'descripcion' => 'Resuelve puzzles con portales en una historia divertida y desafiante.'
                ],
                [
                    'titulo' => 'Fall Guys',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1097150/header.jpg',
                    'descripcion' => 'Compite en locas pruebas multijugador para ser el último en pie.'
                ],
                [
                    'titulo' => 'Subnautica',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/264710/header.jpg',
                    'descripcion' => 'Explora un océano alienígena lleno de criaturas y misterios.'
                ],
                [
                    'titulo' => 'The Forest',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/242760/header.jpg',
                    'descripcion' => 'Sobrevive en un bosque hostil después de un accidente aéreo.'
                ],
                [
                    'titulo' => 'Slime Rancher',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/433340/header.jpg',
                    'descripcion' => 'Cría adorables slimes en una colorida granja espacial.'
                ],
                [
                    'titulo' => 'RimWorld',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/294100/header.jpg',
                    'descripcion' => 'Gestiona una colonia en un planeta alienígena impredecible.'
                ],
                [
                    'titulo' => 'Phasmophobia',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/739630/header.jpg',
                    'descripcion' => 'Investiga casas embrujadas con tu equipo en este juego de terror.'
                ],
                [
                    'titulo' => 'Raft',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/648800/header.jpg',
                    'descripcion' => 'Sobrevive en el océano recolectando recursos desde tu balsa flotante.'
                ],
                [
                    'titulo' => 'Halo Infinite',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1240440/header.jpg',
                    'descripcion' => 'El regreso del Jefe Maestro en una nueva batalla por la humanidad.'
                ],
                [
                    'titulo' => 'Valorant',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1172470/header.jpg',
                    'descripcion' => 'Shooter táctico con habilidades únicas y estrategia de equipo.'
                ],
                [
                    'titulo' => 'Apex Legends',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1172470/header.jpg',
                    'descripcion' => 'Battle royale dinámico con héroes y habilidades especiales.'
                ],
                [
                    'titulo' => 'FIFA 23',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1811260/header.jpg',
                    'descripcion' => 'La experiencia futbolística definitiva con nuevas mecánicas de juego.'
                ],
                [
                    'titulo' => 'NBA 2K24',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/2338770/header.jpg',
                    'descripcion' => 'El mejor simulador de baloncesto con gráficos realistas y modos competitivos.'
                ],
                [
                    'titulo' => 'Forza Horizon 5',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1551360/header.jpg',
                    'descripcion' => 'Explora el vibrante mundo abierto de México en este emocionante juego de carreras.'
                ],
                [
                    'titulo' => 'Call of Duty: Modern Warfare II',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1938090/header.jpg',
                    'descripcion' => 'Acción táctica y combates intensos en la última entrega de la saga.'
                ],
                [
                    'titulo' => 'Resident Evil Village',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1196590/header.jpg',
                    'descripcion' => 'Sobrevive a horrores inimaginables en una aldea misteriosa.'
                ],
                [
                    'titulo' => 'Assassin’s Creed Valhalla',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/2208920/header.jpg',
                    'descripcion' => 'Conviértete en un legendario guerrero vikingo en tierras inglesas.'
                ],
                [
                    'titulo' => 'God of War',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1593500/header.jpg',
                    'descripcion' => 'Acompaña a Kratos y Atreus en una épica aventura mitológica.'
                ],
                [
                    'titulo' => 'Horizon Zero Dawn',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1151640/header.jpg',
                    'descripcion' => 'Explora un mundo postapocalíptico dominado por máquinas salvajes.'
                ],
                [
                    'titulo' => 'Sekiro: Shadows Die Twice',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/814380/header.jpg',
                    'descripcion' => 'Enfrenta desafíos mortales en el Japón feudal como un guerrero shinobi.'
                ],
                [
                    'titulo' => 'Death Stranding',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1190460/header.jpg',
                    'descripcion' => 'Reconecta un mundo fragmentado en esta experiencia única de Hideo Kojima.'
                ],
                [
                    'titulo' => 'The Last of Us Part I',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1888930/header.jpg',
                    'descripcion' => 'Sobrevive en un mundo postapocalíptico en esta emotiva historia de Joel y Ellie.'
                ],
                [
                    'titulo' => 'Cyberpunk 2077',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/header.jpg',
                    'descripcion' => 'Sumérgete en una metrópolis futurista llena de acción y decisiones morales.'
                ],
                [
                    'titulo' => 'Far Cry 6',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/2369390/header.jpg',
                    'descripcion' => 'Lucha por la libertad en una isla caribeña gobernada por un dictador.'
                ],
                [
                    'titulo' => 'Ghost of Tsushima',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/2215430/header.jpg',
                    'descripcion' => 'Defiende tu tierra natal como un samurái en el Japón feudal.'
                ],
                [
                    'titulo' => 'Doom Eternal',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/782330/header.jpg',
                    'descripcion' => 'Desata el infierno en la Tierra en esta intensa experiencia de disparos.'
                ],
                [
                    'titulo' => 'Control',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/870780/header.jpg',
                    'descripcion' => 'Explora una agencia secreta y desentraña misterios sobrenaturales.'
                ],
                [
                    'titulo' => 'Metro Exodus',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/412020/header.jpg',
                    'descripcion' => 'Viaja a través de una Rusia postapocalíptica en busca de un nuevo hogar.'
                ],
                [
                    'titulo' => 'Battlefield 2042',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1517290/header.jpg',
                    'descripcion' => 'Participa en combates masivos en un futuro cercano en constante cambio.'
                ],
                [
                    'titulo' => 'It Takes Two',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1426210/header.jpg',
                    'descripcion' => 'Embárcate en una aventura cooperativa única llena de desafíos creativos.'
                ],
                [
                    'titulo' => 'Little Nightmares II',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/860510/header.jpg',
                    'descripcion' => 'Enfrenta tus miedos en este oscuro y encantador juego de plataformas.'
                ],
                [
                    'titulo' => 'Returnal',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1649240/header.jpg',
                    'descripcion' => 'Rompe el ciclo en este intenso shooter roguelike de ciencia ficción.'
                ],
                [
                    'titulo' => 'Ratchet & Clank: Rift Apart',
                    'imagen' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1895880/header.jpg',
                    'descripcion' => 'Viaja a través de dimensiones en esta emocionante aventura intergaláctica.'
                ]

            ];

        foreach ($juegos as $juego) {
            Videojuego::create([
                'titulo' => $juego['titulo'],
                'genero' => fake()->randomElement(['Acción', 'Aventura', 'RPG', 'Shooter', 'Simulación', 'Estrategia']),
                'plataforma' => fake()->randomElement(['PC', 'PlayStation 5', 'Xbox Series X', 'Nintendo Switch']),
                'descripcion' => $juego['descripcion'],
                'precio' => fake()->randomFloat(2, 20, 100),
                'lanzamiento' => fake()->date(),
                'imagen' => $juego['imagen'],
            ]);
        }
    }


}
