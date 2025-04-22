@extends('components.layout')

@section('title', 'Editar Lugar')

@section('content')
<main id="formulario-container">
    <h2 id="titulo-formulario">Editar Lugar</h2>

    <form id="lugar-form" method="post" action="/lugares/update/{{ $lugar->id_lugar }}">
        @csrf

        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $lugar->nombre }}">
        </div>

        <div class="campo">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" value="{{ $lugar->direccion }}">
        </div>

        <div class="campo">
            <label for="cp">Código Postal</label>
            <input type="text" id="cp" name="cp" value="{{ $lugar->cp }}">
        </div>

        <div class="botones">
            <button type="submit" class="boton-elegante">Actualizar</button>
            <a href="/lugares" id="btn-cancelar">Cancelar</a>
        </div>
    </form>
</main>
@endsection
