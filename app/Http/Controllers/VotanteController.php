<?php

namespace App\Http\Controllers;
use App\Models\Eleccion;
use App\Models\Votante;
use Illuminate\Http\Request;

class VotanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['votantescreados']=Votante::paginate(20);
        return view('votante.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        $elecciones = Eleccion::where('estado', 1)->get();
        return view('votante.create', compact('elecciones'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Obtiene todos los datos del formulario
    $datosVotante = request()->except('_token');
    
    // Inserta los datos en la tabla votantes
    Votante::insert($datosVotante);

    return redirect('/votante')->with('success', 'El votante se ha guardado con éxito.');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Votante  $votante
     * @return \Illuminate\Http\Response
     */
    public function show(Votante $votante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Votante  $votante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $votante = Votante::findOrFail($id);
        $elecciones = Eleccion::where('estado', 1)->get();
        return view('votante.edit', compact('votante', 'elecciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Votante  $votante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosVotante = $request->except(['_token', '_method']);
   
        Votante::where('id', $id)->update($datosVotante);

        $elecciones = Eleccion::where('estado', 1)->get();

        $votante = Votante::findOrFail($id);

        return redirect('/votante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Votante  $votante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Votante::destroy($id);
        return redirect('votante');
    }
}
