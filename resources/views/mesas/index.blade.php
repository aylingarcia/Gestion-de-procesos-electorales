<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <br>
    <br>
    <br>
    <title>Mesas</title>
    <link rel="stylesheet" href="{{ asset('css/Elecciones_Creadas.css') }}">
    
</head>
<style>
    .centered-container {
    text-align: center;
    }
    .styled-button {
            width: 10%;
            height: 100%;
            background: rgba(4, 36, 60, 0.99);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: 1px solid rgba(198, 69, 196, 0.30);
            color: #fff; 
            padding: 1% 2%;
            }
</style>


<body>
    <nav>


        <div class="logo">
            <a href="#" class="logo2">
                <img src="/images/Logo_TE.png" alt="Logo de la Empresa" class="company-logo">
            </a>
            <div><a href="{{ url('/') }}">TRIBUNAL ELECTORAL</a></div>
            <div><a href="{{ url('/') }}">UNIVERSITARIO</a></div>
        </div>
        <ul>
            <li></li><li></li>
            <li></li><li></li>
            <li></li><li></li>
            <li></li><li></li>

            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/elecciones') }}">Elecciones</a></li>
            <li><a href="{{ url('/comunicados') }}">Comunicados</a></li>
            <li><a href="#">Documentación</a></li>
            {{-- <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li> --}}
            <li><a href="#">Ingreso</a></li>
            <img src="/images/img.png"  class="company-logo">
        </ul>
        <div class="menu-icon"></div>
    </nav>
    <header>



        {{-- <div class="back">
            <div class="menu container">



                <a href="#" class="logo">
                    <img src="images/Logo_TE.png" alt="Logo de la Empresa" class="company-logo">
                    Administrador de Elecciones
                    <br>
                    Universidad Mayor de San Simon

                </a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src="images/menu.png" class="menu-icono" alt="">
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="#">Salir</a></li>
                        
                        <li class="icon-list">
                            <a href="#" class="admin-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <span class="admin-text">Administrador</span>
                            </a>
                        </li>
                        
                        


                    </ul>
                </nav>
            </div>
        </div> --}}
    </header>


    <section class="fondoo" id="fondoo">
        <br>
        <br>
        <br>
        <center>
            <h1>Lista de mesas</h1>
        </center>
        <br>
        <br>
        <div class="centered-container">
        <div>
            <button id="crearmesas" class="styled-button" onclick="crearM()" >Crear</button>
        </div>
        </div>



        <br>
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table id="mesasTable" class="vistatabla">
                        <thead>
                            <tr>
                                <th>N°.</th>
                                <th>Eleccion</th>
                                <th>Tipo Votante</th>
                                <th>Area</th>
                                <th>Ubicacion</th>
                                <th>Cantidad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                             <script>    
                                function crearM() {
                                    window.location.href="/mesas-create";
                                }
                            </script>    




          
        <div class="footer">

            <div class="footer-izq">
                Av. Oquendo y calle Jordán asd
                <br>
                Mail: Tribunal_electoral@umss.edu
                <br>
                www.umss.edu.bo Cochabamba - Bolivia
                <br>
                Design: DevGenius

            </div>
            <div class="footer-medio">

                Copyright © 2023 Tribunal Electoral Universitario Todos los derechos Reservados

            </div>
            <div class="footer-der">
                <a href="{{ url('/') }}">Acerca de</a>
                <span>&nbsp;|&nbsp;</span> <!-- Para agregar un separador -->
                <a href="{{ url('/') }}">Contactos</a>

            </div>

        </div>






                                
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>