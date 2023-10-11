<?php $__env->startSection('head'); ?>
<title>RegistrarVotante</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing:border-box;
        font-family: "Uni Sans" , sans-serif;
    }
    
    .votante-form-container {
    
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
    


    .content {
        padding-bottom: 70px;
    }
    .footer .second-line {
        font-size: 14px; 
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="votante-form-container">
    <form action="<?php echo e(url('/votante')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <h2 class="form-title">Registrar Votante</h2>
        <div class="column">

        <label for="ideleccion">Elegir Elección:</label>
         <select name="ideleccion" id="ideleccion" required>
                <option value="">Selecciona una elección</option>
                      <?php $__currentLoopData = $elecciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eleccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($eleccion->id); ?>"><?php echo e($eleccion->nombre); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>

                <label for="nombres">Nombre:</label>
                <input type="text" placeholder="Escribe el nombre aqui..." maxlength="40" oninput="this.value = this.value.replace(/[^A-Za-z,. ]+/g, '')"
                name="nombres" required><br><br>

                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" placeholder="Escribe el Apellido Paterno aquí..." maxlength="40"
                oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                 name="apellidoPaterno" id="apellidoPaterno" required><br><br>

                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" placeholder="Escribe el Apellido Materno aquí..." maxlength="40"
                oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                name="apellidoMaterno" id="apellidoMaterno" required><br><br>

                <label for="codSis">Codigo Sis:</label>
                <input type="codSis" placeholder="Escribe el Codigo Sis aquí..." maxlength="9"
                oninput="this.value = this.value.replace(/[^0-9]+/g, '')"
                name="codSis" id="codSis" required><br><br>

                <label for="CI"> CI:</label>
                <input type="text" placeholder="Escribe el Carnet de Identidad aquí..." maxlength="10" 
                oninput="this.value = this.value.replace(/[^A-Za-z,.0-9]+/g, '')"
                name="CI" required><br><br>
            
                <label for="tipoVotante">Tipo de Votante:</label>
                <select name="tipoVotante" id="tipoVotante" required>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Docente">Docente</option>
                    <option value="Administrativo">Administrativo</option>
                </select>

                <div class="campo-adicional" id="campoCarrera">
                <label for="carrera">Carrera:</label>
                <input type="text" placeholder="Escribe la Carrera aquí..." maxlength="40" 
                oninput="this.value = this.value.replace(/[^A-Za-z,. ]+/g, '')"
                name="carrera" id="carrera" ><br><br>
                </div>

                <div class="campo-adicional" id="campoProfesion">
                <label for="profesion">Profesión:</label>
                <input type="text" placeholder="Escribe la Profesión aquí..." maxlength="40" 
                oninput="this.value = this.value.replace(/[^A-Za-z,. ]+/g, '')"
                name="profesion" id="profesion" ><br><br>
                </div>

                <div class="campo-adicional" id="campoFacultad">
                <label for="facultad">Facultad:</label>
                <input type="text" placeholder="Escribe la Facultad aquí..." maxlength="40" 
                oninput="this.value = this.value.replace(/[^A-Za-z,. ]+/g, '')"
                name="facultad" id="facultad" ><br><br>
                </div>

                <div class="campo-adicional" id="campoCargo">
                <label for="cargoAdministrativo">Cargo Administrativo:</label>
                <input type="text" placeholder="Escribe el Cargo Administrativo aquí..." maxlength="40"
                oninput="this.value = this.value.replace(/[^A-Za-z,. ]+/g, '')"
                name="cargoAdministrativo" id="cargoAdministrativo" ><br><br>
                </div>
                
                <label for="celular">Celular:</label>
                <input type="number" placeholder="Escribe el Número de Celular aquí..." min="60000000" max=""79999999 name="celular" id="celular" required><br><br>

                <label for="e-mail">e-mail:</label>
                <input type="email" placeholder="Escribe el E-Mail aquí..." maxlength="40" 
                name="e-mail" id="e-mail" required><br><br>

                <label for="cargarLista">Cargar lista de votantes:</label>
                <input type="file" title="Subir Archivo CSV o Excel" name="cargarLista" id="cargarLista" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                
        </div>
        <input type="submit" value="Registrar"
                onclick="confirmacion()">
          
        <input type="reset" value="Cancelar" onclick="cancelacion()">
        <label for=""></label><br><br>
        <label for=""></label><br><br>
        
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


   
   
   
   
   
   <?php $__env->stopSection(); ?>









<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Datos Hacku\Documentos UMSS\Materias\tis 2 23\ramas\rama 111023\Gestion-de-procesos-electorales-direccion-botones-espacio-en-campos-redireccion-a-listas\resources\views/votante/form.blade.php ENDPATH**/ ?>