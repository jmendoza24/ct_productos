    <table class="table table-striped table-bordered zero-configuration9" id="paises-table">
        <thead>
        <tr class="gris_barra">  
                <th>ID País.</th>
                <th>País</th>
                <th>Clave</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $sql_pais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sql_pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p style="width: 180px"><?php echo e($sql_pais->id); ?></p></td>
                <td><p style="width: 180px"><?php echo e($sql_pais->Pais); ?></p></td>
                <td><p style="width: 180px"><?php echo e($sql_pais->Codigo); ?></p></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>



<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_tipo_clientes/table_paises.blade.php ENDPATH**/ ?>