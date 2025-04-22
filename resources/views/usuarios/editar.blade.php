@extends('components.layout')

@section('title', 'Editar Usuario')

@section('content')
<main id="formulario-container">
    <h2 id="titulo-formulario">Editar Usuario</h2>

    <form id="usuario-form" method="post" action="/usuarios/update/{{ $usuario->id }}">
        @csrf

        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $usuario->nombre }}">
        </div>

        <div class="campo">
            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" value="{{ $usuario->correo }}">
        </div>

        <div class="campo">
            <label for="perfil">Perfil</label>
            <input type="text" id="perfil" name="perfil" value="{{ $usuario->perfil }}">
        </div>

        <div class="campo">
            <label for="foto">Foto (URL o nombre de archivo)</label>
            <input type="text" id="foto" name="foto" value="{{ $usuario->foto }}">
        </div>

        <div class="botones">
            <button type="submit" class="boton-elegante">Actualizar</button>
            <a href="/usuarios" id="btn-cancelar">Cancelar</a>
        </div>
    </form>
</main>
@endsection
