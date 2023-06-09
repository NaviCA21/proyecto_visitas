<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Visita;
use App\Models\Visitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visita = Visita::all();

        // dd($visita);

        return view('visitas.index', compact('visita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('visitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'asunto' => 'required',
            'fecha' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'nombre' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required',
            'dni' => 'required',
            'institucion' => 'required',
            'telefono' => 'required',
            'num_visitante' => 'required',
        ]);

        $periodo = new Periodo();
        $periodo->fecha = $request->fecha;
        $periodo->hora_inicio = $request->hora_inicio;
        $periodo->hora_fin = $request->hora_fin;

        $periodo->save();


        // $visitante->nombre de la bd = $request->name del formulario
        $visitante = new Visitante();
        $visitante->nombre = $request->nombre;
        $visitante->a_paterno = $request->a_paterno;
        $visitante->a_materno = $request->a_materno;
        $visitante->dni = $request->dni;
        $visitante->institucion = $request->institucion;
        $visitante->telefono = $request->telefono;
        $visitante->num_visitantes = $request->num_visitante;

        $visitante->save();



        $visita = new Visita();
        $visita->asunto = $request->asunto;
        $visita->visitante_id = $visitante->id;  
        $visita->periodo_id = $periodo->id;  
        $visita->save();


        return Redirect::route('visita.index');
        

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
