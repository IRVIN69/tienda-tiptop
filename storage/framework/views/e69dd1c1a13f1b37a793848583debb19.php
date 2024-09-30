<?php $__env->startSection('titulo','Inicio'); ?>


<?php $__env->startSection('contenido'); ?>
Bienvenido
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    //para cerrar el mensaje
    setTimeout(function () {
        //selecciono el id mensaje y lo remuevo en 2000 segundos
        document.querySelector('#mensaje').remove();
        
    }, 2000);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TipTop\resources\views/home.blade.php ENDPATH**/ ?>