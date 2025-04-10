@extends('components.layout')

@section('title', 'Detalle del paquete')

@section('content')
<main>
    <h2>Detalle del paquete</h2>
    <ul>
        <li><strong>ID:</strong> {{ $usuario->id_paq }}</li>
        <li><strong>Descripcion:</strong> {{ $usuario->descripcion }}</li>
        <li><strong>Remitente:</strong> {{ $usuario->remitente }}</li>
        <li><strong>Id Camionero:</strong> {{ $usuario->id_camionero }}</li>
        <li><strong>Id Lugar destino:</strong> {{ $usuario->id_lugar_destino }}</li>
    </ul>
    <a href="{{ url('/usuarios') }}">← Volver a la lista</a>
</main>
@endsection