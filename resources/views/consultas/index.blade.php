@extends('components.layout')

@section('title', 'Consultas')

@section('content')
<main id="consultas">
    <section class="parents">
        <article class="div11">
            <h2 class="subtitulo">1. Total de Camioneros</h2>
            <p>Total registrados: <strong>{{ $totalCamioneros }}</strong></p>
            <h2 class="subtitulo">2. Suma de Salarios</h2>
            <p>Suma total de salarios: <strong>${{ number_format($sumaSalarios, 2) }}</strong></p>
            <h2 class="subtitulo">3. Nombres Completos de Camioneros</h2>
            <ul>
                @foreach($nombresCompletos as $item)
                    <li>{{ $item->NombreCompleto }}</li>
                @endforeach
            </ul>
        </article>
        <article class="div22">
            <h2 class="subtitulo">9. Camiones y nombre de conductor</h2>
            <table>
                <thead>
                    <tr>
                        <th>Placas</th>
                        <th>Conductor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($camionesConConductores as $item)
                        <tr>
                            <td>{{ $item->placas }}</td>
                            <td>{{ $item->nombre_completo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>    
            <h2 class="subtitulo">10. Total de paquetes entregados por camionero</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Total Paquetes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paquetesPorCamionero as $item)
                    <tr>
                        <td>{{ $item->id_camionero }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->apellidos }}</td>
                        <td>{{ $item->total_paquetes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>        
        </article>
        <article class="div33">
            <h2 class="subtitulo">5. Camioneros con salario mayor a $16,000</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Salario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($camionerosSalarioAlto as $c)
                        <tr>
                            <td>{{ $c->nombre }}</td>
                            <td>{{ $c->apellidos }}</td>
                            <td>${{ number_format($c->salario, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h2 class="subtitulo">7. Usuarios cuyo perfil contiene "usuario"</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Perfil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuariosPorPerfil as $usuario)
                        <tr>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->correo }}</td>
                            <td>{{ $usuario->perfil }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
        <article class="div44">
            <h2 class="subtitulo">6. Lugares cuyo CP comienza con "6"</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>CP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lugaresPorCP as $lugar)
                        <tr>
                            <td>{{ $lugar->nombre }}</td>
                            <td>{{ $lugar->direccion }}</td>
                            <td>{{ $lugar->cp }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
        <article class="div55">
            <h2 class="subtitulo">4. Camiones ordenados por tipo (DESC)</h2>
            <table>
                <thead>
                    <tr>
                        <th>Placas</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($camionesPorTipo as $camion)
                        <tr>
                            <td>{{ $camion->placas }}</td>
                            <td>{{ $camion->tipo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </article>        
    </section>
</main>
@endsection
