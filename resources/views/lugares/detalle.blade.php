@extends('components.layout')

@section('title', 'Detalle del Lugar')

@section('content')
<main>
    <div class="tabla-detalle">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Detalle del Lugar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>ID:</strong></td>
                    <td>{{ $lugar->id_lugar }}</td>
                </tr>
                <tr>
                    <td><strong>Nombre:</strong></td>
                    <td>{{ $lugar->nombre }}</td>
                </tr>
                <tr>
                    <td><strong>Dirección:</strong></td>
                    <td>{{ $lugar->direccion }}</td>
                </tr>
                <tr>
                    <td><strong>Código Postal:</strong></td>
                    <td>{{ $lugar->cp }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <strong><a href="{{ url('/camiones') }}">Volver a la lista</a></strong>
                    </td>
                </tr>                                
            </tbody>
        </table>        
    </div>
</main>
@endsection
