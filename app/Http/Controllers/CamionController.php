<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CamionController extends Controller
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
        $camion = DB::table('camiones')->where('id', $id)->first();
        return view('camiones.show', ['camion' => $camion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camion $camion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Camion $camion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camion $camion)
    {
        //
    }
}
