Crear/Editar una elección
<form action="{{ isset($elecciones) ? url('/elecciones/'.$elecciones->id) : url('/elecciones') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($elecciones))
        {{ method_field('PATCH') }}
    @endif

    <label for="nombre">Nombre de la Elección:</label>
    <input type="text" name="nombre" value="{{ isset($elecciones) ? $elecciones->nombre : '' }}" required><br><br>

    <label for="motivo">Motivo de la Elección:</label>
    <input type="text" name="motivo" value="{{ isset($elecciones) ? $elecciones->motivo : '' }}" id="motivo" required><br><br>

    <label for="cargodeautoridad">Cargo de Autoridad:</label>
    <input type="text" name="cargodeautoridad" value="{{ isset($elecciones) ? $elecciones->cargodeautoridad : '' }}" id="cargodeautoridad" required><br><br>

    <label for="gestion">Gestión (Año):</label>
    <input type="number" name="gestion" value="{{ isset($elecciones) ? $elecciones->gestion : '' }}" id="gestion" required><br><br>

    <label for="tipodevotantes">Tipo de Votantes:</label>
    <input type="text" name="tipodevotantes" value="{{ isset($elecciones) ? $elecciones->tipodevotantes : '' }}" id="tipodevotantes" required><br><br>

    <label for="convocatoria">Convocatoria (PDF):</label>
    @if(isset($elecciones) && $elecciones->convocatoria)
        <p>{{ $elecciones->convocatoria }}</p>
    @endif
    <input type="file" name="convocatoria" {{ isset($elecciones) && $elecciones->convocatoria ? '' : 'required' }}><br><br>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" value="{{ isset($elecciones) ? $elecciones->fecha : '' }}" id="fecha" required><br><br>

    <label for="tipodeeleccion">Tipo de Elección:</label>
    <input type="text" name="tipodeeleccion" value="{{ isset($elecciones) ? $elecciones->tipodeeleccion : '' }}" id="tipodeeleccion" required><br><br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion" rows="4">{{ isset($elecciones) ? $elecciones->descripcion : '' }}</textarea><br><br>

    <input type="submit" value="{{ isset($elecciones) ? 'Actualizar' : 'Guardar' }}">
</form>
