@extends('components.layout')

@section('title', 'Editar Camionero')

@section('content')
<main>
    <h2>Editar Camionero</h2>

    @if(!empty($camionero))
    <form method="post" action="/camioneros/update/{{ $camionero->id_camionero }}">
        @csrf

        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $camionero->nombre }}">

        <label>Apellidos</label>
        <input type="text" name="apellidos" value="{{ $camionero->apellidos }}">

        <label>Dirección</label>
        <input type="text" name="direccion" value="{{ $camionero->direccion }}">

        <label>Salario</label>
        <input type="text" name="salario" value="{{ $camionero->salario }}">

        <label>Licencia</label>
        <input type="text" name="licencia" value="{{ $camionero->licencia }}">

        <br><br>
        <button type="submit">Actualizar</button>
        <a href="/camioneros">Cancelar</a>
    </form>
    @endif
</main>
@endsection
