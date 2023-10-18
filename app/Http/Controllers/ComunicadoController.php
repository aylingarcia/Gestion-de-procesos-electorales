<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['comunicados']=Comunicado::paginate(20);
        return view('comunicado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comunicado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'pdf' => 'required',
        ]);

        $datos = request()->except('_token');
        Comunicado::insert($datos);

        if($request->hasFile('pdf')){
            $pdfs['comunicadoPdf']=$request->file('pdf')->store('uploads','public');
        }
        return redirect('/comunicados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function show(Comunicado $comunicado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comunicado=Comunicado::FindOrFail($id);
        return view('comunicado.edit', compact('comunicado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->except(['_token','_method']);
        Comunicado::where('id',$id)->update($datos);
        return redirect('/comunicados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comunicado::destroy($id);
        return redirect('/comunicados');
    }
}
