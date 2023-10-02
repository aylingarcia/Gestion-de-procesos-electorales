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
        /*$request->validate([
            'nombre' => 'required',
            'motivo' => 'required',
            'cargo_autoridad' => 'required',
            'gestion' => 'required',
            'tipo_votantes' => 'required',
            'convocatoria' => 'required|mimes:jpeg,png,pdf|max:10120', 
            'fecha' => 'required | after:today',
            'tipo_eleccion' => 'required',
            'descripcion' => 'required| min:0 | max: ',
        ]);*/

        Eleccion::Create(
            [   'nombre'=>$request->input('nombre'),
                'motivo' => $request->input('motivo'),
                'cargodeautoridad' => $request->input('cargo_autoridad'),
                'gestion' => $request->input('gestion'),
                'tipodevotantes'=> $request->input('tipo_votantes'),
                'convocatoria'=> $request->file('convocatoria')->store('convocatorias', 'public'),
                'fecha' => $request->input('fecha'),
                'tipodeeleccion' => $request->input('tipo_eleccion'),
                'descripcion' => $request->input('descripcion'),
            ]
        );
        
        // Valida los datos del formulario según tus necesidades

        /*$eleccion = new Eleccion();
        $eleccion->nombre = $request->input('nombre');
        $eleccion->candidato = $request->input('candidato');*/
        
        // Guarda el archivo de convocatoria si se ha proporcionado
        /*if ($request->hasFile('convocatoria')) {
            $archivoConvocatoria = $request->file('convocatoria');
            $nombreArchivo = $archivoConvocatoria->getClientOriginalName();
            $archivoConvocatoria->storeAs('convocatorias', $nombreArchivo, 'public');
            $eleccion->convocatoria = $nombreArchivo;
        }*/
        //dd($eleccion->cargodeautoridad);
        //$eleccion->save();

        return redirect()->route('layouts.registroeleccion')->with('success', 'Elección registrada exitosamente');
    }
}
