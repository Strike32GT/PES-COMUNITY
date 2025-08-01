<?php

namespace App\Http\Controllers;

use App\Models\Soundtrack;
use Illuminate\Http\Request;

class SoundtrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soundtrack=Soundtrack::with('pes')->get();
        return view('soundtrack.index',compact('soundtracks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('soundtrack.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Titulo'=>'required|string|max:100',
            'Artista'=>'required|string|max:100',
            'Link_del_audio'=>'required|url',
            'Pes_idPes'=>'required|integer|exists:pes,idPES',
        ]);

        Usuario::create([
            'Titulo'=>'required|string|max:100',
            'Artista'=>'required|string|max:100',
            'Link_del_audio'=>'required|url',
            'PES_idPES'=>$request->pes_idpes,
        ]);
        return redirect()->route('soundtracks.index')->with('success','Usuario registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $soundtrack=Soundtrack::findOrFail($id);
        return view('soundtrack.show',compact('soundtrack'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $soundtrack = Soundtrack::findOrFail($id);
        return view('soundtrack.edit', compact('soundtrack'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'Titulo' => 'required|string|max:100',
            'Artista' => 'required|string|max:100',
            'Link_del_audio' => 'required|url',
            'PES_idPES' => 'required|integer',
        ]);

        $soundtrack = Soundtrack::findOrFail($id);
        $soundtrack->update($request->all());

        return redirect()->route('soundtracks.index')->with('success', 'Soundtrack actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $soundtrack = Soundtrack::findOrFail($id);
        $soundtrack->delete();

        return redirect()->route('soundtracks.index')->with('success', 'Soundtrack eliminado correctamente.');
    }
}
