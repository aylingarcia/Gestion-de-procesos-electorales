<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleccion;


class EleccionController extends Controller
{
    // Método para mostrar el formulario de registro de elecciones
    public function create()
    {
        return view('layouts.registroeleccion');
    }

    // Método para procesar el formulario de registro de elecciones
    public function store(Request $request)
    {
        // Valida los datos del formulario según tus necesidades
        $request->validate([
            'nombre' => 'required|string',
            'motivo' => 'required|string',
            'cargodeautoridad' => 'required|string',
            'gestion' => 'required|string',
            'tipodevotantes' => 'required|string',
            'convocatoria' => 'nullable|mimes:pdf', // Validación para archivos PDF (opcional)
            'fecha' => 'required|date',
            'tipodeeleccion' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        $eleccion = new Eleccion();
        $eleccion->nombre = $request->input('nombre');
        $eleccion->motivo = $request->input('motivo');
        $eleccion->cargodeautoridad = $request->input('cargodeautoridad');
        $eleccion->gestion = $request->input('gestion');
        $eleccion->tipodevotantes = $request->input('tipodevotantes');
        $eleccion->fecha = $request->input('fecha');
        $eleccion->tipodeeleccion = $request->input('tipodeeleccion');
        $eleccion->descripcion = $request->input('descripcion');

        // Guarda el archivo de convocatoria si se ha proporcionado
        if ($request->hasFile('convocatoria')) {
            $archivoConvocatoria = $request->file('convocatoria');
            $nombreArchivo = $archivoConvocatoria->getClientOriginalName();
            $archivoConvocatoria->storeAs('convocatorias', $nombreArchivo, 'public');
            $eleccion->convocatoria = $nombreArchivo;
        }

        $eleccion->save();

        return redirect()->route('layouts.registroeleccion')->with('success', 'Elección registrada exitosamente');
    }
}
