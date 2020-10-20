    <table class="table table-striped table-bordered zero-configuration6" id="users-table">
        <thead>
        <tr class="gris_barra">
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td><p style=""><?php echo e($users->name); ?></p></td>
            <td><p style=""><?php echo e($users->email); ?></p></td>
            <td><p style=""><?php if($users->id_tipo_usuario==2): ?> Vendedor <?php else: ?> Administrador <?php endif; ?></p></td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="usuarios(1,<?php echo e($users->id); ?>)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_usuario(<?php echo e($users->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-24">delete_sweep</span></a>
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input  onchange="activa_usuario(<?php echo e($users->id); ?>)" type="checkbox" <?php echo e(($users->activo==1) ? 'checked' : ''); ?>>
                          <span class="toggle "></span>
                        </label>
                    </div>
            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>



<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/users/table.blade.php ENDPATH**/ ?>