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
            <a href="{{ route('elecciones.create') }}" class="buttons">Crear nueva elección</a>

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
                            <button class="buttons" style="background-color: 04243C; color: #FFF; padding: 5px 10px; border: none; cursor: pointer;" onclick="window.location.href='{{ url('/elecciones/' . $elecciones->id . '/edit') }}'">Editar</button>
                            <button class="buttons" style="background-color: #A70606; color: #FFF; padding: 5px 10px; border: none; cursor: pointer;" onclick="confirmArchivar('{{ url('/elecciones/' . $elecciones->id . '/archivar') }}')">Archivar</button>
</td>

<script>
    function confirmArchivar(archivarUrl) {
        // Mostrar un cuadro de diálogo de confirmación
        var confirmacion = confirm("¿Estás seguro de que deseas archivar esta elección?");

        // Si el usuario hace clic en "Aceptar" en el cuadro de diálogo de confirmación
        if (confirmacion) {
            // Redirigir a la URL de archivar
            window.location.href = archivarUrl;
        } else {
            // No se hace nada si el usuario hace clic en "Cancelar"
        }
    }
</script>







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