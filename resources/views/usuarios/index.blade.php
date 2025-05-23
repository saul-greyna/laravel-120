@extends('components.layout')

@section('title', 'Usuarios')

@section('content')
<main>
    <h2 class="titulo-vistas">Lista de Usuarios</h2>
    <div class="tabla-vistas">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Perfil</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td>{{ $usuario->perfil }}</td>
                    <td>
                        <a href="{{ url('usuarios/detalle', $usuario->id) }}">Detalle</a>
                        <a href="/usuarios/editar/{{ $usuario->id }}">Editar</a>
                        <a href="/usuarios/eliminar/{{ $usuario->id }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <a href="{{ url('/') }}">Volver al inicio</a>
                        <a href="/usuarios/crear" class="btn">Nuevo Usuario</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</main>
@endsection
