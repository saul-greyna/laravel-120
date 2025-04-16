@extends('components.layout')

@section('title', 'Detalle del paquete')

@section('content')
<main>
    <div class="tabla-detalle">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Detalle del paquete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>ID:</strong></td>
                    <td>{{ $paquete->id_paq }}</td>
                </tr>
                <tr>
                    <td><strong>Descripcion:</strong></td>
                    <td>{{ $paquete->descripcion }}</td>
                </tr>
                <tr>
                    <td><strong>Remitente:</strong></td>
                    <td>{{ $paquete->remitente }}</td>
                </tr>
                <tr>
                    <td><strong>Id Camionero:</strong></td>
                    <td>{{ $paquete->id_camionero }}</td>
                </tr>
                <tr>
                    <td><strong>Id Lugar destino:</strong></td>
                    <td>{{ $paquete->id_lugar_destino }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <strong><a href="{{ url('/paquetes') }}">Volver a la lista</a></strong>
                    </td>
                </tr>                                
            </tbody>
        </table>        
    </div>
</main>
@endsection