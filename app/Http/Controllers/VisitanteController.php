<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use App\Models\Visitante;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $visita = Visita::all();

        // dd($visita);

        return view('visitante', compact('visita'));

    }

}
