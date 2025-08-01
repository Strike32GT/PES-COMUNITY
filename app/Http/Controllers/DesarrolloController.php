<?php

namespace App\Http\Controllers;

use App\Models\Desarrollo;
use Illuminate\Http\Request;

class DesarrolloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desarrollo=Desarrollo::all();
        return view('desarrollo.index',compact('desarrollos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('desarrollo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Historia'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Email'=>'required|email|max:100|unique:usuario,Email',
            'Password'=>'required|string|min:8',
            'Rol'=>'required|string',
        ]);

        Usuario::create([
            'Historia'=>$request->Historia,
            'Apellido'=>$request->Apellido,
            'Email'=>$request->Email,
            'Password'=>$request->Password
            'Rol'=>$request->Rol
            'Fecha_Creacion'=>now(),
        ]);
        return redirect()->route('desarrollos.index')->with('success','Usuario registrado correctamente');
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
}
