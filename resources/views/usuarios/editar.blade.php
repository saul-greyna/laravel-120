@extends('components.layout')

@section('title', 'Editar Usuario')

@section('content')
<main>
    <h2>Editar Usuario</h2>

    @if(!empty($usuario))
    <form method="post" action="/usuarios/update/{{ $usuario->id }}">
        @csrf

        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}">

        <label>Correo</label>
        <input type="email" name="correo" value="{{ $usuario->correo }}">

        <label>Perfil</label>
        <input type="text" name="perfil" value="{{ $usuario->perfil }}">

        <label>Foto (URL o nombre de archivo)</label>
        <input type="text" name="foto" value="{{ $usuario->foto }}">

        <br><br>
        <button type="submit">Actualizar</button>
        <a href="/usuarios">Cancelar</a>
    </form>
    @endif
</main>
@endsection
