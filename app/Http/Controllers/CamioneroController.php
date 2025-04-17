<?php

namespace App\Http\Controllers;

use App\Models\Camionero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CamioneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camioneros = DB::table('camioneros')->get();
        return view('camioneros.index', ['camioneros' => $camioneros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('camioneros.insertar'); // Aquí va el modal con el formulario
    }
    
    public function store(Request $request)
    {
        Camionero::create($request->all());
    
        $mensaje = "Camionero registrado con éxito.";
        $camioneros = DB::table('camioneros')->get();
    
        return view('camioneros.index', compact('camioneros', 'mensaje'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $camionero = Camionero::findOrFail($id);
        return view('camioneros.detalle', compact('camionero'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $camionero = Camionero::findOrFail($id);
        return view('camioneros.editar', compact('camionero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $camionero = Camionero::findOrFail($id);
    
        $camionero->nombre = $request->nombre;
        $camionero->apellidos = $request->apellidos;
        $camionero->direccion = $request->direccion;
        $camionero->salario = $request->salario;
        $camionero->licencia = $request->licencia;
        $camionero->save();
    
        $mensaje = "Camionero actualizado con éxito. ID: " . $camionero->id_camionero;
        $camioneros = DB::table('camioneros')->get();
    
        return view('camioneros.index', compact('camioneros', 'mensaje'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('camioneros')->where('id_camionero', $id)->delete();
        $mensaje = "Camionero eliminado con éxito";
        $camioneros = DB::table('camioneros')->get();
        return view('camioneros.index', ['camioneros' => $camioneros, 'mensaje' => $mensaje]);
    }
}
