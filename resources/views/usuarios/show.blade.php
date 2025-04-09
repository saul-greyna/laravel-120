@extends('components.layout')

@section('title', 'Detalle Usuario')

@section('content')
<main>
    <h2>Detalle de Usuario</h2>
    <div class="card">
        <h3>{{ $usuario->nombre }}</h3>
        <p>Correo: {{ $usuario->correo }}</p>
        <p>Perfil: {{ $usuario->perfil }}</p>
        <p>Creado: {{ $usuario->created_at }}</p>
    </div>
</main>
@endsection
