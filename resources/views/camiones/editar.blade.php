@extends('components.layout')

@section('title', 'Editar Camión')

@section('content')
<main id="formulario-container">
    <h2 id="titulo-formulario">Editar Camión</h2>

    <form id="camion-form" method="post" action="/camiones/update/{{ $camion->num_camion }}">
        @csrf

        <div class="campo">
            <label for="placas">Placas</label>
            <input type="text" id="placas" name="placas" value="{{ $camion->placas }}">
        </div>

        <div class="campo">
            <label for="tipo">Tipo</label>
            <input type="text" id="tipo" name="tipo" value="{{ $camion->tipo }}">
        </div>

        <div class="campo">
            <label for="id_camionero">ID del Camionero</label>
            <input type="text" id="id_camionero" name="id_camionero" value="{{ $camion->id_camionero }}">
        </div>

        <div class="botones">
            <button type="submit" class="boton-elegante">Actualizar</button>
            <a href="/camiones" id="btn-cancelar">Cancelar</a>
        </div>
    </form>
</main>
@endsection
