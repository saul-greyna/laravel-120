@extends('components.layout')

@section('title', 'Editar Camión')

@section('content')
<main>
    <h2>Editar Camión</h2>

    @if(!empty($camion))
    <form method="post" action="/camiones/update/{{ $camion->num_camion }}">
        @csrf

        <label>Placas</label>
        <input type="text" name="placas" value="{{ $camion->placas }}">

        <label>Tipo</label>
        <input type="text" name="tipo" value="{{ $camion->tipo }}">

        <label>ID del Camionero</label>
        <input type="text" name="id_camionero" value="{{ $camion->id_camionero }}">

        <br><br>
        <button type="submit">Actualizar</button>
        <a href="/camiones">Cancelar</a>
    </form>
    @endif
</main>
@endsection
