@extends('components.layout')

@section('title', 'Editar Paquete')

@section('content')
<main>
    <h2>Editar Paquete</h2>

    @if(!empty($paquete))
    <form method="post" action="/paquetes/update/{{ $paquete->id_paq }}">
        @csrf

        <label>Descripción</label>
        <textarea name="descripcion">{{ $paquete->descripcion }}</textarea>

        <label>Remitente</label>
        <input type="text" name="remitente" value="{{ $paquete->remitente }}">

        <label>ID Camionero</label>
        <input type="number" name="id_camionero" value="{{ $paquete->id_camionero }}">

        <label>ID Lugar Destino</label>
        <input type="number" name="id_lugar_destino" value="{{ $paquete->id_lugar_destino }}">

        <br><br>
        <button type="submit">Actualizar</button>
        <a href="/paquetes">Cancelar</a>
    </form>
    @endif
</main>
@endsection
