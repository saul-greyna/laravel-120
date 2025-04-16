<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all(); // Consulta a la tabla
        return view('usuarios.index', compact('usuarios'));
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
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.detalle', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.editar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
    
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->perfil = $request->perfil;
        $usuario->foto = $request->foto; // si usas texto, si es archivo es distinto
        $usuario->save();
    
        $mensaje = "Usuario actualizado con éxito. ID: " . $usuario->id;
        $usuarios = DB::table('usuarios')->get();
    
        return view('usuarios.index', compact('usuarios', 'mensaje'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('usuarios')->where('id', $id)->delete();
    
        $usuarios = DB::table('usuarios')->get();
        $mensaje = "Usuario eliminado con éxito";
    
        return view('usuarios.index', compact('usuarios', 'mensaje'));
    }
}
