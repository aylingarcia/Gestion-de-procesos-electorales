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
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .form-title {
            font-size: 28px;
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

        /* Estilos para las columnas */
        .columns {
            display: flex;
            justify-content: space-between;
        }

        .column {
            flex: 1;
            padding: 10px;
        }
    </style>

<script>
        function confirmarCancelacion() {
            var confirmacion = confirm("¿Seguro que deseas cancelar? Los cambios no se guardarán.");
            if (confirmacion) {

                window.location.href = "/elecciones";
            }
        }
        function confirmarConfirmacion() {
            var confirmacion = confirm("Los datos han sido registrados con exito");
            if (confirmacion) {

                window.location.href = "/home";
            }
        }
    </script>

</head>
<body>
    <div class="header">
        <h1>Administrador de elecciones</h1>
        <h2>UMSS</h2>
    </div>
    <div class="container">
        <form action="{{ isset($elecciones) ? url('/elecciones/'.$elecciones->id) : url('/elecciones') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($elecciones))
                {{ method_field('PATCH') }}
            @endif
            <h2 class="form-title">Registrar Elección</h2>
            <div class="columns">
                <div class="column">
                    <label for="nombre">Nombre de la Elección:</label>
                    <input type="text" name="nombre" value="{{ isset($elecciones) ? $elecciones->nombre : '' }}" required>

                    <label for="motivo">Motivo de la Elección:</label>
                    <input type="text" name="motivo" value="{{ isset($elecciones) ? $elecciones->motivo : '' }}" id="motivo" required>

                    <label for="cargodeautoridad">Cargo de Autoridad:</label>
                    <input type="text" name="cargodeautoridad" value="{{ isset($elecciones) ? $elecciones->cargodeautoridad : '' }}" id="cargodeautoridad" required>

                    <label for="gestion">Gestión (Año):</label>
                    <input type="number" name="gestion" value="{{ isset($elecciones) ? $elecciones->gestion : '2023' }}" id="gestion" min="2023" required>


                    <label for="tipodevotantes">Tipo de Votantes:</label>
                    <input type="text" name="tipodevotantes" value="{{ isset($elecciones) ? $elecciones->tipodevotantes : '' }}" id="tipodevotantes" required><br><br>
                
                
                </div>
                <div class="column">
                    <label for="convocatoria">Convocatoria (PDF):</label>
                    @if(isset($elecciones) && $elecciones->convocatoria)
                        <p>{{ $elecciones->convocatoria }}</p>
                    @endif
                    <input type="file" name="convocatoria" {{ isset($elecciones) && $elecciones->convocatoria ? '' : 'required' }}>

                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" value="{{ isset($elecciones) ? $elecciones->fecha : '' }}" id="fecha" required>

                    <label for="tipodeeleccion">Tipo de Elección:</label>
                    <input type="text" name="tipodeeleccion" value="{{ isset($elecciones) ? $elecciones->tipodeeleccion : '' }}" id="tipodeeleccion" required>

                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" rows="4">{{ isset($elecciones) ? $elecciones->descripcion : '' }}</textarea>
                </div>
              </div>
             <input type="submit" value="{{ isset($elecciones) ? 'Actualizar' : 'Registrar' }}" onclick="confirmarConfirmacion()">
            <input type="reset" value="Cancelar" onclick="confirmarCancelacion()">
        </form>
    </div>
</body>
</html> 