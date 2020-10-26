    <table class="table table-striped table-bordered zero-configuration6" id="tblProductos-table">
        <thead>
        <tr class="gris_barra">
        <th>Foto</th>
        <th>Producto ID</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Categoría</th>
        <th>Subcategoría</th>
        <th></th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblProductos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td>
             <div class="img-container" style="width: 150px;height:150px">

                <?php if(empty($tblProductos->foto1)): ?>
                <?php else: ?>
                        <img class="rounded img-fluid" src=data:image/jpeg;base64,<?php echo e(base64_encode(Storage::get($tblProductos->foto1))); ?>>
                    </div>    
                <?php endif; ?>
            </div>
            </td>    
            <td><p style=""><?php echo e($tblProductos->id_producto); ?></p></td>
            <td><p style="width: 140px"><?php echo e($tblProductos->nombre); ?></p></td>
            <td><p style="width: 260px"><?php echo e($tblProductos->descripcion); ?></p></td>
            <td><p style="width: 90px"><?php echo e($tblProductos->categoria); ?></p></td>
            <td><p style="width: 90px"><?php echo e($tblProductos->sub_categoria); ?></p></td>

            <td>
                <div class='btn-group'>   
                    <a title="Editar"  href="<?php echo e(route('tblProductos.edit', [$tblProductos->id])); ?>" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_producto(<?php echo e($tblProductos->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input  onchange="activa_producto(<?php echo e($tblProductos->id); ?>)" type="checkbox" <?php echo e(($tblProductos->activo==1) ? 'checked' : ''); ?>>
                          <span class="toggle "></span>
                        </label>
                    </div>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH C:\wamp64\www\laravel\ct_productos\resources\views/tbl_productos/table.blade.php ENDPATH**/ ?>