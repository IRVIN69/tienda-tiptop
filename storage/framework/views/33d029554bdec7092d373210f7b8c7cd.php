<?php $__env->startSection('titulo','Roles'); ?>

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
              <h5 class="card-title">CREAR ROLcito</h5>
              <p class="card-text"></p>
                <form id="RoleForm" name="RoleForm" action="">
                <?php echo csrf_field(); ?>
        
                    <div class="form-group row">
                        <div class="col-12">
                            <input type="text" id="rol_id_edit" hidden>
                            <label class="control-label">Nombre:</label>
                            <input type="text" id="name" name="name" class="form-control input_user <?php $__errorArgs = ['name'];
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
                            <label class="control-label">Descripción:</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control input_user <?php $__errorArgs = ['guard_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="descripción" required>
                            <?php $__errorArgs = ['descripcion'];
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
                    <hr>
                    <div class="col-12">
                        <center><h6>PERMISO ESPECIAL</h6></center>
                        <div class="row">
                            <div class="form-check col">
                                <input class="form-check-input" type="checkbox"  id="accesototal" name="accesototal">
                                <label class="form-check-label" for="accesototal">Acceso Total</label>
                            </div>
                            <div class="form-check col">
                                <input class="form-check-input" type="checkbox" id="accesocero" name="accesocero">
                                <label class="form-check-label" for="accesocero">Ningún Acceso</label>
                            </div>
                        </div>
                    </div>
                    <p></p>
                    
                    <div class="col-12">
                        
                        <?php if(count($permisos)<=0): ?>
                        
                            <p>No hay registro</p>
                        <?php else: ?>
                        
                            
                            
                            
                            <hr>
                            
                            
                            <center><H6>LISTA DE PERMISOS</H6></center>
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <label>
                                        MODULO
                                    </label>
                                </div>
                                <div class="fa fa-info-circle col-lg-1 col-md-1 col-sm-1 col-xs-1" style=" color: #4267B2">
                                    <label>
                                    </label>
                                </div>
                                <div class="fa fa-eye col-lg-1 col-md-1 col-sm-1 col-xs-1" style=" color: #F39C12">
                                    <label>
                                    </label>
                                </div>
                                <div class="fa fa-plus-square col-lg-1 col-md-1 col-sm-1 col-xs-1" style=" color: #55A92C">
                                    <label>
                                    </label>
                                </div>
                                <div class="fa fa-cog col-lg-1 col-md-1 col-sm-1 col-xs-1 " style=" color: #00ACD6">
                                    <label>
                                    </label>
                                </div>
                                <div class="fa fa-trash col-lg-1 col-md-1 col-sm-1 col-xs-1" style=" color: #D73925">
                                    <label>
                                    </label>
                                </div>
                            </div>
                            <div class="row">    
                                <?php $i = 0; ?>
                                <?php $__currentLoopData = $permisos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if ($i <5): ?>
                                    <?php if ($i ==0): ?>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <label>
                                            <?php echo e($permission->nombre); ?>

                                        </label>
                                    </div>
                                    <?php endif ?>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <label>
                                            
                                            
                                            <?php if($permission->estadopermiso == 0): ?>
                                                <?php echo e(Form::checkbox('permisos[]', $permission->id, null, ['disabled' => 'disabled'])); ?>

                                            <?php else: ?>
                                                <?php echo e(Form::checkbox('permisos[]', $permission->id, null)); ?>

                                            <?php endif; ?>
                                            <!--<?php echo e($permission->name); ?>-->
                                        </label>
                                    </div>
                                    <?php if ($i ==4): ?>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ">
                                        <label>
                                            <!--<?php echo e(Form::checkbox('1', 'idt', null)); ?>

                                    Seleccionar Todo	-->
                                        </label>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 ">
                                        <label>
                                            <!--<?php echo e(Form::checkbox('1', 'idN', null)); ?>

                                    Seleccionar Ninguno-->
                                        </label>
                                        <?php $i = -1; ?>
                                    </div>
                                    <?php endif ?>
                                    <?php endif ?>
                                    <!--	<em>(<?php echo e($permission->descripcion ?: 'Sin descripcion'); ?>)</em>-->
                                    <?php $i = $i + 1; ?>
                                    
                            
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            
                        <?php endif; ?>
                    </div>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.create')): ?>
                    <button id="saveBtn" name="saveBtn" class="btn btn-primary"><i class="fas fa-save"></i>Guardar</button>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.edit')): ?>
                    <button id="updateBtn" name="updateBtn" class="btn btn-info" disabled><i class="fas fa-save"></i>Actualizar</button>
                    <?php endif; ?>
                    
                    <button type="reset" id="btncancelar" class="btn btn-danger"> <i class="fas fa-ban"></i>Cancelar </button>
                    
                </form>
            </div>
          </div>
        </div>
        <div class="col-7">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">LISTA DE ROLES</h5>
              <p class="card-text">
                
                <table class="table" id="table-roles">
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
                    <p class="col">id de rol: </p>
                    <p id="ver_id" class="col"></p>
                </div>
                <div class="row">
                    <p class="col">Nombre de rol:</p>
                    <p id="ver_name" class="col"></p>
                </div>
                
                <div class="row">
                    <p class="col">Descripción de rol: </p>
                    <p id="ver_descripcion" class="col"></p>
                </div>
                <div class="row">
                    <p class="col">Fecha de registro de rol: </p>
                    <p id="ver_fecha_registro" class="col"></p>
                </div>
                <div class="row">
                    <p class="col">Fecha de actualización de rol: </p>
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
        
    }, 6000);
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

        $('#accesototal').change(function() {
            // Si el checkbox "Seleccionar Todo" está marcado
            if ($(this).prop('checked')) {
                // Marcar todos los checkboxes de permisos
                $('[name="permisos[]"]').prop('checked', true);
            } else {
                // Desmarcar todos los checkboxes de permisos
                $('[name="permisos[]"]').prop('checked', false);
            }
        });

        $('#accesocero').change(function() {
            // Si el checkbox "acceso cero" está marcado
            if ($(this).prop('checked')) {
                // Marcar todos los checkboxes de permisos
                $('[name="permisos[]"]').prop('checked', false);
            }
        });

        var table = $('#table-roles').DataTable({
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
            ajax: "<?php echo e(route('role.index')); ?>",
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
                        return <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.show')): ?> data.action3 +' '+ <?php endif; ?> ''
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.show')): ?> + data.action1 +' '+ <?php endif; ?> ''
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.destroy')): ?> +data.action2 <?php endif; ?>;
                    }
                }
            ]
        });

        $('#saveBtn').click(function(e) {
            e.preventDefault();
            name = $("#name").val();
            descripcion = $("#descripcion").val();

            if (name == '' || descripcion == '') {
                Toast.fire({
                        type: 'error',
                        title: 'Complete todos los campos por favor'
                    })
                return false;
            }
            $.ajax({
                data: $('#RoleForm').serialize(),
                url: "<?php echo e(route('role.store')); ?>",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    console.log('Success:', data);
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                    $('#RoleForm').trigger("reset");
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                    Toast.fire({
                        type: 'error',
                        title: 'Role fallo al Registrarse.'
                    })
                }
            });
        });

        $('body').on('click', '.deleteRole', function() {

            var Role_id_delete = $(this).data("id");
            $confirm = confirm("¿Estás seguro de que quieres eliminarlo?");
            if ($confirm == true) {
                $.ajax({
                    type: "DELETE",
                    
                    url: '<?php echo e(route('role.destroy', ['role' => ':role'])); ?>'.replace(':role', Role_id_delete),
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
                            title: 'Rol fallo al Eliminarlo.'
                        })
                    }
                });
            }
        });

        $('body').on('click', '.editRole', function() {
            var Role_id_edit = $(this).data('id');
            $.get('<?php echo e(route('role.edit', ['role' => ':role'])); ?>'.replace(':role', Role_id_edit),
                function(data) {
                    console.log(data);
                    $('#rol_id_edit').val(data.data.id);
                    $('#name').val(data.data.name);
                    $('#descripcion').val(data.data.descripcion);

                    // Desmarcar todos los checkboxes antes de marcar los nuevos
                    $('[name="permisos[]"]').prop('checked', false);
                    data.data2.forEach(function(permiso) {
                        // Marcar el checkbox correspondiente si el permiso está asociado al rol
                        $('[name="permisos[]"][value="' + permiso.id + '"]').prop('checked', true);
                    });

                    $('#accesototal').prop('checked',false);
                    $('#accesocero').prop('checked',false);

                    if (verificarPermisosSeleccionados()) {
                        //console.log("Todos los permisos están seleccionados");
                        $('#accesototal').prop('checked',true);

                    } else {
                        //console.log("No todos los permisos están seleccionados"); 

                    }
                    if(verificarPermisosCero()){
                            $('#accesocero').prop('checked',true);
                        }
                    //desactivar boton guardar
                    $("#saveBtn").prop("disabled", true);
                    //activar boton de actualizar
                    $("#updateBtn").prop("disabled", false);
                    //desactivar campo name
                    $("#name").prop("disabled", true);
                    
                    
                })
        });

        function verificarPermisosSeleccionados() {
            var todosSeleccionados = true;

            // Iterar sobre cada checkbox de permiso
            $('[name="permisos[]"]').each(function() {
                // Verificar si el checkbox está marcado
                if (!$(this).prop('checked')) {
                    todosSeleccionados = false;
                    // Si encontramos un checkbox no marcado, salir del bucle
                    return false;
                }
            });

            return todosSeleccionados;
        }

        function verificarPermisosCero() {
            var ceroSeleccionados = true;

            // Iterar sobre cada checkbox de permiso
            $('[name="permisos[]"]').each(function() {
                // Verificar si el checkbox está marcado
                if ($(this).prop('checked')) {
                    ceroSeleccionados = false;
                    // Si encontramos un checkbox marcado, salir del bucle
                    return false;
                }
            });

            return ceroSeleccionados;
        }
        $('#btncancelar').click(function(e) {
            cancelarUpdate();
            $("#name").prop("disabled", false);
        });


        function cancelarUpdate(){
            $("#saveBtn").prop("disabled", false);
            $("#updateBtn").prop("disabled", true);

        }

        $('#updateBtn').click(function(e) {
            e.preventDefault();
            Role_id_update = $('#rol_id_edit').val();
            $.ajax({
                data: $('#RoleForm').serialize(),
                url: '<?php echo e(route('role.update', ['role' => ':role'])); ?>'.replace(':role', Role_id_update),
                type: "PUT",
                dataType: 'json',
                success: function(data) {
                    console.log('Success:', data);
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    });
                    cancelarUpdate();
                    $('#RoleForm').trigger("reset");
                    table.draw();
                    
                },
                error: function(data) {
                    console.log('Error:', data);
                    Toast.fire({
                        type: 'error',
                        title: 'Rol fallo al Registrarse.'
                    })
                }
            });
        });

        $('body').on('click', '.eyeRole', function() {
            var Role_id_ver = $(this).data('id');
            $('#modalVerDetalle').modal('show');
            $.get('<?php echo e(route('role.show', ['role' => ':role'])); ?>'.replace(':role', Role_id_ver),
                function(data) {
                    console.log(data);
                    $('#ver_id').text(data.data.id);
                    $('#ver_name').text(data.data.name);
                    $('#ver_descripcion').text(data.data.descripcion);
                    $('#ver_fecha_registro').text(moment(data.data.created_at).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ver_fecha_update').text(moment(data.data.updated_at).format('YYYY-MM-DD HH:mm:ss'));

                })
           
        });

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TipTop\resources\views/roles/index.blade.php ENDPATH**/ ?>