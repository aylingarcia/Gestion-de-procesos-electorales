<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleccion;

class ListaEleccionController extends Controller
{
    public function index()
    {
        $elecciones = Eleccion::all(); 
        return view('layouts.listaEleccion', compact('elecciones')); 
    }
}
