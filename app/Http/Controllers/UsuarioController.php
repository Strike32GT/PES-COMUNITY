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

    public function indexAdmin(){
        $usuarios=Usuario::paginate(10);
        return view('usuario.list',compact('usuarios'));
    }

    /*Lo ideal es que se maneja la pestaña usuario y lo que el admin 
    pueda ver del usuario de manera distinta, acá se colocó un indexadmin, 
    porque es fase beta. Referencia de cómo se haría 
    Http\Controllers\Admin\UsuarioController.php
    Http\Controllers\Usuario\UsuarioController.php
    */

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
            'fecha_Creacion'=>now(),
        ]);
        return redirect()->route('usuarios.list')->with('success','Usuario registrado correctamente');
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
            /*'password'=>'required|string|min:8',*/
            
        ]);

        $usuario=Usuario::findOrFail($id);

        $usuario->update([
            'nombre' =>$request->nombre,
            'apellido' =>$request->apellido,
            'email' =>$request->email,
            /*'password' =>Hash::make($request->password),*/
            
        ]);
        return redirect()->route('usuarios.list')->with('success','Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario=Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.list')->with('success','Usuario eliminado correctamente');
    }
}
