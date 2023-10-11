<?php $__env->startSection('head'); ?>
<title>Crear/Editar una elección</title>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="<?php echo e(asset('css/Form.css')); ?>">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="header">
    <label for=""></label><br><br>
</div>
<div class="container">
    <form action="<?php echo e(isset($elecciones) ? url('/elecciones/' . $elecciones->id) : url('/elecciones')); ?>"
        method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if(isset($elecciones)): ?>
            <?php echo e(method_field('PATCH')); ?>

        <?php endif; ?>
        <br>
        <br>
        <h2 class="form-title">Registrar Elección</h2>
        
        <div class="columns">
            <div class="column">
                <label for="nombre">Nombre de la Elección:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,. 0-9]+/g, '')" name="nombre" maxlength="40"
                    placeholder="Escribe el nombre de la elección aquí..."
                    value="<?php echo e(isset($elecciones) ? $elecciones->nombre : ''); ?>" required>

                <label for="motivo">Motivo de la Elección:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,. 0-9]+/g, '')" name="motivo" maxlength="60"
                    placeholder="Escribe el motivo de la elección aquí..."
                    value="<?php echo e(isset($elecciones) ? $elecciones->motivo : ''); ?>" id="motivo" required>

                <label for="cargodeautoridad">Cargo de Autoridad:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,. ]+/g, '')"
                    name="cargodeautoridad" placeholder="Escribe el cargo de autoridad aquí..." maxlength="30"
                    value="<?php echo e(isset($elecciones) ? $elecciones->cargodeautoridad : ''); ?>" id="cargodeautoridad"
                    required>

                <label for="gestion">Gestión (Año):</label>
                <input type="text" name="gestion" placeholder="Ejemplo: 2023 - 2028"
                    value="<?php echo e(isset($elecciones) ? $elecciones->gestion : ''); ?>" id="gestion" min="2023" max="2150"
                    required>

                <label for="tipodevotantes">Tipo de Votantes:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                    name="tipodevotantes" placeholder="Escribe el tipo de votante aquí..." maxlength="40"
                    value="<?php echo e(isset($elecciones) ? $elecciones->tipodevotantes : ''); ?>" id="tipodevotantes"
                    required><br><br>


            </div>
            <div class="column">
                <label for="convocatoria">Convocatoria (PDF):</label>
                <?php if(isset($elecciones) && $elecciones->convocatoria): ?>
                    <p><?php echo e($elecciones->convocatoria); ?></p>
                <?php endif; ?>
                <input type="file" accept="application/pdf" title="Subir Archivo PDF" name="convocatoria"
                    <?php echo e(isset($elecciones) && $elecciones->convocatoria ? '' : 'required'); ?>>
<br>
<br>
<br>
<br>
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" value="<?php echo e(isset($elecciones) ? $elecciones->fecha : ''); ?>"
                    id="fecha" required>

                <label for="tipodeeleccion">Tipo de Elección:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z,.]+/g, '')"
                    name="tipodeeleccion" placeholder="Escribe el tipo de elección aquí..." maxlength="40"
                    value="<?php echo e(isset($elecciones) ? $elecciones->tipodeeleccion : ''); ?>" id="tipodeeleccion"
                    required>

                <label for="descripcion">Descripción:</label>
                <textarea oninput="this.value = this.value.replace(/[^A-Za-z,. 0-9-]+/g, '')" name="descripcion" maxlength="300"
                    placeholder="Escribe la descripción de la elección aquí..." id="descripcion" rows="4"><?php echo e(isset($elecciones) ? $elecciones->descripcion : ''); ?></textarea>
            </div>
        </div>
        <input type="submit" value="<?php echo e(isset($elecciones) ? 'Actualizar' : 'Registrar'); ?>"
            onclick="confirmarConfirmacion()">
        <input type="reset" value="Cancelar" onclick="confirmarCancelación()">
        <label for=""></label><br><br>
        <label for=""></label><br><br>
    </form>
     
</div>

<?php $__env->stopSection(); ?>

   
   

   

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Datos Hacku\Documentos UMSS\Materias\tis 2 23\ramas\rama 111023\Gestion-de-procesos-electorales-direccion-botones-espacio-en-campos-redireccion-a-listas\resources\views/elecciones/form.blade.php ENDPATH**/ ?>