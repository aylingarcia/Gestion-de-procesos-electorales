@extends('base')

@section('active')

@endsection

@section('content')

    <div class="header">
        <h1>Administrador de elecciones</h1>
        <h2>UMSS</h2>
    </div>
    <div class="container">
        <div class="column">
            <form action="{{ isset($elecciones) ? url('/elecciones/'.$elecciones->id) : url('/elecciones') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(isset($elecciones))
                    {{ method_field('PATCH') }}
                @endif
                <h2 class="form-title">Registrar Elección</h2> <!-- Aumenta el tamaño del título -->

                <label for="nombre">Nombre de la Elección:</label>
                <input type="text" name="nombre" value="{{ isset($elecciones) ? $elecciones->nombre : '' }}" required><br>

                <label for="motivo">Motivo de la Elección:</label>
                <input type="text" name="motivo" value="{{ isset($elecciones) ? $elecciones->motivo : '' }}" id="motivo" required><br>

                <label for="cargodeautoridad">Cargo de Autoridad:</label>
                <input type="text" name="cargodeautoridad" value="{{ isset($elecciones) ? $elecciones->cargodeautoridad : '' }}" id="cargodeautoridad" required><br>

                <label for="gestion">Gestión (Año):</label>
                <input type="number" name="gestion" value="{{ isset($elecciones) ? $elecciones->gestion : '' }}" id="gestion" required><br>
            </form>
        </div>
        <div class="column">
            <form action="{{ isset($elecciones) ? url('/elecciones/'.$elecciones->id) : url('/elecciones') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(isset($elecciones))
                    {{ method_field('PATCH') }}
                @endif

                <label for="convocatoria">Convocatoria (PDF):</label>
                @if(isset($elecciones) && $elecciones->convocatoria)
                    <p>{{ $elecciones->convocatoria }}</p>
                @endif
                <input type="file" name="convocatoria" {{ isset($elecciones) && $elecciones->convocatoria ? '' : 'required' }}><br>

                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" value="{{ isset($elecciones) ? $elecciones->fecha : '' }}" id="fecha" required><br>

                <label for="tipodeeleccion">Tipo de Elección:</label>
                <input type="text" name="tipodeeleccion" value="{{ isset($elecciones) ? $elecciones->tipodeeleccion : '' }}" id="tipodeeleccion" required><br>

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" rows="4">{{ isset($elecciones) ? $elecciones->descripcion : '' }}</textarea><br>

                <input type="submit" value="{{ isset($elecciones) ? 'Actualizar' : 'Registrar' }}">
                <input type="reset" value="Cancelar">
            </form>
        </div>
    </div>


@endsection