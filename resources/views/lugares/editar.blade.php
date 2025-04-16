@extends('components.layout')

@section('title', 'Editar Lugar')

@section('content')
<main>
    <h2>Editar Lugar</h2>

    @if(!empty($lugar))
    <form method="post" action="/lugares/update/{{ $lugar->id_lugar }}">
        @csrf

        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $lugar->nombre }}">

        <label>Dirección</label>
        <input type="text" name="direccion" value="{{ $lugar->direccion }}">

        <label>Código Postal</label>
        <input type="text" name="cp" value="{{ $lugar->cp }}">

        <br><br>
        <button type="submit">Actualizar</button>
        <a href="/lugares">Cancelar</a>
    </form>
    @endif
</main>
@endsection
