@extends('components.layout')
 
@section('title', 'Camioneros')
 
@section('content')
<h1>Lista de Paquetes</h1>
<div class="tabla-vistas" role="region" tabindex="0">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Remitente</th>
                <th>Descripción</th>
                <th>Camionero</th>
                <th>Destino</th>
            </tr>
        </thead>
        <tbody>
            @forelse($paquetes as $paquete)
                <tr>
                    <td><a href="{{ url('/paquetes/' . $paquete->id_paq) }}">{{ $paquete->id_paq }}</a></td>
                    <td>{{ $paquete->remitente }}</td>
                    <td>{{ $paquete->descripcion }}</td>
                    <td>{{ $paquete->id_camionero ?? 'N/A' }}</td>
                    <td>{{ $paquete->id_lugar_destino ?? 'N/A' }}</td>
                </tr>
            @empty
                <tr><td colspan="5">No hay paquetes registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

 