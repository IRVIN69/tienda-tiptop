<?php $__env->startSection('titulo','Editar Usuario'); ?>

<?php $__env->startSection('contenido'); ?>

<div class="container ">
    <form action="<?php echo e(route('usuario.update',$usuario->id)); ?>" method="post">
        <?php echo method_field('put'); ?>
        <?php echo csrf_field(); ?>
        <div class="row row-cols-1 row-cols-md-2 g-4">
        
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">EDITAR USUARIO</h5>
                    <p class="card-text"></p>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="control-label">Nombre:</label>
                                    <input type="text" name="name" class="form-control input_user <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($usuario->name); ?>"  placeholder="Nombre" required>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-12">
                                    <label class="control-label">Email:</label>
                                    <input type="email" name="email" class="form-control input_user "  placeholder="email" value="<?php echo e($usuario->email); ?>" readonly required>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">LISTA DE ROLES</h5>
                    <p class="card-text"></p>
                        <div class="form-group">
                            <label for="roles">Roles:</label><br>
                            <?php if(count($roles)<=0): ?>
                                <p>No hay registro</p>
                            <?php else: ?>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check">
                                    <center>
                                        <input class="form-check-input" type="checkbox" value="<?php echo e($role->id); ?>" id="role<?php echo e($role->id); ?>" name="roles[]"
                                        <?php echo e($usuario->hasRole($role->name) ? 'checked' : ''); ?>>
                                        <label class="form-check-label" for="role<?php echo e($role->id); ?>">
                                            <?php echo e($role->name); ?> (<?php echo e($role->descripcion); ?>)
                                        </label>
                                    </center>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <center> <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Guardar</button>
        <a href="<?php echo e(route('usuario.cancelar')); ?>" class="btn btn-danger" ><i class="fas fa-ban"></i>Regresar</a></center>
    </form>
    
    
</div>
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
<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TipTop\resources\views/users/edit.blade.php ENDPATH**/ ?>