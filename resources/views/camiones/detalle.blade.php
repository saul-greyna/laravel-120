@extends('components.layout')

@section('title', 'Detalle del Camión')

@section('content')
<main>
    <div class="tabla-detalle">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Detalle del Camión</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>ID:</strong></td>
                    <td>{{ $camion->num_camion }}</td>
                </tr>
                <tr>
                    <td><strong>Placas:</strong></td>
                    <td>{{ $camion->placas }}</td>
                </tr>
                <tr>
                    <td><strong>Tipo:</strong></td>
                    <td>{{ $camion->tipo }}</td>
                </tr>
                <tr>
                    <td><strong>Camionero asignado:</strong></td>
                    <td>{{ $camion->id_camionero ?? 'No asignado' }}</td>
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
