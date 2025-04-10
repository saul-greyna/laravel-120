@extends('components.layout')

@section('title', 'Lugares')

@section('content')
<main>
    <h2>Lista de Lugares</h2>
    <div class="tabla-vistas">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lugares as $lugar)
                <tr>
                    <td>{{ $lugar->id_lugar }}</td>
                    <td>{{ $lugar->nombre }}</td>
                    <td>{{ $lugar->direccion }}</td>
                    <td>
                        <a href="{{ route('lugares.detalle', $lugar->id_lugar) }}">Detalle</a>
                        <a href="{{ url('lugares/editar', $lugar->id_lugar) }}">Editar</a>
                        <form action="{{ url('lugares/eliminar', $lugar->id_lugar) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
