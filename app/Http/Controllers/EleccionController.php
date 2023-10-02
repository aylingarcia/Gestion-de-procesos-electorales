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

        /*$eleccion = new Eleccion();
        $eleccion->nombre = $request->input('nombre');
        $eleccion->candidato = $request->input('candidato');*/
        $eleccion = new Eleccion();
        $eleccion->nombre = $request->input('nombre');
        $eleccion->motivo = $request->input('motivo');
        $eleccion->cargodeautoridad = $request->input('cargo_autoridad');
        $eleccion->gestion = $request->input('gestion');
        $eleccion->tipodevotantes = $request->input('tipo_votantes');
        
        $eleccion->fecha = $request->input('fecha');
        $eleccion->tipodeeleccion = $request->input('tipo_eleccion');
        $eleccion->descripcion = $request->input('descripcion');
        
        
        // Guarda el archivo de convocatoria si se ha proporcionado
        if ($request->hasFile('convocatoria')) {
            $archivoConvocatoria = $request->file('convocatoria');
            $nombreArchivo = $archivoConvocatoria->getClientOriginalName();
            $archivoConvocatoria->storeAs('convocatorias', $nombreArchivo, 'public');
            $eleccion->convocatoria = $nombreArchivo;
        }
        //dd($eleccion->cargodeautoridad);
        $eleccion->save();

        return redirect()->route('layouts.registroeleccion')->with('success', 'Elección registrada exitosamente');
    }
}
