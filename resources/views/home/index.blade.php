@extends('components.layout')

@section('content')
    <h1>Bienvenido a la página principal</h1>

    @auth
        <div style="margin-top: 20px; border: 1px solid #ccc; padding: 10px;">
            <p>Hola, <strong>{{ Auth::user()->name }}</strong></p>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>
        </div>
    @endauth

    @guest
        <p>No has iniciado sesión. <a href="{{ route('login') }}">Iniciar sesión</a></p>
    @endguest
@endsection
