<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Paquetería')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Paquetería</h1>
        <nav>
            @auth
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/camioneros') }}">Camioneros</a></li>
                    <li><a href="{{ url('/camiones') }}">Camiones</a></li>
                    <li><a href="{{ url('/lugares') }}">Lugares</a></li>
                    <li><a href="{{ url('/paquetes') }}">Paquetes</a></li>
                    <li><a href="{{ url('/usuarios') }}">Usuarios</a></li>
                    <li>
                        {{ Auth::user()->name }}
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit">Cerrar sesión</button>
                        </form>
                    </li>
                </ul>
            @endauth
        
            @guest
                <ul>
                    <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                </ul>
            @endguest
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

