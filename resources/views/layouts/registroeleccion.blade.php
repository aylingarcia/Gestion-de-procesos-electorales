@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Elección</title>
</head>
<body>

<h2>Registrar una Elección</h2>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<form method="POST" action="{{ route('layouts.store') }}" enctype="multipart/form-data">
    @csrf

    <label for="nombre">Nombre de la Elección:</label>
    <input type="text" name="nombre" id="nombre" required><br><br>

    <label for="motivo">Motivo de la Elección:</label>
    <input type="text" name="motivo" id="motivo" required><br><br>

    <label for="cargo_autoridad">Cargo de Autoridad:</label>
    <input type="text" name="cargo_autoridad" id="cargo_autoridad" required><br><br>

    <label for="gestion">Gestión (Año):</label>
    <input type="number" name="gestion" id="gestion" required><br><br>

    <label for="tipo_votantes">Tipo de Votantes:</label>
    <input type="text" name="tipo_votantes" id="tipo_votantes" required><br><br>

    <label for="convocatoria_pdf">Convocatoria (PDF):</label>
    <input type="file" name="convocatoria" id="convocatoria" required><br><br>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha" required><br><br>

    <label for="tipo_eleccion">Tipo de Elección:</label>
    <input type="text" name="tipo_eleccion" id="tipo_eleccion" required><br><br>

    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion" rows="4"></textarea><br><br>

    <input type="submit" value="Registrar">
</form>

</body>
</html>

