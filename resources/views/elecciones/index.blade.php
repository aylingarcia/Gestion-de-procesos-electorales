{{-- mostrar lista de elecciones --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Elecciones Creadas</title>
    <link rel="stylesheet" href="{{ asset('css/Elecciones_Creadas.css') }}">
    <script src="{{ asset('js/Elecciones_Creadas.js') }}"></script>

</head>

<body>
    <header>



        <div class="back">
            <div class="menu container">



                <a href="#" class="logo">
                    <img src="images/LogoUMSS2.png" alt="Logo de la Empresa" class="company-logo">
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
                        <li><a href="#">Administrador</a></li>


                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <section class="fondoo" id="fondoo">
        <br>
        <br>
        <br>
        <center>
            <h1>Lista de Eleeciones Creadas</h1>
        </center>
        <br>
        <br>

        <div class="container botonesss">


            <div class="botones">
                <button class="buttons">Crear nueva elección</button>
            </div>

            <div class="botones">
                <input type="text" id="search" placeholder="Buscar...">
                <button class="buttons" onclick="search()">Buscar</button>
            </div>


        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="table-responsive">
                    <table id="eleccionesTable" class="vistatabla">
                        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Nombre de eleccion</th>
                                <th>Cargo de Autoridad</th>
                                <th>Gestion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eleccionescreadas as $elecciones)
                                <tr>
                                    <td>{{ $elecciones->id }}</td>
                                    <td>{{ $elecciones->nombre }}</td>
                                    <td>{{ $elecciones->cargodeautoridad }}</td>
                                    <td>{{ $elecciones->gestion }}</td>
                                    <td>

                                        <a href="{{ url('/elecciones/' . $elecciones->id . '/edit') }}">
                                            Editar
                                        </a> | Archivar
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
