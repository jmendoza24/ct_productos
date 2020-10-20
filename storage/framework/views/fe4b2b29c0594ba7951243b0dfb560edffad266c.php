    <table class="table table-striped table-bordered zero-configuration19" id="tblColors-table">
        <thead>
        <tr class="gris_barra">
            <th>ID Color</th>  
            <th>Color</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblColors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblColor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
                <td><p><?php echo e($tblColor->id); ?></p></td>
                <td><p><?php echo e($tblColor->color); ?></p></td>
                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="colores(1,<?php echo e($tblColor->id); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_color(<?php echo e($tblColor->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_colors/table.blade.php ENDPATH**/ ?>