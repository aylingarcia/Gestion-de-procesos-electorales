<form action="<?php echo e(url('/votante')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('votante.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


</form><?php /**PATH D:\Datos Hacku\Documentos UMSS\Materias\tis 2 23\ramas\rama 111023\Gestion-de-procesos-electorales-direccion-botones-espacio-en-campos-redireccion-a-listas\resources\views/votante/create.blade.php ENDPATH**/ ?>