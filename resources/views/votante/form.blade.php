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
            max-width: 1000px;
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
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            padding-right: 1px; 
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
    <form action="/registrar_votante" method="post">
        @csrf
        <h2 class="form-title">Registrar Votante</h2>
        <div class="column">
            
                <label for="codigoSis">Código SIS:</label>
                <input type="text" name="codigoSis" id="codigoSis" required>

                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>

                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" name="apellidoPaterno" id="apellidoPaterno" required>

                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" name="apellidoMaterno" id="apellidoMaterno" required>
            
                <label for="tipoVotante">Tipo de Votante:</label>
                <select name="tipoVotante" id="tipoVotante" required>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Docente">Docente</option>
                    <option value="Administrativo">Administrativo</option>
                </select>
                <div class="campo-adicional" id="campoFacultad">
                    <label for="facultad">Facultad:</label>
                    <input type="text" name="facultad" id="facultad">
                </div>

                <div class="campo-adicional" id="campoProfesion">
                    <label for="profesion">Profesión:</label>
                    <input type="text" name="profesion" id="profesion">
                </div>

                <div class="campo-adicional" id="campoCargo">
                    <label for="cargo">Cargo:</label>
                    <input type="text" name="cargo" id="cargo">
                </div>
                <div class="campo-adicional" id="campoCarrera">
                    <label for="carrera">Carrera:</label>
                    <input type="text" name="carrera" id="carrera">
                </div>

                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" required>

                <label for="cargarLista">Cargar Lista:</label>
                <input type="file" name="cargarLista" id="cargarLista" required>
            
        </div>
        <input type="submit" value="Registrar Votante">
        <input type="reset" value="Cancelar">
    </form>
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