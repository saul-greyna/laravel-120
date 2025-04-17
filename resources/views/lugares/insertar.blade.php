@extends('components.layout')

@section('title', 'Insertar Lugar')

@section('content')
<main>
    <div class="modal-like-form">
        <h2>Registrar nuevo lugar</h2>

        <form method="post" action="/lugares/save">
            @csrf

            <label>Nombre</label>
            <input type="text" name="nombre" required>

            <label>Dirección</label>
            <input type="text" name="direccion" required>

            <label>Código Postal</label>
            <input type="text" name="cp" required>

            <br><br>
            <button type="submit">Guardar</button>
            <a href="/lugares">Cancelar</a>
        </form>
    </div>
</main>
@endsection
