<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitante = Visitante::all();

        // dd($visita);

        return view('visitante.index', compact('visitante'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('visitante.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required',
            'dni' => 'required',
            'institucion' => 'required',
            'telefono' => 'required',
            'num_visitantes' => 'required',

    
        ]);

        $visitante = new Visitante();
        $visitante->nombre = $request->nombre;
        $visitante->a_paterno = $request->a_paterno;
        $visitante->a_materno = $request->a_materno;
        $visitante->dni = $request->dni;
        $visitante->institucion = $request->institucione;
        $visitante->num_visitantes = $request->num_visitantes;

        $visitante->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitante $visitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitante $visitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitante $visitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitante $visitante)
    {
        //
    }
}
