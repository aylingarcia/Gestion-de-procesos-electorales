<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrarVotante</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing:border-box;
            font-family: "Uni Sans" , sans-serif;
        }
        nav {
            display:flex;
            align-items: center;
            justify-content: space-around;
            height: 70px;
            background-image: linear-gradient(to right, #003770, #f80211);
            border-bottom: 2px solid #fff;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }
        nav .logo a {
            font-size:25px;
            color:#fff;
            font-weight: 600;
            text-decoration:none;
        }
        nav .logo a:hover {
            color: #003770;
            transition: 0.5s;
        }
        nav ul {
            display: flex;
            align-items: center;
            justify-content:center;
            gap:2.5rem;
        }
        nav ul li{
            list-style: none;
        }
        nav ul li a{
            color: #fff;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
        }
        nav ul li a:hover{
            color: #003770;
            transition: 0.5s;
        }
        
        .menu-icon{
            display: none;
            width: 25px;
            height:3px;
            background: #fff;
            transform: translateY(-50%);
            transition: 0.5s;
            border-radius:5px;
            cursor: pointer;
        }
        .menu-icon::before,
        .menu-icon::after{
            content:"";
            position: absolute;
            width: 25px;
            height:3px;
            background: #fff;
            transition:0.5s;
            border-radius: 5px;
        }
        .menu-icon::before{
            top:-8px;
        }
        .menu-icon::after{
            top:-8px;
        }
        .menu-icon.active{
            background: rgba(0,0,0,0);
        }
        .menu-icon.active::before{
            top:0;
            transform:rotate(45deg);
        }
        .menu-icon.active::after{
            top:0;
            transform: rotate(135deg);
        }
        @media screen and (max-width:992px){
            nav ul{
                position:fixed;
                top: 0px;
                right:100%;
                width:100%;
                height: 90vh;
                background: #004a92;
                flex-direction: column;
                transition: 0.5s ease-in;
            }
            nav ul li a{
                font-size: 24px;
            }
            ul.active{
                right: 0;
                transition: 0.5s ease-in;
            }
            .menu-icon{
                display: block;
            }
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: white;
            color: white;
            text-align: center;
            padding: 2px 0;
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
        .footer {
            background-color: #003770;
            color: white;
            text-align: right;
            padding: 15px;
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            font-size: 15px;
            display: flex;
            flex-direction: column; 
            align-items: flex-end;
            
        }


        .content {
            padding-bottom: 70px;
        }
        .footer .second-line {
            font-size: 14px; 
        }
    </style>


</head>
<body>
    <nav>
        <div class="logo">
            <div><a href="#">TRIBUNAL ELECTORAL</a></div>
            <div><a href="#">UNIVERSITARIO</a></div>
        </div>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Elecciones</a></li>
            <li><a href="#">Documentación</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contactos</a></li>
            <li><a href="#">Ingreso</a></li>
        </ul>
        <div class="menu-icon"></div>
    </nav>
    <div class="header">
            <label for=""></label><br><br>
           
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
        <label for=""></label><br><br>
        <label for=""></label><br><br>
        
    </form>
    <div class="footer">
    <span>
            Av. Oquendo y calle Jordán 
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
            Copyright © 2023 Tribunal Electoral Universitario<br> 
            
            Mail: Tribunal_electoral@umss.edu 
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            Todos los derechos Reservados<br>
        
            www.umss.edu.bo Cochabamba - Bolivia
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
            Design: DevGenius </span>

    </div>
    
    </div>
    
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