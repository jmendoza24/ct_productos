
    <table class="table table-striped table-bordered zero-configuration16" id="tblFabricantes-table">
        <thead>
        <tr class="gris_barra">
        <th>Nombre fabricante</th>
        <th>Razón social</th>    
        <th>Teléfono</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblFabricantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblFabricantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td><p style=""><?php echo e($tblFabricantes->nombre); ?></p></td>
            <td><p style=""><?php echo e($tblFabricantes->razon); ?></p></td>
            <td><p style=""><?php echo e($tblFabricantes->tel1); ?></p></td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar"  href="<?php echo e(route('tblFabricantes.edit', [$tblFabricantes->id])); ?>" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_fabricante(<?php echo e($tblFabricantes->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input onchange="activa_fabricante(<?php echo e($tblFabricantes->id); ?>)" type="checkbox" <?php echo e(($tblFabricantes->activo==1) ? 'checked' : ''); ?>>
                          <span class="toggle"></span>
                        </label>
                    </div>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_fabricantes/table.blade.php ENDPATH**/ ?>