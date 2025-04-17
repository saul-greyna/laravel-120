@extends('components.layout')

@section('title', 'Camiones')

@section('content')
<main>
    <h2>Lista de Camiones</h2>
    <div class="tabla-vistas">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Placas</th>
                    <th>Tipo</th>
                    <th>ID Camionero</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($camiones as $camion)
                <tr>
                    <td>{{ $camion->num_camion }}</td>
                    <td>{{ $camion->placas }}</td>
                    <td>{{ $camion->tipo }}</td>
                    <td>{{ $camion->id_camionero ?? 'Sin asignar' }}</td>
                    <td>
                        <a href="{{ route('camiones.detalle', $camion->num_camion) }}">Detalle</a>
                        <a href="/camiones/editar/{{ $camion->num_camion }}">Editar</a>
                        <a href="/camiones/eliminar/{{ $camion->num_camion }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <a href="{{ url('/') }}">Volver al inicio</a>
                        <a href="/camiones/crear" class="btn">Agregar camion</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</main>
@endsection
