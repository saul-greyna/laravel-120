@extends('components.layout')

@section('title', 'Insertar Paquete')

@section('content')
<main>
    <div class="modal-like-form">
        <h2>Registrar nuevo paquete</h2>

        <form method="post" action="/paquetes/save">
            @csrf

            <label>Descripción</label>
            <textarea name="descripcion" style="width: 100%; height: 100px;"></textarea>

            <label>Remitente</label>
            <input type="text" name="remitente" required>

            <label>Camionero</label>
            <select name="id_camionero">
                <option value="">Sin asignar</option>
                @foreach($camioneros as $camionero)
                    <option value="{{ $camionero->id_camionero }}">
                        {{ $camionero->nombre }} {{ $camionero->apellidos }}
                    </option>
                @endforeach
            </select>
            
            <label>Lugar Destino</label>
            <select name="id_lugar_destino">
                <option value="">Sin asignar</option>
                @foreach($lugares as $lugar)
                    <option value="{{ $lugar->id_lugar }}">
                        {{ $lugar->nombre }}
                    </option>
                @endforeach
            </select>

            <br><br>
            <button type="submit">Guardar</button>
            <a href="/paquetes">Cancelar</a>
        </form>
    </div>
</main>
@endsection
