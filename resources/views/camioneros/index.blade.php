@extends('components.layout')

@section('title', 'Camioneros')

@section('content')
<main>
    <h2>Lista de Camioneros</h2>
    <div class="tabla-vistas" role="region" tabindex="0">
        <table>
            <caption>Camioneros Registrados</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Licencia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($camioneros as $camionero)
                <tr>
                    <td>{{ $camionero->id }}</td>
                    <td>{{ $camionero->nombre }}</td>
                    <td>{{ $camionero->telefono }}</td>
                    <td>{{ $camionero->licencia }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
