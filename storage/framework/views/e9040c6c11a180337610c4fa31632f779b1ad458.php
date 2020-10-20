    <table class="table table-striped table-bordered zero-configuration13" id="tblMonedas-table">
        <thead>
        <tr class="gris_barra">
            <th>ID Moneda</th>  
            <th>Moneda</th> 
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblMonedas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblMonedas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p><?php echo e($tblMonedas->id); ?></p></td>
                <td><p><?php echo e($tblMonedas->moneda); ?></p></td>
                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="moneda(1,<?php echo e($tblMonedas->id); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_moneda(<?php echo e($tblMonedas->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_monedas/table.blade.php ENDPATH**/ ?>