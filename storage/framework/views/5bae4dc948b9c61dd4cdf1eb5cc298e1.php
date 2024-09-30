<?php $__env->startSection('contenido'); ?>

<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1>Listado de Productos</h1>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Productos registrados</h5>

        <p class="card-text">
      <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Código</th>
              <th scope="col">Categoría</th>
              <th scope="col">Imagen</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripión</th>
              <th scope="col">Stock</th>
              <th scope="col">Stock mínimo</th>
              <th scope="col">Stock máximo</th>
              <th scope="col">Precio compra</th>
              <th scope="col">Precio venta</th>
              <th scope="col">Fecha compra</th>
              <th scope="col">Usuario</th>
              <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td><center><?php echo e($producto->id); ?></center></td>
                  <td><?php echo e($producto->codigo); ?></td>
                  <td><?php echo e($producto->categoria ? $producto->categoria->nombre_categoria : 'Sin categoría'); ?></td>
                  <td><img src="<?php echo e($producto->imagen); ?>" width="50px" alt="" ></td>
                  <td><?php echo e($producto->nombre_producto); ?></td>
                  <td><?php echo e($producto->descripcion_producto); ?></td>
                  <td><?php echo e($producto->stock); ?></td>
                  <td><?php echo e($producto->stock_minimo); ?></td>
                  <td><?php echo e($producto->stock_maximo); ?></td>
                  <td><?php echo e($producto->precio_compra); ?></td>
                  <td><?php echo e($producto->precio_venta); ?></td>
                  <td><?php echo e($producto->fecha_ingreso); ?></td>
                  <td><?php echo e($producto->user ? $producto->user->name : 'Sin usuario'); ?></td>

                  <td>
                      <center>
                        <div class="btn-group">
                          <button type="button" class="btn btn-info"><i class="fa fa-eye"></i></button>
                          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-update"><i class="fa fa-pencil-alt"></i></button>

                          <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                          </div>
                      </center>
                  </td>
              </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
          </table>
      </div>
    </div>

    <script>
        $(function() {
            $("#example1").DataTable({

                language: {
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Productos",
                    "infoFiltered": "(Filtrado de _MAX_ total Productos)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Productos",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscador:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TipTop\resources\views/productos/index.blade.php ENDPATH**/ ?>