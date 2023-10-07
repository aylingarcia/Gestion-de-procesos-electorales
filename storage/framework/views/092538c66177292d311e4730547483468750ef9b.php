<?php $__env->startSection('active'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="header">
        <h1>Administrador de elecciones</h1>
        <h2>UMSS</h2>
    </div>
    <div class="container">
        <div class="column">
            <form action="<?php echo e(isset($elecciones) ? url('/elecciones/'.$elecciones->id) : url('/elecciones')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(isset($elecciones)): ?>
                    <?php echo e(method_field('PATCH')); ?>

                <?php endif; ?>
                <h2 class="form-title">Registrar Elección</h2> <!-- Aumenta el tamaño del título -->

                <label for="nombre">Nombre de la Elección:</label>
                <input type="text" name="nombre" value="<?php echo e(isset($elecciones) ? $elecciones->nombre : ''); ?>" required><br>

                <label for="motivo">Motivo de la Elección:</label>
                <input type="text" name="motivo" value="<?php echo e(isset($elecciones) ? $elecciones->motivo : ''); ?>" id="motivo" required><br>

                <label for="cargodeautoridad">Cargo de Autoridad:</label>
                <input type="text" name="cargodeautoridad" value="<?php echo e(isset($elecciones) ? $elecciones->cargodeautoridad : ''); ?>" id="cargodeautoridad" required><br>

                <label for="gestion">Gestión (Año):</label>
                <input type="number" name="gestion" value="<?php echo e(isset($elecciones) ? $elecciones->gestion : ''); ?>" id="gestion" required><br>
            </form>
        </div>
        <div class="column">
            <form action="<?php echo e(isset($elecciones) ? url('/elecciones/'.$elecciones->id) : url('/elecciones')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if(isset($elecciones)): ?>
                    <?php echo e(method_field('PATCH')); ?>

                <?php endif; ?>

                <label for="convocatoria">Convocatoria (PDF):</label>
                <?php if(isset($elecciones) && $elecciones->convocatoria): ?>
                    <p><?php echo e($elecciones->convocatoria); ?></p>
                <?php endif; ?>
                <input type="file" name="convocatoria" <?php echo e(isset($elecciones) && $elecciones->convocatoria ? '' : 'required'); ?>><br>

                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" value="<?php echo e(isset($elecciones) ? $elecciones->fecha : ''); ?>" id="fecha" required><br>

                <label for="tipodeeleccion">Tipo de Elección:</label>
                <input type="text" name="tipodeeleccion" value="<?php echo e(isset($elecciones) ? $elecciones->tipodeeleccion : ''); ?>" id="tipodeeleccion" required><br>

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" rows="4"><?php echo e(isset($elecciones) ? $elecciones->descripcion : ''); ?></textarea><br>

                <input type="submit" value="<?php echo e(isset($elecciones) ? 'Actualizar' : 'Registrar'); ?>">
                <input type="reset" value="Cancelar">
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Datos Hacku\Documentos UMSS\Materias\tis 2 23\Pagina TEU\Pagina TEU\resources\views/registrar.blade.php ENDPATH**/ ?>