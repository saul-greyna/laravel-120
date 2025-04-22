@extends('components.layout')

@section('title', 'Lugares')

@section('content')
<main>
    <h2 class="titulo-vistas">Lista de Lugares</h2>
    <div class="tabla-vistas">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Código Postal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lugares as $lugar)
                <tr>
                    <td>{{ $lugar->id_lugar }}</td>
                    <td>{{ $lugar->nombre }}</td>
                    <td>{{ $lugar->direccion }}</td>
                    <td>{{ $lugar->cp  }}</td>
                    <td>
                        <a href="{{ route('lugares.detalle', $lugar->id_lugar) }}">Detalle</a>
                        <a href="/lugares/editar/{{ $lugar->id_lugar }}">Editar</a>
                        <a href="/lugares/eliminar/{{ $lugar->id_lugar }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <a href="{{ url('/') }}">Volver al inicio</a>
                        <a href="/lugares/crear" class="btn">Crear Lugar</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</main>
@endsection
