<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    public function index()
    {
        // 1. Total de camioneros
        $totalCamioneros = DB::table('camioneros')->count();

        // 2. Suma de salarios
        $sumaSalarios = DB::table('camioneros')->sum('salario');

        // 3. Nombre completo de camioneros
        $nombresCompletos = DB::table('camioneros')
            ->select(DB::raw("CONCAT(nombre, ' ', apellidos) AS NombreCompleto"))
            ->get();

        // 4. Camiones ordenados por tipo descendente
        $camionesPorTipo = DB::table('camiones')->orderBy('tipo', 'desc')->get();

        // 5. Camioneros con salario mayor a 16000
        $camionerosSalarioAlto = DB::table('camioneros')->where('salario', '>', 16000)->get();

        // 6. Lugares con codigo postal empieza con 6
        $lugaresPorCP = DB::table('lugares')->where('cp', 'like', '6%')->get();

        // 7. Usuarios
        $usuariosPorPerfil = DB::table('usuarios')->where('perfil', 'like', '%usuario%')->get();

        // 8. Paquetes con nombre del lugar destino
        $paquetesConDestino = DB::table('paquetes')
            ->join('lugares', 'paquetes.id_lugar_destino', '=', 'lugares.id_lugar')
            ->select('paquetes.id_paq', 'paquetes.remitente', 'lugares.nombre AS destino')
            ->get();

        // 9. Camiones con placas y nombre del conductor
        $camionesConConductores = DB::table('camiones')
            ->join('camioneros', 'camiones.id_camionero', '=', 'camioneros.id_camionero')
            ->select('camiones.placas', DB::raw("CONCAT(camioneros.nombre, ' ', camioneros.apellidos) AS nombre_completo"))
            ->get();

        // 10. Paquetes entregados por camionero
        $paquetesPorCamionero = DB::table('camioneros')
            ->join('paquetes', 'camioneros.id_camionero', '=', 'paquetes.id_camionero')
            ->select(
                'camioneros.id_camionero',
                'camioneros.nombre',
                'camioneros.apellidos',
                DB::raw('COUNT(paquetes.id_paq) AS total_paquetes')
            )
            ->groupBy('camioneros.id_camionero', 'camioneros.nombre', 'camioneros.apellidos')
            ->get();

        return view('consultas.index', compact(
            'totalCamioneros',
            'sumaSalarios',
            'nombresCompletos',
            'camionesPorTipo',
            'camionerosSalarioAlto',
            'lugaresPorCP',
            'usuariosPorPerfil',
            'paquetesConDestino',
            'camionesConConductores',
            'paquetesPorCamionero'
        ));
    }
}
