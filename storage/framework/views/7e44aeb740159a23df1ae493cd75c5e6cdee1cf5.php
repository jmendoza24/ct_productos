    <table class="table table-striped table-bordered zero-configuration12" id="tblTipovendedores-table">
        <thead>
        <tr class="gris_barra">
                <th>ID Tipo vendedor</th>
                <th>Tipo vendedor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblTipoVendedors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblTipoVendedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p style="width: 180px"><?php echo e($tblTipoVendedor->id); ?></p></td>
                <td><p style="width: 180px"><?php echo e($tblTipoVendedor->tipo_vendedor); ?></p></td>
                <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(1,<?php echo e($tblTipoVendedor->id); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_tipo_vendedor(<?php echo e($tblTipoVendedor->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>



<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_tipo_vendedors/table.blade.php ENDPATH**/ ?>