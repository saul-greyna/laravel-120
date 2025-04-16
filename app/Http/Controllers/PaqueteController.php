<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paquetes = DB::table('paquetes')->get();
        return view('paquetes.index', compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $paquete = Paquete::findOrFail($id);
        return view('paquetes.detalle', compact('paquete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $paquete = Paquete::findOrFail($id);
        return view('paquetes.editar', compact('paquete'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $paquete = Paquete::findOrFail($id);
    
        $paquete->descripcion = $request->descripcion;
        $paquete->remitente = $request->remitente;
        $paquete->id_camionero = $request->id_camionero;
        $paquete->id_lugar_destino = $request->id_lugar_destino;
        $paquete->save();
    
        $mensaje = "Paquete actualizado con éxito. ID: " . $paquete->id_paq;
        $paquetes = DB::table('paquetes')->get();
    
        return view('paquetes.index', compact('paquetes', 'mensaje'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('paquetes')->where('id_paq', $id)->delete();
    
        $paquetes = DB::table('paquetes')->get();
        $mensaje = "Paquete eliminado con éxito";
    
        return view('paquetes.index', compact('paquetes', 'mensaje'));
    }
}
