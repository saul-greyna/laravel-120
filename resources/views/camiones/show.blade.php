@extends('components.layout')

@section('title', 'Detalle del Camión')

@section('content')
<main>
    <h2>Detalle del Camión</h2>
    <ul>
        <li><strong>ID:</strong> {{ $camion->num_camion }}</li>
        <li><strong>Placas:</strong> {{ $camion->placas }}</li>
        <li><strong>Tipo:</strong> {{ $camion->tipo }}</li>
        <li><strong>Camionero asignado:</strong> {{ $camion->id_camionero }}</li>
    </ul>
    <a href="{{ url('/camiones') }}">← Volver a la lista</a>
</main>
@endsection
