<?php

namespace App\Http\Controllers;

use App\Models\Sesion;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sesions = Sesion::orderBy('fecha_hora')->get();
        return view('sesions.index', compact('sesions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sesions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'cliente' => 'required',
            'telefono' => 'required',
            'ubicacion' => 'required',
            'fecha_hora' => 'required',
        ]);

        Sesion::create($request->all());

        return redirect()
            ->route('sesions.index')
            ->with('success', 'Sesión registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesion $sesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sesion $sesion)
    {
        return view('sesions.edit', compact('sesion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesion $sesion)
    {
        $request->validate([
            'tipo' => 'required',
            'cliente' => 'required',
            'telefono' => 'required',
            'ubicacion' => 'required',
            'fecha_hora' => 'required',
            'estado' => 'required',
        ]);

        $sesion->update($request->all());

        return redirect()
            ->route('sesions.index')
            ->with('success', 'Sesión actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesion $sesion)
    {
        $sesion->delete();

        return redirect()
            ->route('sesions.index')
            ->with('success', 'Sesión eliminada');
    }
}
