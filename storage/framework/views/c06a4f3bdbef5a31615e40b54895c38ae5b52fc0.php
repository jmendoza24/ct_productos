    <table class="table table-striped table-bordered zero-configuration4" id="tblContactosClientes-table">
        <thead>
        <tr class="gris_barra">
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblContactosClientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblContactosClientes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td><p style=""><?php echo e($tblContactosClientes->nombre); ?></p></td>
            <td><p style=""><?php echo e($tblContactosClientes->puesto); ?></p></td>
            <td><p style=""><?php echo e($tblContactosClientes->telefono); ?></p></td>
            <td><p style=""><?php echo e($tblContactosClientes->correo); ?></p></td>
                <td>
                    <div class='btn-group'>   
                    <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="contactos_clientes(1,<?php echo e($tblContactosClientes->id); ?>)"  href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_contacto_cliente(<?php echo e($tblContactosClientes->id); ?>,<?php echo e($tblContactosClientes->id_cliente); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_contactos_clientes/table.blade.php ENDPATH**/ ?>