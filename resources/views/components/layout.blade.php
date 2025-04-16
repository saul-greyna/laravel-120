<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>@yield('title', 'Paquetería')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <section class="contenerdor-principal">
        <header class="mi-header">
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
            </nav>
            <nav>
                @guest
                <button><a href="{{ route('login') }}">Iniciar sesión</a></button>
                <button><a href="{{ route('register') }}">Registrarse</a></button>
                @endguest
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>© 2025 Saul Reyna</p>
        </footer>
    </section>
</body>
</html>

