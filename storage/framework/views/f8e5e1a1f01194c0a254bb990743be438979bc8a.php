        <table class="table table-striped table-bordered zero-configuration6" id="tblCotizaciones-table2">
        <thead>
        <tr class="gris_barra">
        <th>ID cot.</th>   
        <th>Cliente</th>
        <th>Comentarios</th>
        <th>Total</th>
        <th>Fecha</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblCotizaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblCotizaciones): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php if($tblCotizaciones->estatus==0): ?>

            <tr style="background-color: white">
                <td><p style=""><a href="#" class="texto_azul" data-toggle="modal" data-target="#myModal2" onclick="ver_cot(<?php echo e($tblCotizaciones->id); ?>)"><?php echo e($tblCotizaciones->id); ?></a></p></td>
                <td><p style=""><?php if($tblCotizaciones->id_tipo_cliente==1): ?> <?php echo e($tblCotizaciones->cliente_registrado); ?>  <?php elseif($tblCotizaciones->id_tipo_cliente==0): ?>    <?php if(empty($tblCotizaciones->cliente)): ?> <p style="color:rgb(255, 0, 16);"> Cotización incompleta </p>  <?php else: ?>   <?php echo e($tblCotizaciones->cliente); ?>  <?php endif; ?>  <?php else: ?> <p style="color:rgb(255, 0, 16);"> Cotización incompleta </p> <?php endif; ?> <br><?php echo e($tblCotizaciones->correo); ?> &nbsp;&nbsp; <?php echo e($tblCotizaciones->telefono); ?> </p></td>
                <td><textarea class="form-control" id="descripcion<?php echo e($tblCotizaciones->id); ?>" onchange="guarda_comentarios_cotizacion(<?php echo e($tblCotizaciones->id); ?>)"><?php echo e($tblCotizaciones->descripcion); ?></textarea></td>
                <td><p style="text-align: right"><p>$<?php echo e(number_format($tblCotizaciones->totales,2)); ?></p></td>
                <td><p style="width: 80px"><p><?php echo e($tblCotizaciones->created_at); ?></p></td>
                <td>
                <div class='btn-group'>   
                    <a title="Editar"  href="#" onclick="revive(<?php echo e($tblCotizaciones->id); ?>)" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Convertir OC" onclick="convertir_oc(<?php echo e($tblCotizaciones->id); ?>)" href="#" class='btn btn-link'><span class="texto_verde material-icons md-20">done_outline</span></a> 
                    <a title="Borrar" onclick="borra_cotizacion(<?php echo e($tblCotizaciones->id); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
            </td>
            
            </tr>
        <?php endif; ?>      

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH /home/altermed/public_html/cotiza.tech/laravel/resources/views/tbl_cotizaciones/table.blade.php ENDPATH**/ ?>