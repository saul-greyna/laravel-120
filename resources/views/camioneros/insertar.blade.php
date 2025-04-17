@extends('components.layout')

@section('title', 'Insertar Camionero')

@section('content')
<main>
    <div class="modal-like-form">
        <h2>Registrar nuevo camionero</h2>

        <form method="post" action="/camioneros/save">
            @csrf

            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" required>

            <label>Apellidos</label>
            <input type="text" name="apellidos" placeholder="Apellidos" required>

            <label>Dirección</label>
            <input type="text" name="direccion" placeholder="Dirección">

            <label>Salario</label>
            <input type="text" name="salario" placeholder="Salario">

            <label>Licencia</label>
            <input type="text" name="licencia" placeholder="Licencia" required>

            <br><br>
            <button type="submit">Guardar</button>
            <a href="/camioneros">Cancelar</a>
        </form>
    </div>
</main>
@endsection
