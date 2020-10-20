    <table class="table table-striped table-bordered zero-configuration5" id="tblEntregas-table">
        <thead>
       <tr class="gris_barra">
        <th>Direccion</th>
        <th>Colonia</th>
        <th>Cp</th>
        <th>Edo.</th>
        <th>Mun.</th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblEntregas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblEntregas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><p style=""><?php echo e($tblEntregas->direccion); ?></p></td>
            <td><p style=""><?php echo e($tblEntregas->colonia); ?></p></td>
            <td><p style=""><?php echo e($tblEntregas->cp); ?></p></td>
            <td><p style=""><?php echo e($tblEntregas->estado); ?></p></td>
            <td><p style=""><?php echo e($tblEntregas->municipio); ?></p></td>
                <td>
                     <div class='btn-group'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="direccion_cliente(1,<?php echo e($tblEntregas->ide); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_entrega(<?php echo e($tblEntregas->ide); ?>,<?php echo e($tblEntregas->id_cliente); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-24">delete_sweep</span></a>
                        
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_entregas/table.blade.php ENDPATH**/ ?>