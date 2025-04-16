@extends('components.layout')

@section('title', 'Detalle del paquete')

@section('content')
<main>
    <h2>Detalle del paquete</h2>
    <ul>
        <li><strong>ID:</strong> {{ $usuario->id }}</li>
        <li><strong>Nombre</strong> {{ $usuario->nombre }}</li>
        <li><strong>Correo</strong> {{ $usuario->correo }}</li>
        <li><strong>Perfil</strong> {{ $usuario->perfil }}</li>
    </ul>
    <a href="{{ url('/usuarios') }}">← Volver a la lista</a>
</main>
@endsection