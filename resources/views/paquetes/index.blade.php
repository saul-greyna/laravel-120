@extends('components.layout')

@section('title', 'Paquetes')

@section('content')
<main>
    <h2>Lista de Paquetes</h2>
    <div class="tabla-vistas">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Remitente</th>
                    <th>Camionero</th>
                    <th>Lugar Destino</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paquetes as $paquete)
                <tr>
                    <td>{{ $paquete->id_paq }}</td>
                    <td>{{ $paquete->descripcion }}</td>
                    <td>{{ $paquete->remitente }}</td>
                    <td>{{ $paquete->camionero->nombre ?? 'No asignado' }}</td>
                    <td>{{ $paquete->lugarDestino->nombre ?? 'No asignado' }}</td>
                    <td>
                        <a href="{{ url('paquetes/detalle', $paquete->id_paq) }}">Detalle</a>
                        <a href="/paquetes/editar/{{ $paquete->id_paq }}">Editar</a>
                        <a href="/paquetes/eliminar/{{ $paquete->id_paq }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <a href="{{ url('/') }}">Volver al inicio</a>
                        <a href="/paquetes/crear" class="btn">Nuevo Paquete</a>                        
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</main>
@endsection
