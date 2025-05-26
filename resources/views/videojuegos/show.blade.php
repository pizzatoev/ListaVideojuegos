<!DOCTYPE html>
<html>
<head>
    <title>{{ $videojuego->titulo }}</title>
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

        .btn-back {
            background: rgba(37, 37, 37, 0.8);
            border: 1px solid var(--border-color);
            color: var(--text-primary);
            border-radius: 15px;
            padding: 12px 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-back:hover {
            background: var(--purple-primary);
            border-color: var(--purple-primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.3);
        }

        .game-card {
            background: linear-gradient(145deg, var(--bg-card), #2d2d2d);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .game-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(139, 92, 246, 0.2);
            border-color: var(--purple-primary);
        }

        .game-image {
            height: 400px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .game-card:hover .game-image {
            transform: scale(1.05);
        }

        .card-body {
            padding: 2rem;
            background: var(--bg-card);
        }

        .game-title {
            color: var(--text-primary);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(45deg, var(--purple-primary), var(--purple-accent));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .game-info {
            display: grid;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid rgba(55, 65, 81, 0.3);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: var(--purple-accent);
            min-width: 120px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-value {
            color: var(--text-secondary);
            flex: 1;
        }

        .price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #10b981;
        }

        .description {
            background: rgba(37, 37, 37, 0.5);
            padding: 1.5rem;
            border-radius: 15px;
            border-left: 4px solid var(--purple-primary);
            line-height: 1.6;
            color: var(--text-secondary);
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

        .container > * {
            animation: fadeInUp 0.6s ease-out;
        }

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
    <a href="/videojuegos" class="btn-back mb-4">
        <i class="fas fa-arrow-left"></i>
        Volver a la lista
    </a>
    
    <div class="game-card">
        <img src="{{ $videojuego->imagen }}" class="card-img-top game-image" alt="imagen de {{ $videojuego->titulo }}">
        <div class="card-body">
            <h1 class="game-title">{{ $videojuego->titulo }}</h1>
            
            <div class="game-info">
                <div class="info-item">
                    <div class="info-label">
                        <i class="fas fa-gamepad"></i>
                        Género:
                    </div>
                    <div class="info-value">{{ $videojuego->genero }}</div>
                </div>
                
                <div class="info-item">
                    <div class="info-label">
                        <i class="fas fa-desktop"></i>
                        Plataforma:
                    </div>
                    <div class="info-value">{{ $videojuego->plataforma }}</div>
                </div>
                
                <div class="info-item">
                    <div class="info-label">
                        <i class="fas fa-dollar-sign"></i>
                        Precio:
                    </div>
                    <div class="info-value price">${{ $videojuego->precio }}</div>
                </div>
                
                <div class="info-item">
                    <div class="info-label">
                        <i class="fas fa-calendar-alt"></i>
                        Lanzamiento:
                    </div>
                    <div class="info-value">{{ $videojuego->lanzamiento }}</div>
                </div>
            </div>
            
            <div class="description">
                <h5 style="color: var(--purple-accent); margin-bottom: 1rem;">
                    <i class="fas fa-info-circle"></i> Descripción
                </h5>
                {{ $videojuego->descripcion }}
            </div>
        </div>
    </div>
</div>

<footer class="footer-custom text-center py-5 mt-5">
    <div class="container">
        <p class="mb-2">🎮 Proyecto: <strong>Videojuegos</strong></p>
        <p class="mb-2">📧 Ruth Eva Toro Nogales | Desarrollado con Laravel & Bootstrap</p>
        <p class="mb-0">© {{ date('Y') }} Todos los derechos reservados.</p>
    </div>
</footer>
</body>
</html>