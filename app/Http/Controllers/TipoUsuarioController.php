<?php

namespace App\Http\Controllers;
use App\Models\Tipo_usuario;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tipo_usuarios = Tipo_usuario::all();
        return view('tipo_usuarios.create', compact('tipo_usuarios'));
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
    public function show(tipo_usuario $tipo_usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tipo_usuario $tipo_usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tipo_usuario $tipo_usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tipo_usuario $tipo_usuario)
    {
        //
    }
}
