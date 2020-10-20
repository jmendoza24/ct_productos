    <table class="table table-striped table-bordered zero-configuration10" id="tblUnidades-table">
        <thead>
        <tr class="gris_barra">
            <th>ID Unidad</th>  
            <th>Unidad</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblUnidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblUnidades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p><?php echo e($tblUnidades->id); ?></p></td>
                <td><p><?php echo e($tblUnidades->unidad); ?></p></td>
                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="unidad(1,<?php echo e($tblUnidades->id); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_unidad(<?php echo e($tblUnidades->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_unidades/table.blade.php ENDPATH**/ ?>