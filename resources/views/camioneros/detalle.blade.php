@extends('components.layout')

@section('title', 'Detalle de Camionero')

@section('content')
<main>
    <div class="tabla-detalle">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Detalles del Camionero</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>ID:</strong></td>
                    <td>{{ $camionero->id_camionero }}</td>
                </tr>
                <tr>
                    <td><strong>Nombre:</strong></td>
                    <td>{{ $camionero->nombre }}</td>
                </tr>
                <tr>
                    <td><strong>Apellidos:</strong></td>
                    <td>{{ $camionero->apellidos }}</td>
                </tr>
                <tr>
                    <td><strong>Dirección:</strong></td>
                    <td>{{ $camionero->direccion }}</td>
                </tr>
                <tr>
                    <td><strong>Salario:</strong></td>
                    <td>${{ $camionero->salario }}</td>
                </tr>
                <tr>
                    <td><strong>Licencia:</strong></td>
                    <td>{{ $camionero->licencia }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <strong><a href="{{ url('/camioneros') }}">Volver a la lista</a></strong>
                    </td>
                </tr>                                
            </tbody>
        </table>        
    </div>
</main>
@endsection
