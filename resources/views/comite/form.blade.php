<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear/Editar comite</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/Form.css') }}">


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

                window.location.href = "/elecciones";
            }
        }
    </script>

</head>

<body>
    <nav>
        <div class="logo">
            <a href="#" class="logo2">
                <img src="/images/LogoUMSS2.png" alt="Logo de Enrique" class="company-logo">
                
            </a>
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
    <header></header>
    <div class="header">
        <label for=""></label><br><br>
    </div>
    <div class="container">
        <form action="{{ isset($comite) ? url('/comite/' . $comite->id) : url('/comite') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($comite))
                {{ method_field('PATCH') }}
            @endif
            <h2 class="form-title">Registrar Comite</h2>
            
            <div class="columns">
                <div class="column">

                <select name="id_eleccion" required>
                 <option value="">Selecciona una elección</option>
                   @if (isset($elecciones))
                      @foreach ($elecciones as $eleccion)
                 <option value="{{ $eleccion->id }}" @if(isset($comite) && $comite->id_eleccion == $eleccion->id) selected @endif>{{ $eleccion->nombre }}</option>
                   @endforeach
                   @endif
                </select>

                    <label for="nombreMiembro">Nombre Miembro Comite:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')" name="nombreMiembro"
                        placeholder="Escribe el nombre del miembro aquí..."
                        value="{{ isset($comite) ? $comite->nombreMiembro : '' }}" id="nombreMiembro" required>

                    <label for="apellidoPaterno">Apellido Paterno:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                        name="apellidoPaterno" placeholder="Escribe el apellido paterno aquí..."
                        value="{{ isset($comite) ? $comite->apellidoPaterno : '' }}" id="apellidoPaterno"
                        required>

                        <label for="apellidoMaterno">Apellido Materno:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                        name="apellidoMaterno" placeholder="Escribe el apellido materno aquí..."
                        value="{{ isset($comite) ? $comite->apellidoMaterno : '' }}" id="apellidoMaterno"
                        required>

                        <label for="CI">CI:</label>
                    <input type="text" 
                        name="CI" placeholder="Escribe el aCArnet de identidad aquí..."
                        value="{{ isset($comite) ? $comite->CI : '' }}" id="CI"
                        required>

                    <label for="cargoComite">Cargo en Comite:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                        name="cargoComite" placeholder="Escribe el cargo aquí..."
                        value="{{ isset($comite) ? $comite->cargoComite : '' }}" id="cargoComite"
                        required><br><br>

                </div>
                <div class="column">

                    <label for="profesion">Profesion:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                        name="profesion" placeholder="Escribe la profesion aquí..."
                        value="{{ isset($comite) ? $comite->profesion : '' }}" id="profesion"
                        required>

                        <label for="cargoUMSS">Cargo en UMSS:</label>
                    <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                        name="cargoUMSS" placeholder="Escribe el cargo que ejerce en la universidad"
                        value="{{ isset($comite) ? $comite->cargoUMSS : '' }}" id="cargoUMSS">

                </div>
            </div>
            <input type="submit" value="{{ isset($comite) ? 'Actualizar' : 'Registrar' }}"
                onclick="confirmarConfirmacion()">
            <input type="reset" value="Cancelar" onclick="confirmarCancelación()">
            <label for=""></label><br><br>
            <label for=""></label><br><br>
        </form>
        <div class="footer">
            <span>Derechos Reservados © 2023</span>
            <span class="second-line">Tribunal Electoral Universitario DevGenius S.R.L.</span>
        </div>
    </div>
</body>

</html>
