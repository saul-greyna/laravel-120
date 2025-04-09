@extends('layouts.app')

@section('content')
    <h1>Detalle del Paquete #{{ $paquete->id_paq }}</h1>

    <p><strong>Remitente:</strong> {{ $paquete->remitente }}</p>
    <p><strong>Descripción:</strong> {{ $paquete->descripcion }}</p>
    <p><strong>Camionero ID:</strong> {{ $paquete->id_camionero ?? 'N/A' }}</p>
    <p><strong>Lugar Destino ID:</strong> {{ $paquete->id_lugar_destino ?? 'N/A' }}</p>

    <a href="{{ url('/paquetes') }}">Volver</a>
@endsection
