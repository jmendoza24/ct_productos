    <table class="table table-striped table-bordered zero-configuration15" id="tblSubcategorias-table">
        <thead>
        <tr class="gris_barra">
            <th>ID subcategoría</th>  
            <th>Sub categoría</th>
            <th>Categoría</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblSubcategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblSubcategorias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p><?php echo e($tblSubcategorias->idsc); ?></p></td>
                <td><p><?php echo e($tblSubcategorias->sub_categoria); ?></p></td>
                <td><p><?php echo e($tblSubcategorias->categoria); ?></p></td>

                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="sub_categoría(1,<?php echo e($tblSubcategorias->idsc); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_subcategoria(<?php echo e($tblSubcategorias->idsc); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_subcategorias/table.blade.php ENDPATH**/ ?>