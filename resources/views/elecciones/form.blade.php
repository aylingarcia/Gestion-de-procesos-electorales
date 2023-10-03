<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear/Editar una elección</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .header {
            background-image: linear-gradient(to right, #003770, #C20000);
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            max-width: 1300px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-wrap: wrap;
        }

        .column {
            flex: 1;
            padding: 10px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-title {
            font-size: 28px; /* Aumenta el tamaño del título */
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #04243C;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="reset"] {
            background-color: #A70606;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
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
</body>
</html>

