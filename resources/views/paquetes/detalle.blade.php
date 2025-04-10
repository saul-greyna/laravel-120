@extends('components.layout')

@section('title', 'Detalle del paquete')

@section('content')
<main>
    <h2>Detalle del paquete</h2>
    <ul>
        <li><strong>ID:</strong> {{ $paquete->id_paq }}</li>
        <li><strong>Descripcion:</strong> {{ $paquete->descripcion }}</li>
        <li><strong>Remitente:</strong> {{ $paquete->remitente }}</li>
        <li><strong>Id Camionero:</strong> {{ $paquete->id_camionero }}</li>
        <li><strong>Id Lugar destino:</strong> {{ $paquete->id_lugar_destino }}</li>
    </ul>
    <a href="{{ url('/paquetes') }}">← Volver a la lista</a>
</main>
@endsection