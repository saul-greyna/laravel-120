@extends('components.layout')

@section('title', 'Detalle de Camionero')

@section('content')
<main>
    <h2>Detalle del Camionero</h2>
    <ul>
        <li><strong>ID:</strong> {{ $camionero->id_camionero }}</li>
        <li><strong>Nombre:</strong> {{ $camionero->nombre }}</li>
        <li><strong>Apellidos:</strong> {{ $camionero->apellidos }}</li>
        <li><strong>Dirección:</strong> {{ $camionero->direccion }}</li>
        <li><strong>Salario:</strong> ${{ $camionero->salario }}</li>
        <li><strong>Licencia:</strong> {{ $camionero->licencia }}</li>
    </ul>
    <a href="{{ url('/camioneros') }}">← Volver a la lista</a>
</main>
@endsection
