@extends('components.layout')

@section('title', 'Editar Camionero')

@section('content')
<main id="formulario-container">
    <h2 id="titulo-formulario">Editar Camionero</h2>

    <form id="camionero-form" method="post" action="/camioneros/update/{{ $camionero->id_camionero }}">
        @csrf
        
        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $camionero->nombre }}">
        </div>

        <div class="campo">
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" value="{{ $camionero->apellidos }}">
        </div>

        <div class="campo">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" value="{{ $camionero->direccion }}">
        </div>

        <div class="campo">
            <label for="salario">Salario</label>
            <input type="text" id="salario" name="salario" value="{{ $camionero->salario }}">
        </div>

        <div class="campo">
            <label for="licencia">Licencia</label>
            <input type="text" id="licencia" name="licencia" value="{{ $camionero->licencia }}">
        </div>

        <div class="botones">
            <button type="submit" class="boton-elegante">Actualizar</button>
            <a href="/camioneros" id="btn-cancelar">Cancelar</a>
        </div>
    </form>
</main>
@endsection
