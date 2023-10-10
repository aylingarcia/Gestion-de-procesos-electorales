<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear/Editar una elección</title>
    <style>
        /* Estilos del encabezado */
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
        /* Estilos del contenido */
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
        .footer {
            background-image: linear-gradient(to right, #003770, #C20000);
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

    <script>
        function confirmarCancelacion() {
            var confirmacion = confirm("¿Seguro que deseas cancelar? Los cambios no se guardarán.");
            if (confirmacion) {

                window.location.href = "/elecciones";
            }
        }

        function confirmarConfirmacion() {
            var confirmacion = confirm("Los datos han sido registrados con éxito");
            if (confirmacion) {

                window.location.href = "/home";
            }
        }

    </script>

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
    <div class="container">
        <form action="{{ isset($elecciones) ? url('/elecciones/' . $elecciones->id) : url('/elecciones') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($elecciones))
                {{ method_field('PATCH') }}
            @endif
            <h2 class="form-title">Registrar Elección</h2>
            <div class="columns">
                <div class="column">
                    <label for="nombre">Nombre de la Elección:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')" 
                     name="nombre" placeholder="Escribe el nombre de la elección aquí..."
                        value="{{ isset($elecciones) ? $elecciones->nombre : '' }}" required>

                    <label for="motivo">Motivo de la Elección:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"  
                    name="motivo" placeholder="Escribe el motivo de la elección aquí..."
                        value="{{ isset($elecciones) ? $elecciones->motivo : '' }}" id="motivo" required>

                    <label for="cargodeautoridad">Cargo de Autoridad:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"  
                    name="cargodeautoridad" placeholder="Escribe el cargo de autoridad aquí..."
                        value="{{ isset($elecciones) ? $elecciones->cargodeautoridad : '' }}" id="cargodeautoridad"
                        required>

                    <label for="gestion">Gestión (Año):</label>
                    <input type="number" name="gestion" placeholder="Escribe la gestión aquí..."
                        value="{{ isset($elecciones) ? $elecciones->gestion : '2023' }}" id="gestion" min="2023"
                        required>

                    <label for="tipodevotantes">Tipo de Votantes:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"  
                    name="tipodevotantes" placeholder="Escribe el tipo de votante aquí..."
                        value="{{ isset($elecciones) ? $elecciones->tipodevotantes : '' }}" id="tipodevotantes"
                        required><br><br>


                </div>
                <div class="column">
                    <label for="convocatoria">Convocatoria (PDF):</label>
                    @if (isset($elecciones) && $elecciones->convocatoria)
                        <p>{{ $elecciones->convocatoria }}</p>
                    @endif
                    <input type="file" accept="application/pdf" name="convocatoria"
                        {{ isset($elecciones) && $elecciones->convocatoria ? '' : 'required' }}>

                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" value="{{ isset($elecciones) ? $elecciones->fecha : '' }}"
                        id="fecha" required>

                    <label for="tipodeeleccion">Tipo de Elección:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"  
                    name="tipodeeleccion" placeholder="Escribe el tipo de elección aquí..."
                        value="{{ isset($elecciones) ? $elecciones->tipodeeleccion : '' }}" id="tipodeeleccion"
                        required>

                    <label for="descripcion">Descripción:</label>
                    <textarea oninput="this.value = this.value.replace(/[^A-Za-z,.0-9-]+/g, '')"  
                    name="descripcion" placeholder="Escribe la descripción de la elección aquí..." id="descripcion"
                        rows="4">{{ isset($elecciones) ? $elecciones->descripcion : '' }}</textarea>
                </div>
            </div>
            <input type="submit" value="{{ isset($elecciones) ? 'Actualizar' : 'Registrar' }}"
                onclick="confirmarConfirmacion()">
            <input type="reset" value="Cancelar" onclick="confirmarCancelación()">
            <label for=""></label><br><br>
            <label for=""></label><br><br>
        </form>
        <div class="footer">
            <span>Derechos Reservados © 2023</span>
            <span class="second-line">Tribunal Electoral Universitario DevGeniusSRL</span>
        </div>
    </div>
</body>

</html>
