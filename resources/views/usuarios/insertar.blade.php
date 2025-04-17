@extends('components.layout')

@section('title', 'Insertar Usuario')

@section('content')
<main>
    <div class="modal-like-form">
        <h2>Registrar nuevo usuario</h2>

        <form method="post" action="/usuarios/save">
            @csrf

            <label>Nombre</label>
            <input type="text" name="nombre" required>

            <label>Correo</label>
            <input type="email" name="correo" required>

            <label>Contraseña</label>
            <input type="text" name="contrasena" required>

            <label>Perfil</label>
            <input type="text" name="perfil">

            <label>Foto (URL)</label>
            <input type="text" name="foto">

            <br><br>
            <button type="submit">Guardar</button>
            <a href="/usuarios">Cancelar</a>
        </form>
    </div>
</main>
@endsection
