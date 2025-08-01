<?php

namespace App\Http\Controllers;

use App\Models\PES;
use Illuminate\Http\Request;

class PESController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peslist=PES::with('soundtracks')
        ->orderby('Fecha_Lanzamiento','desc')->get();
        return view('pes.index', compact('peslist'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function verSoundtracks($id)
    {
        $pes = PES::with('soundtracks')->findOrFail($id);
        return view('pes.soundtrack', compact('pes'));
    }
}
