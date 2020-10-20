    <table class="table table-striped table-bordered zero-configuration14" id="tblCategorias-table">
        <thead>
        <tr class="gris_barra">
            <th>ID categoría</th>  
            <th>Categoría</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblCategorias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p><?php echo e($tblCategorias->id); ?></p></td>
                <td><p><?php echo e($tblCategorias->categoria); ?></p></td>
                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="categoria(1,<?php echo e($tblCategorias->id); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_categoria(<?php echo e($tblCategorias->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_categorias/table.blade.php ENDPATH**/ ?>