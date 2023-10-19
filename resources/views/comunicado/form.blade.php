@extends('layouts.header_footer')
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear/Editar comunicado</title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/Form.css') }}">

    </head>

    <body>
        <div class="container">
            <form action="{{ isset($comunicado) ? url('/comunicados/' . $comunicado->id) : url('/comunicados') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                @if (isset($comunicado))
                    {{ method_field('PATCH') }}
                @endif

                <h2 class="form-title">Registrar Comunicado</h2>

                <div class="columns">
                    <div class="column">

                        <label for="titulo">Título:</label>
                            
                        <input type="text" oninput="this.value = this.value.replace(/[^'A-Za-z,.0-9-]+/g, '')"
                            name="titulo" placeholder="Escribe el titulo del comunicado..."
                            value="{{ isset($comunicado) ? $comunicado->titulo : '' }}" id="titulo" required 
                        >

                        <label for="pdf">Archivo(PDF):</label>
                        @if (isset($comunicado) && $comunicado->pdf)
                            <p>{{ $comunicado->pdf}}</p>
                        @endif
                        <input type="file" accept="application/pdf" title="Subir archivo PDF" name="pdf"
                            {{ isset($comunicado) && $comunicado->pdf ? '' : 'required' }} 
                        >
                        <!--<label for="inicio">Fecha de Inicio:</label>
                        <input type="date" id="inicio" name="inicio" 
                        value="{{ isset($comunicado) ? $comunicado->inicio : '' }}" required 
                        min="{{ now()->subDays(1)->format('Y-m-d') }}">-->

                        <label for="fin">Fecha Fin:</label>
                        <input type="date" id="fin" name="fin"
                        value="{{ isset($comunicado) ? $comunicado->fin : '' }}"
                        min="{{ now()->format('Y-m-d') }}"
                        >

                    </div>
                <input type="submit" value="{{ isset($comunicado) ? 'Actualizar' : 'Registrar' }}">
                <input type="reset" value="Cancelar">
            </form>
        </div>
    </body>
</html>
