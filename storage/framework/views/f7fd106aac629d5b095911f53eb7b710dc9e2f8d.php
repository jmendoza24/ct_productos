
    <table class="table table-striped table-bordered zero-configuration" id="tblVendedores-table">
      <thead>
        <tr class="gris_barra">
        <th>Puesto</th>    
        <th>Nombre</th>
        <th>Teléfono</th>
        <th></th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblVendedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblVendedores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td><p style="width: 180px"><?php echo e($tblVendedores->puesto); ?></p></td>    
            <td><p style="width: 180px"><?php echo e($tblVendedores->nombre); ?></p></td>
            <td><p style="width: 180px"><?php echo e($tblVendedores->telefono); ?></p></td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="vendedores(1,<?php echo e($tblVendedores->id); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_vendedor(<?php echo e($tblVendedores->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-24">delete_sweep</span></a>
                    
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input  onchange="activa_vendedor(<?php echo e($tblVendedores->id); ?>)" type="checkbox" <?php echo e(($tblVendedores->activo==1) ? 'checked' : ''); ?>>
                          <span class="toggle "></span>
                        </label>
                    </div>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table><?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_vendedores/table.blade.php ENDPATH**/ ?>