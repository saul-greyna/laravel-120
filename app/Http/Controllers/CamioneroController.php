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
        $camionero = Camionero::findOrFail($id);
        return view('camioneros.detalle', compact('camionero'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camionero $camionero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Camionero $camionero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camionero $camionero)
    {
        //
    }
}
