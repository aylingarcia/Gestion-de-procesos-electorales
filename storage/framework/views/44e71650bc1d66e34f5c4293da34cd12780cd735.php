<?php $__env->startSection('active'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('head'); ?>
<title>Miembros del Comite</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/Elecciones_Creadas.css')); ?>">
    <script src="<?php echo e(asset('js/Elecciones_Creadas.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<section class="fondoo" id="fondoo">
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <center>
        <h1>Lista de Votantes</h1>
    </center>
    <br>
    <br>

    <div class="container botonesss">


        <div class="botones">
            <a href="<?php echo e(url('votante/create')); ?>" class="buttons">Añadir Votantes</a>

        </div>


    </div>

    <br>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table id="eleccionesTable" class="vistatabla">
                    <thead>
                        <tr>
                            <th>IdEleccion</th>
                            <th>Nombre Votante</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Tipo de Votante</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $votantescreados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $votante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($votante->ideleccion); ?></td>
                                <td><?php echo e($votante->nombres); ?></td>
                                <td><?php echo e($votante->apellidoPaterno); ?></td>
                                <td><?php echo e($votante->apellidoMaterno); ?></td>
                                <td><?php echo e($votante->tipoVotante); ?></td>


                                
                                
                              





                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section> 
   
   
   
   
   <?php $__env->stopSection(); ?>




<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Datos Hacku\Documentos UMSS\Materias\tis 2 23\ramas\rama 111023\Gestion-de-procesos-electorales-direccion-botones-espacio-en-campos-redireccion-a-listas\resources\views/votante/index.blade.php ENDPATH**/ ?>