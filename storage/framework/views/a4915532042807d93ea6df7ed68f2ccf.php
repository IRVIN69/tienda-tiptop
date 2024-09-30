<?php $__env->startSection('titulo','Usuario'); ?>


<?php $__env->startSection('contenido'); ?>

<div class="container ">
    
    <div id="mensaje">
        <?php if(session('datos')): ?>
            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                <?php echo e(session('datos')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">$times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
    <div class="row ">
        <div class="col-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">CREAR USUARIO</h5>
              <p class="card-text"></p>
                <form id="UsuarioForm" name="UsuarioForm" action="" >
                <?php echo csrf_field(); ?>
        
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="control-label">Nombre:</label>
                            <input type="text" name="name" id="name" class="form-control input_user <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Nombre" required>
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
                            <input type="email" name="email" id="email" class="form-control input_user <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="email" required>
                            <?php $__errorArgs = ['email'];
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
                            <label class="control-label">Contraseña:</label>
                            <input type="password" name="password" id="password" class="form-control input_pass <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="contraseña" required>
                            <?php $__errorArgs = ['password'];
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
                            <label class="control-label">Confirmar contraseña:</label>
                            <input type="password" name="confipassword" id="confipassword" class="form-control input_pass <?php $__errorArgs = ['confipassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="contraseña" required>
                            <?php $__errorArgs = ['confipassword'];
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
                    </div>
                    
                    
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario.create')): ?>
                    <button  id="saveBtn" class="btn btn-primary"><i class="fas fa-save"></i>Guardar</button>
                    <?php endif; ?>

                    <button type="reset" class="btn btn-danger"> <i class="fas fa-ban"></i>Cancelar </button>
                    
                </form>
            </div>
          </div>
        </div>
        <div class="col-7">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">LISTA DE USUARIOS</h5>
              <p class="card-text">
                
                <table class="table table-striped nowrap" id="table-users" name="table-users">
                <thead style="background-color:#1C91EC;color: #fff;">
                    <tr>
                      <th scope="col">N°</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Opciones</th>
                    </tr>
                  </thead>
                  
                                
                <tbody>

                </tbody>
                
            </table>
            
            </div>
          </div>
        </div>
        
      </div>
    
    <!-- Modal Ver detalles-->
    <div class="modal fade" id="modalVerDetalle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p class="col">id de usuario: </p>
                    <p id="ver_id" class="col"></p>
                </div>
                <div class="row">
                    <p class="col">Nombre de usuario:</p>
                    <p id="ver_nombre" class="col"></p>
                </div>
                <div class="row">
                    <p class="col">Email de usuario:</p>
                    <p id="ver_email" class="col"></p>
                </div>
                <div class="row">
                    <p class="col">Fecha de registro de usuario: </p>
                    <p id="ver_fecha_registro" class="col"></p>
                </div>
                <div class="row">
                    <p class="col">Fecha de actualización de usuario: </p>
                    <p id="ver_fecha_update" class="col"></p>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    
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
<script>
    $(document).ready(function() {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        var table = $('#table-users').DataTable({
            responsive: true, // Habilitar la opción responsive
            autoWidth: false,
            searchDelay : 2000,
            processing: true,
            serverSide: true,
            "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate":{
                "next" : "Siguiente",
                "previous" : "Anterior"
            }
            },

            order: [
                [0, "asc"]
            ],
            ajax: "<?php echo e(route('usuario.index')); ?>",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: null,
                    name: 'name',
                    'render': function(data, type, row) {
                        return <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario.show')): ?> data.action3 +' '+ <?php endif; ?> ''
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario.edit')): ?> + data.action1 +' '+ <?php endif; ?> ''
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario.destroy')): ?> +data.action2 <?php endif; ?>;
                    }
                }
            ]
        });


        $('#saveBtn').click(function(e) {
            e.preventDefault();
            name = $("#name").val();
            email = $("#email").val();
            contra = $("#password").val();
            confirmacontra = $("#confipassword").val();
            if (name == '' || email == ''  || contra=='' || confirmacontra=='') {
                Toast.fire({
                        type: 'error',
                        title: 'Complete todos los campos por favor'
                    })
                return false;
            }
            $.ajax({
                data: $('#UsuarioForm').serialize(),
                url: "<?php echo e(route('usuario.store')); ?>",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    console.log('Success:', data);
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                    $('#UsuarioForm').trigger("reset");
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                    Toast.fire({
                        type: 'error',
                        title: 'Usuario fallo al Registrarse.'
                    })
                }
            });
        });
        $('body').on('click', '.editUsuario', function() {
            var Usuario_id = $(this).data('id');
            window.location.href = "/usuario/"+Usuario_id+"/edit";
        });

        
        $('body').on('click', '.deleteUsuario', function() {

            var Usuario_id_delete = $(this).data("id");
            $confirm = confirm("¿Estás seguro de que quieres eliminarlo?");
            if ($confirm == true) {
                $.ajax({
                    type: "DELETE",
                    
                    url: '<?php echo e(route('usuario.destroy', ['usuario' => ':usuario'])); ?>'.replace(':usuario', Usuario_id_delete),
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function(data) {
                        table.draw();
                        Toast.fire({
                            type: 'success',
                            title: String(data.success)
                        });

                    },
                    error: function(data) {
                        console.log('Error:', data);
                        Toast.fire({
                            type: 'error',
                            title: 'Usuario fallo al Eliminarlo.'
                        })
                    }
                });
            }
        });

        $('body').on('click', '.eyeUsuario', function() {
            var Usuario_id_ver = $(this).data('id');
            $('#modalVerDetalle').modal('show');
            $.get('<?php echo e(route('usuario.show', ['usuario' => ':usuario'])); ?>'.replace(':usuario', Usuario_id_ver),
                function(data) {
                    console.log(data);
                    $('#ver_id').text(data.data.id);
                    $('#ver_nombre').text(data.data.name);
                    $('#ver_email').text(data.data.email);
                    $('#ver_fecha_registro').text(moment(data.data.created_at).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ver_fecha_update').text(moment(data.data.updated_at).format('YYYY-MM-DD HH:mm:ss'));
                })
           
        });
        
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TipTop\resources\views/users/index.blade.php ENDPATH**/ ?>