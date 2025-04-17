@extends('components.layout')

@section('title', 'Camioneros')

@section('content')
<main>
    <h2>Lista de Camioneros</h2>
    <div class="tabla-vistas">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Salario</th>
                    <th>Licencia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($camioneros as $camionero)
                <tr>
                    <td>{{ $camionero->id_camionero }}</td>
                    <td>{{ $camionero->nombre }}</td>
                    <td>{{ $camionero->apellidos }}</td>
                    <td>{{ $camionero->direccion }}</td>
                    <td>{{ $camionero->salario }}</td>
                    <td>{{ $camionero->licencia }}</td>
                    <td>
                        <a href="{{ route('camioneros.show', $camionero->id_camionero) }}">Detalle</a>
                        <a href="/camioneros/editar/{{ $camionero->id_camionero }}">Editar</a>
                        <a href="/camioneros/eliminar/{{ $camionero->id_camionero }}">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7">
                        <a href="{{ url('/') }}">Volver al inicio</a>
                        <a href="/camioneros/crear" class="btn">Nuevo Camionero</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</main>
@endsection
