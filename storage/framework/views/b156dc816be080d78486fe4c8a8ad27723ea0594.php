<br><br><br>
<table class="table table-striped table-bordered zero-configuration" id="catalogos_tallas-table">
    <thead>
        <tr class="gris_barra">
            <th>Id</th>
            <th>Talla</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $tallas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($t->id); ?></td>
            <td><span style="cursor: pointer;" onclick="ver_catalogo(1,<?php echo e($t->id); ?>,2,0)" data-toggle="modal" data-target="#myModal"><?php echo e($t->talla); ?></span></td>
            <td><span title="Borrar" onclick="elimina_catalogo(1,<?php echo e($t->id); ?>,'catalogos_tallas')" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></span></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>



<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/catalogos/table_tallas.blade.php ENDPATH**/ ?>