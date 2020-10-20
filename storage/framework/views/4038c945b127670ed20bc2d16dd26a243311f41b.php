    <table class="table table-striped table-bordered zero-configuration8" id="municipios-table">
        <thead>
        <tr class="gris_barra">  
                <th>ID Mun.</th>
                <th>Municipio</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $sql_municipios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sql_municipios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p style="width: 180px"><?php echo e($sql_municipios->id); ?></p></td>
                <td><p style="width: 180px"><?php echo e($sql_municipios->municipio); ?></p></td>
                <td><p style="width: 180px"><?php echo e($sql_municipios->estado); ?></p></td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>



<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_tipo_clientes/table_municipios.blade.php ENDPATH**/ ?>