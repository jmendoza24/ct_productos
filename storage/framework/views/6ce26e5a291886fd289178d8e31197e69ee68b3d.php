
    <table class="table table-striped table-bordered zero-configuration16" id="tblFabricantes-table">
        <thead>
        <tr class="gris_barra">
        <th>ID Fabricante</th>    
        <th>Nombre fabricante</th>
        <th>Razón social</th>    
        <th>Teléfono</th>
      
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblFabricantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblFabricantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td><p style=""><?php echo e($tblFabricantes->id); ?></p></td>
            <td><p style=""><?php echo e($tblFabricantes->nombre); ?></p></td>
            <td><p style=""><?php echo e($tblFabricantes->razon); ?></p></td>
            <td><p style=""><?php echo e($tblFabricantes->tel1); ?></p></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_fabricantes/catalogo_fabricante.blade.php ENDPATH**/ ?>