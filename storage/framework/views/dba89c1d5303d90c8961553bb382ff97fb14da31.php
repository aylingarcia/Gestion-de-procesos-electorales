<?php $__env->startSection('head'); ?>
<title>Lista de Elecciones Creadas</title>
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
    <br>
    <center>
        <h1>Lista de Elecciones Creadas</h1>
    </center>
    <br>
    <br>

    <div class="container botonesss">


        <div class="botones">
            <a href="<?php echo e(route('elecciones.create')); ?>" class="buttons">Crear nueva elección</a>

        </div>

        
        <div class="botones">
            <a href="<?php echo e(route('votante.create')); ?>" class="buttons">Añadir Votantes</a>

        </div>

        <div class="botones">
            <a href="<?php echo e(route('comite.create')); ?>" class="buttons">Añadir Comite Electoral</a>

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
                            <th>Nombre de elección</th>
                            <th>Cargo de Autoridad</th>
                            <th>Gestion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $eleccionescreadas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elecciones): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($elecciones->id); ?></td>
                                <td><?php echo e($elecciones->nombre); ?></td>
                                <td><?php echo e($elecciones->cargodeautoridad); ?></td>
                                <td><?php echo e($elecciones->gestion); ?></td>

                                <td class="celda-botones">
                                    <button class="buttons-dentro-tabla" title="Editar Elección"
                                        onclick="window.location.href='<?php echo e(url('/elecciones/' . $elecciones->id . '/edit')); ?>'">
                                        <img src="/images/editar.png" alt="Editar" class="formato-imagen" />
                                    </button>

                                    <button class="buttons-dentro-tabla" title="Archivar Elección"
                                        onclick="confirmArchivar('<?php echo e(url('/elecciones/' . $elecciones->id . '/archivar')); ?>')">
                                        <img src="/images/archivar.png" alt="Archivar" class="formato-imagen" />
                                    </button>

                                    
                                        
                                        
                                        
                                    

                                    
                                        
                                        
                                        
                                    



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
                                <div class="footer">
                                    <span>Derechos Reservados © 2023</span>
                                    <span class="second-line">Tribunal Electoral Universitario DevGenius S.R.L.</span>
                                </div>






                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Datos Hacku\Documentos UMSS\Materias\tis 2 23\ramas\rama 111023\Gestion-de-procesos-electorales-direccion-botones-espacio-en-campos-redireccion-a-listas\resources\views/elecciones/index.blade.php ENDPATH**/ ?>