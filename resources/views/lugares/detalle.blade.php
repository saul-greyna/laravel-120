@extends('components.layout')

@section('title', 'Detalle del Lugar')

@section('content')
<main>
    <h2>Detalle del Lugar</h2>
    <ul>
        <li><strong>ID:</strong> {{ $lugar->id_lugar }}</li>
        <li><strong>Nombre:</strong> {{ $lugar->nombre }}</li>
        <li><strong>Dirección:</strong> {{ $lugar->direccion }}</li>
        <li><strong>Código Postal:</strong> {{ $lugar->cp }}</li>
    </ul>
    <a href="{{ url('/lugares') }}">← Volver a la lista</a>
</main>
@endsection
