<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lugares = DB::table('lugares')->get();
        return view('lugares.index', ['lugares' => $lugares]);
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
        $lugar = Lugar::findOrFail($id);
        return view('lugares.detalle', compact('lugar'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lugar = Lugar::findOrFail($id);
        return view('lugares.editar', compact('lugar'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $lugar = Lugar::findOrFail($id);
    
        $lugar->nombre = $request->nombre;
        $lugar->direccion = $request->direccion;
        $lugar->cp = $request->cp;
        $lugar->save();
    
        $mensaje = "Lugar actualizado con éxito. ID: " . $lugar->id_lugar;
        $lugares = DB::table('lugares')->get();
    
        return view('lugares.index', compact('lugares', 'mensaje'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('lugares')->where('id_lugar', $id)->delete();
    
        $lugares = DB::table('lugares')->get();
        $mensaje = "Lugar eliminado con éxito";
    
        return view('lugares.index', compact('lugares', 'mensaje'));
    }
}
