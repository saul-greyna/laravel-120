@extends('components.layout')

@section('title', 'Lugares')

@section('content')
<main>
    <h2>Lista de Lugares</h2>
    <div class="tabla-vistas" role="region" tabindex="0">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Código Postal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lugares as $lugar)
                    <tr>
                        <td><a href="{{ url('/lugares/' . $lugar->id_lugar) }}">{{ $lugar->id_lugar }}</a></td>
                        <td>{{ $lugar->nombre }}</td>
                        <td>{{ $lugar->direccion }}</td>
                        <td>{{ $lugar->cp }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay lugares registrados aún.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
    </div>
</main>
@endsection
