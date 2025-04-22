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
    <div class="contenerdor-principal">
        <header class="mi-header">
            <a id="titulo" href="{{ url('/') }}">PaquetExpress</a>
            <nav>
                @auth
                    <ul class="menu">
                        <li></li>
                        <li><a href="{{ url('/camioneros') }}">Camioneros</a></li>
                        <li><a href="{{ url('/camiones') }}">Camiones</a></li>
                        <li><a href="{{ url('/lugares') }}">Lugares</a></li>
                        <li><a href="{{ url('/paquetes') }}">Paquetes</a></li>
                        <li><a href="{{ url('/usuarios') }}">Usuarios</a></li>
                        <li><a href="{{ url('/consultas') }}">Consultas</a></li>
                        <li>
                            {{ Auth::user()->name }}
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button class="boton-elegante" type="submit">Cerrar sesión</button>
                            </form>
                        </li>
                    </ul>
                @endauth
            </nav>
            <nav>
                @guest  
                <a class="boton-elegante" href="{{ route('login') }}">Iniciar sesión</a>
                <a class="boton-elegante" href="{{ route('register') }}">Registrarse</a>
                @endguest
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>© 2025 Saul Reyna</p>
        </footer>
    </div>
</body>
</html>

