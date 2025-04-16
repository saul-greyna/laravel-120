@extends('components.layout')

@section('title', 'Detalle del paquete')

@section('content')
<main>
    <div class="tabla-detalle">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Detalle del usuario</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>ID:</strong></td>
                    <td>{{ $usuario->id }}</td>
                </tr>
                <tr>
                    <td><strong>Nombre</strong></td>
                    <td>{{ $usuario->nombre }}</td>
                </tr>
                <tr>
                    <td><strong>Correo</strong></td>
                    <td>{{ $usuario->correo }}</td>
                </tr>
                <tr>
                    <td><strong>Perfil</strong></td>
                    <td>{{ $usuario->perfil }}</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <strong><a href="{{ url('/usuarios') }}">Volver a la lista</a></strong>
                    </td>
                </tr>                                
            </tbody>
        </table>        
    </div>
</main>
@endsection