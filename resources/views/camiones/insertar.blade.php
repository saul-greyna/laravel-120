@extends('components.layout')

@section('title', 'Insertar Camión')

@section('content')
<main>
    <div class="modal-like-form">
        <h2>Registrar nuevo camión</h2>

        <form method="post" action="/camiones/save">
            @csrf

            <label>Placas</label>
            <p>Formato: 3 letras, 3 números, 2 letras</p>
            <p>No se admiten placas duplicadas</p>
            <input type="text" name="placas" required>              

            <label>Tipo</label>
            <input type="text" name="tipo" required>

            <label>Camionero</label>
            <p>No se pueden repetir los id de camioneros</p>
            <select name="id_camionero">
                <option value="" disabled selected>Sin asignar</option>
                @foreach($camioneros as $camionero)
                    <option value="{{ $camionero->id_camionero }}">
                        {{ $camionero->nombre }} {{ $camionero->apellidos }}
                    </option>
                @endforeach
            </select>
            <p>Si no se asigna un camionero, el camión quedará sin asignar.</p>

            <br><br>
            <button type="submit">Guardar</button>
            <a href="/camiones">Cancelar</a>
        </form>
    </div>
</main>
@endsection
