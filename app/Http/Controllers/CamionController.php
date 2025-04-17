<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use App\Models\Camionero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CamionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camiones = DB::table('camiones')->get();
        return view('camiones.index', ['camiones' => $camiones]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $camioneros = Camionero::all();
        return view('camiones.insertar', compact('camioneros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $camiones =Camion::create($request->all());
    
        $mensaje = "Camión registrado con éxito.";
        $camiones = DB::table('camiones')->get();
    
        return view('camiones.index', compact('camiones', 'mensaje'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $camion = Camion::findOrFail($id);
        return view('camiones.detalle', compact('camion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $camion = Camion::findOrFail($id);
        return view('camiones.editar', compact('camion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $camion = Camion::findOrFail($id);
    
        $camion->placas = $request->placas;
        $camion->tipo = $request->tipo;
        $camion->id_camionero = $request->id_camionero;
        $camion->save();
    
        $mensaje = "Camión actualizado con éxito. ID: " . $camion->num_camion;
        $camiones = DB::table('camiones')->get();
    
        return view('camiones.index', compact('camiones', 'mensaje'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('camiones')->where('num_camion', $id)->delete();
    
        $camiones = DB::table('camiones')->get();
        $mensaje = "Camión eliminado con éxito";
    
        return view('camiones.index', compact('camiones', 'mensaje'));
    }
}
