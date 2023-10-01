<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleccion; // Asegúrate de importar el modelo Eleccion

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

        $eleccion = new Eleccion();
        $eleccion->nombre = $request->input('nombre');
        $eleccion->candidato = $request->input('candidato');

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
