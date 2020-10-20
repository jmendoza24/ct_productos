    <table class="table table-striped table-bordered zero-configuration2" id="tblClientes-table">
        <thead>
        <tr class="gris_barra">
        <th>Nombre</th>
        <th>Tipo cliente</th>    
        <th>Teléfono</th>
        <th>Lista de precios</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblClientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblClientes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td><p style=""><?php echo e($tblClientes->nombre); ?></p></td>
            <td><p style=""><?php echo e($tblClientes->tipo); ?></p></td>
            <td><p style=""><?php echo e($tblClientes->telefono); ?></p></td>
            <td>
                <?php if($tblClientes->id_tipo_precio==1): ?>
                <?php echo e($tbl_titulos_listas->titulo1); ?>

                <?php elseif($tblClientes->id_tipo_precio==2): ?>
                <?php echo e($tbl_titulos_listas->titulo2); ?>

                <?php elseif($tblClientes->id_tipo_precio==3): ?>
                <?php echo e($tbl_titulos_listas->titulo3); ?>

                <?php elseif($tblClientes->id_tipo_precio==4): ?>
                <?php echo e($tbl_titulos_listas->titulo4); ?>

                <?php elseif($tblClientes->id_tipo_precio==5): ?>
                <?php echo e($tbl_titulos_listas->titulo5); ?>

                <?php else: ?>
                <?php echo e($tbl_titulos_listas->titulo1); ?>

                <?php endif; ?>
            </td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar"  href="<?php echo e(route('tblClientes.edit', [$tblClientes->id])); ?>" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_cliente(<?php echo e($tblClientes->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input onchange="activa_cliente(<?php echo e($tblClientes->id); ?>)" type="checkbox" <?php echo e(($tblClientes->activo==1) ? 'checked' : ''); ?>>
                          <span class="toggle"></span>
                        </label>
                    </div>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_clientes/table.blade.php ENDPATH**/ ?>