@extends('components.layout')

@section('title', 'Editar Paquete')

@section('content')
<main id="formulario-container">
    <h2 id="titulo-formulario">Editar Paquete</h2>

    <form id="paquete-form" method="post" action="/paquetes/update/{{ $paquete->id_paq }}">
        @csrf

        <div class="campo">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion">{{ $paquete->descripcion }}</textarea>
        </div>

        <div class="campo">
            <label for="remitente">Remitente</label>
            <input type="text" id="remitente" name="remitente" value="{{ $paquete->remitente }}">
        </div>

        <div class="campo">
            <label for="id_camionero">ID Camionero</label>
            <input type="number" id="id_camionero" name="id_camionero" value="{{ $paquete->id_camionero }}">
        </div>

        <div class="campo">
            <label for="id_lugar_destino">ID Lugar Destino</label>
            <input type="number" id="id_lugar_destino" name="id_lugar_destino" value="{{ $paquete->id_lugar_destino }}">
        </div>

        <div class="botones">
            <button type="submit" class="boton-elegante">Actualizar</button>
            <a href="/paquetes" id="btn-cancelar">Cancelar</a>
        </div>
    </form>
</main>
@endsection
