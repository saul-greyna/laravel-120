<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Paquetería')</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
</head>
<body>
    <header>
        <h1>Paquetería</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/camioneros') }}">Camioneros</a></li>
                <li><a href="{{ url('/camiones') }}">Camiones</a></li>
                <li><a href="{{ url('/lugares') }}">Lugares</a></li>
                <li><a href="{{ url('/paquetes') }}">Paquetes</a></li>
                <li><a href="{{ url('/usuarios') }}">Usuarios</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 Saul Reyna</p>
    </footer>
</body>
</html>

