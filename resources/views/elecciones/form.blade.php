Crear una eleccion
<label for="nombre">Nombre de la Elección:</label>
    <input type="text" name="nombre" value="{{ $elecciones->nombre }}" required><br><br>

    <label for="motivo">Motivo de la Elección:</label>
    <input type="text" name="motivo" value="{{ $elecciones->motivo }}" id="motivo" required><br><br>

    <label for="cargoadeutoridad">Cargo de Autoridad:</label>
    <input type="text" name="cargodeautoridad" value="{{ $elecciones->cargodeautoridad }}" id="cargodeautoridad" required><br><br>

    <label for="gestion">Gestión (Año):</label>
    <input type="number" name="gestion" value="{{ $elecciones->gestion }}" id="gestion" required><br><br>

    <label for="tipodevotantes">Tipo de Votantes:</label>
    <input type="text" name="tipodevotantes" value="{{ $elecciones->tipodevotantes }}" id="tipodevotantes" required><br><br>

    <label for="convocatoria">Convocatoria (PDF):</label>
    {{ $elecciones->convocatoria }}
    <input type="file" name="convocatoria" value="" id="convocatoria" required><br><br>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" value="{{ $elecciones->fecha }}" id="fecha" required><br><br>

    <label for="tipodeeleccion">Tipo de Elección:</label>
    <input type="text" name="tipodeeleccion" value="{{ $elecciones->tipodeeleccion }}" id="tipodeeleccion" required><br><br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" value="{{ $elecciones->descripcion }}" id="descripcion" rows="4"></textarea><br><br>

    <input type="submit" value="Guardar">