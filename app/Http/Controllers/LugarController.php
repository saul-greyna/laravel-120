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
    public function show($id_lugar)
    {
        $lugar = Lugar::findOrFail($id_lugar);
        return view('lugares.show', compact('lugar'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lugar $lugar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lugar $lugar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lugar $lugar)
    {
        //
    }
}
