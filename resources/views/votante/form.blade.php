<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrarVotante</title>
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
        
        .votante-form-container {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 700px;
        }

        .votante-form-container .form-title {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        .votante-columns {
            display: flex;
            justify-content: space-between;
        }

        .votante-column {
            flex: 1;
            padding: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"],
       
        select {
       width: 92%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
     border-radius: 3px;

     
}

        
        input[type="submit"]{
            background-color: #04243C;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;    
        }
        input[type="reset"]{
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
        <h1>Registro de Votantes</h1>
        <h2>UMSS</h2>
    </div>
    <div class="votante-form-container">
    <form action="{{ url('/votante') }}" method="post" enctype="multipart/form-data">
        @csrf

        <h2 class="form-title">Registrar Votante</h2>
        <div class="column">

        <label for="ideleccion">Elegir Elección:</label>
         <select name="ideleccion" id="ideleccion" required>
                <option value="">Selecciona una elección</option>
                      @foreach ($elecciones as $eleccion)
                          <option value="{{ $eleccion->id }}">{{ $eleccion->nombre }}</option>
                      @endforeach
         </select>

                <label for="nombres">Nombre:</label>
                <input type="text" name="nombres" required><br><br>

                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" name="apellidoPaterno" id="apellidoPaterno" required><br><br>

                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" name="apellidoMaterno" id="apellidoMaterno" required><br><br>

                <label for="codSis">Codigo Sis:</label>
                <input type="codSis" name="codSis" id="codSis" required><br><br>

                <label for="CI"> CI:</label>
                <input type="text" name="CI" required><br><br>
            
                <label for="tipoVotante">Tipo de Votante:</label>
                <select name="tipoVotante" id="tipoVotante" required>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Docente">Docente</option>
                    <option value="Administrativo">Administrativo</option>
                </select>

                <div class="campo-adicional" id="campoCarrera">
                <label for="carrera">Carrera:</label>
                <input type="text" name="carrera" id="carrera" ><br><br>
                </div>

                <div class="campo-adicional" id="campoProfesion">
                <label for="profesion">Profesion:</label>
                <input type="text" name="profesion" id="profesion" ><br><br>
                </div>

                <div class="campo-adicional" id="campoFacultad">
                <label for="facultad">Facultad:</label>
                <input type="text" name="facultad" id="facultad" ><br><br>
                </div>

                <div class="campo-adicional" id="campoCargo">
                <label for="cargoAdministrativo">Cargo Administrativo:</label>
                <input type="text" name="cargoAdministrativo" id="cargoAdministrativo" ><br><br>
                </div>
                
                <label for="celular">Celular:</label>
                <input type="number" name="celular" id="celular" required><br><br>

                <label for="e-mail">e-mail:</label>
                <input type="email" name="e-mail" id="e-mail" required><br><br>

                <label for="cargarLista">Cargar lista de votantes:</label>
                <input type="file" name="cargarLista" id="cargarLista">
            
        </div>
        <input type="submit" value="Registrar"
                onclick="confirmacion()">
          
        <input type="reset" value="Cancelar" onclick="cancelacion()">
    </form>
    
    <script>
        function cancelacion() {
            var confirmacion = confirm("¿Seguro que deseas cancelar? Los cambios no se guardarán.");
            if (confirmacion) {

                window.location.href = "/elecciones";
            }
        }

        function confirmacion() {
            var confirmacion = confirm("Los datos han sido registrados con exito");
            if (confirmacion) {

                window.location.href = "/votante";
            }
        }

    </script>



</div>
    <script>
        function mostrarCampoAdicional() {
            var tipoVotante = document.getElementById("tipoVotante").value;
            var campoFacultad = document.getElementById("campoFacultad");
            var campoProfesion = document.getElementById("campoProfesion");
            var campoCargo = document.getElementById("campoCargo");
            var campoCarrera = document.getElementById("campoCarrera")
            
            campoFacultad.style.display = "none";
            campoProfesion.style.display = "none";
            campoCargo.style.display = "none";
            campoCarrera.style.display = "none";
            
            if (tipoVotante === "Estudiante") {
                campoFacultad.style.display = "block";
                campoCarrera.style.display = "block";
            } else if (tipoVotante === "Docente") {
                campoProfesion.style.display = "block";
            } else if (tipoVotante === "Administrativo") {
                campoCargo.style.display = "block";
            }
        }

        document.getElementById("tipoVotante").addEventListener("change", mostrarCampoAdicional);

        mostrarCampoAdicional();
    </script>
</body>
</html> 