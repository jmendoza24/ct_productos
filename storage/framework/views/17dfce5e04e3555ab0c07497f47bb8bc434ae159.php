    <table class="table table-striped table-bordered zero-configuration7" id="estados-table">
        <thead>
        <tr class="gris_barra">  
                <th>ID Edo.</th>
                <th>Estado</th>
                <th>Clave</th>
                <th>Abrev</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $sql_estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sql_estados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p style="width: 180px"><?php echo e($sql_estados->id); ?></p></td>
                <td><p style="width: 180px"><?php echo e($sql_estados->estado); ?></p></td>
                <td><p style="width: 180px"><?php echo e($sql_estados->clave); ?></p></td>
                <td><p style="width: 180px"><?php echo e($sql_estados->Abrev); ?></p></td>  
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>



<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_tipo_clientes/table_estados.blade.php ENDPATH**/ ?>