<!DOCTYPE html>
<html>
<head>
    <title>Lista de Videojuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --bg-primary: #0a0a0a;
            --bg-secondary: #1a1a1a;
            --bg-card: #252525;
            --purple-primary: #8b5cf6;
            --purple-secondary: #a855f7;
            --purple-accent: #c084fc;
            --text-primary: #f8fafc;
            --text-secondary: #cbd5e1;
            --border-color: #374151;
        }

        body {
            background: linear-gradient(135deg, var(--bg-primary) 0%, #1e1b4b 100%);
            color: var(--text-primary);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom {
            background: rgba(26, 26, 26, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(139, 92, 246, 0.1);
        }

        .navbar-brand img {
            filter: brightness(1.2) contrast(1.1);
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.05);
        }

        .search-form {
            position: relative;
        }

        .form-control {
            background: rgba(37, 37, 37, 0.8);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            border-radius: 25px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(37, 37, 37, 1);
            border-color: var(--purple-primary);
            box-shadow: 0 0 0 0.2rem rgba(139, 92, 246, 0.25);
            color: var(--text-primary);
        }

        .form-control::placeholder {
            color: var(--text-secondary);
        }

        .btn-search {
            background: linear-gradient(45deg, var(--purple-primary), var(--purple-secondary));
            border: none;
            border-radius: 25px;
            color: white;
            padding: 10px 25px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-search:hover {
            background: linear-gradient(45deg, var(--purple-secondary), var(--purple-accent));
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.3);
            color: white;
        }

        .main-title {
            font-size: 3.5rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, var(--purple-primary), var(--purple-accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 30px rgba(139, 92, 246, 0.3);
        }

        /* Carousel personalizado */
        .carousel-custom {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            margin-bottom: 4rem;
        }

        .carousel-item img {
            height: 450px;
            object-fit: cover;
            filter: brightness(0.8);
            transition: all 0.3s ease;
        }

        .carousel-item:hover img {
            filter: brightness(1);
            transform: scale(1.02);
        }

        .carousel-caption {
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            border-radius: 15px;
            padding: 2rem;
            bottom: 20px;
            left: 20px;
            right: 20px;
        }

        .carousel-caption h5 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--purple-accent);
            margin-bottom: 1rem;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 60px;
            height: 60px;
            background: rgba(139, 92, 246, 0.8);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            transition: all 0.3s ease;
        }

        .carousel-control-prev {
            left: 20px;
        }

        .carousel-control-next {
            right: 20px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: var(--purple-primary);
            transform: translateY(-50%) scale(1.1);
        }

        /* Cards de videojuegos */
        .game-card {
            background: linear-gradient(145deg, var(--bg-card), #2d2d2d);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .game-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(139, 92, 246, 0.2);
            border-color: var(--purple-primary);
        }

        .game-card img {
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .game-card:hover img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 1.5rem;
            background: var(--bg-card);
            display: flex;
            flex-direction: column;
        }

        .card-title {
            color: var(--text-primary);
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .card-text {
            color: var(--text-secondary);
            line-height: 1.6;
            flex-grow: 1;
            margin-bottom: 1.5rem;
        }

        .btn-view-more {
            background: linear-gradient(45deg, var(--purple-primary), var(--purple-secondary));
            border: none;
            border-radius: 15px;
            color: white;
            padding: 12px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            align-self: flex-start;
        }

        .btn-view-more:hover {
            background: linear-gradient(45deg, var(--purple-secondary), var(--purple-accent));
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.3);
            color: white;
        }

        /* Alert personalizado */
        .alert-custom {
            background: linear-gradient(45deg, #fbbf24, #f59e0b);
            border: none;
            border-radius: 15px;
            color: #92400e;
            font-weight: 600;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(251, 191, 36, 0.2);
        }

        /* Paginación personalizada */
        .pagination {
            justify-content: center;
            gap: 10px;
        }

        .page-link {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            border-radius: 10px;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .page-link:hover {
            background: var(--purple-primary);
            border-color: var(--purple-primary);
            color: white;
            transform: translateY(-2px);
        }

        .page-item.active .page-link {
            background: var(--purple-primary);
            border-color: var(--purple-primary);
            color: white;
        }

        .footer-custom {
            background: linear-gradient(135deg, var(--bg-secondary), #1e1b4b);
            color: var(--text-primary);
            border-top: 1px solid var(--border-color);
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.3);
        }

        .footer-custom p {
            margin-bottom: 0.5rem;
        }

        .footer-custom strong {
            color: var(--purple-accent);
        }

        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .game-card,
        .carousel-custom,
        .main-title {
            animation: fadeInUp 0.6s ease-out;
        }

        .game-card:nth-child(2) { animation-delay: 0.1s; }
        .game-card:nth-child(3) { animation-delay: 0.2s; }
        .game-card:nth-child(4) { animation-delay: 0.3s; }

        /* Scrollbar personalizado */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--purple-primary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--purple-secondary);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 2.5rem;
            }
            
            .carousel-caption h5 {
                font-size: 1.5rem;
            }
            
            .navbar-custom .container {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/videojuegos">
      <img src="https://i.blogs.es/b028cc/epic02/450_1000.webp" height="40" alt="Logo">
    </a>
    <form class="d-flex search-form" method="GET" action="/videojuegos">
      <input class="form-control me-3" type="search" name="search" placeholder="Buscar videojuegos..." aria-label="Search">
      <button class="btn btn-search" type="submit">
        <i class="fas fa-search"></i>
      </button>
    </form>
  </div>
</nav>

<div class="container py-5" style="margin-top: 80px;">
    <h1 class="main-title">
        <i class="fas fa-gamepad"></i> Videojuegos
    </h1>
    
    @if($destacados->count() > 0)
    <div id="carruselDestacados" class="carousel slide carousel-custom" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            @foreach($destacados as $index => $juego)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ $juego->imagen }}" class="d-block w-100" alt="Imagen de {{ $juego->titulo }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $juego->titulo }}</h5>
                    <p>{{ Str::limit($juego->descripcion, 100) }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselDestacados" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselDestacados" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    @endif
    
    <p>Total de videojuegos: {{ $videojuegos->count() }}</p>

    <div class="row" id="cards">
        @if($videojuegos->isEmpty())
            <div class="col-12">
                <div class="alert alert-custom">
                    <i class="fas fa-search"></i>
                    No se encontraron videojuegos con ese nombre.
                </div>
            </div>
        @endif
        
        @foreach($videojuegos as $videojuego)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="game-card">

                    <p>{{ $videojuego->titulo }}</p>
                    
                    <img src="{{ $videojuego->imagen }}" class="card-img-top" alt="imagen de {{ $videojuego->titulo }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $videojuego->titulo }}</h5>
                        <p class="card-text">{{ Str::limit($videojuego->descripcion, 100) }}</p>
                        <a href="/videojuegos/{{ $videojuego->id }}" class="btn-view-more">
                            Ver más <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        
        <div class="col-12">
            <div class="d-flex justify-content-center mt-4">
                {{ $videojuegos->withQueryString()->fragment('cards')->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<footer class="footer-custom text-center py-5 mt-5">
    <div class="container">
        <p class="mb-2">🎮 Proyecto: <strong>Videojuegos</strong></p>
        <p class="mb-2">📧 Ruth Eva Toro Nogales | Desarrollado con Laravel & Bootstrap</p>
        <p class="mb-0">© {{ date('Y') }} Todos los derechos reservados.</p>
    </div>
</footer>
</body>
</html>