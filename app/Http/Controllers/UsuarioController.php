<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=Usuario::all();
        return view('usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string|max:100',
            'apellido'=>'required|string|max:100',
            'email'=>'required|email|max:100|unique:usuario,email',
            'password'=>'required|string|min:8',
            'rol'=>'required|string',
        ]);

        Usuario::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'rol'=>$request->rol,
            'fecha_creacion'=>now(),
        ]);
        return redirect()->route('usuarios.index')->with('success','Usuario registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario=Usuario::findOrFail($id);
        return view('usuario.show',compact('usuario'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario=Usuario::findOrFail($id);
        return view('usuario.edit',compact('usuario'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre'=>'required|string|max:100',
            'apellido'=>'required|string|max:100',
            'email'=>'required|email|max:100|unique:usuario,email,'.$id.',idusuario',
            'password'=>'required|string|min:8',
            'rol'=>'required|string',
        ]);

        $usuario=Usuario::findOrFail($id);

        $usuario->update([
            'nombre' =>$request->nombre,
            'apellido' =>$request->apellido,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'rol' =>$request->rol,
        ]);
        return redirect()->route('usuarios.index')->with('success','Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario=Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success','Usuario eliminado correctamente');
    }
}
