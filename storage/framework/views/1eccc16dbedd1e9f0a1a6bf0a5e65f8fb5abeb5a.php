    <table class="table table-striped table-bordered zero-configuration18" id="tblListaPrecios-table">
        <thead>
        <tr class="gris_barra">
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Producto ID" disabled="disabled"></th>
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Producto" disabled="disabled"></th>
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Categoría" disabled="disabled"></th>    
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Subcategoría" disabled="disabled"></th>  
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Moneda" disabled="disabled"></th>    
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul"name="titulo1" id="titulo1" value="<?php echo e($titulos->titulo1); ?>" onchange="guarda_titulo()"></th>
        <th><input style="font-size: 15px;font-weight: bold;width: 140px" type="text" class="form-control texto_azul" name="titulo2" id="titulo2" value="<?php echo e($titulos->titulo2); ?>" onchange="guarda_titulo()"></th>
        <th><input style="font-size: 15px;font-weight: bold;width: 140px" type="text" class="form-control texto_azul" name="titulo3" id="titulo3" value="<?php echo e($titulos->titulo3); ?>" onchange="guarda_titulo()"></th>
        <th><input style="font-size: 15px;font-weight: bold;width: 140px" type="text" class="form-control texto_azul" name="titulo4" id="titulo4" value="<?php echo e($titulos->titulo4); ?>" onchange="guarda_titulo()"></th>
        <th><input style="font-size: 15px;font-weight: bold;width: 140px" type="text" class="form-control texto_azul" name="titulo5" id="titulo5" value="<?php echo e($titulos->titulo5); ?>" onchange="guarda_titulo()"></th>

        </tr>
        
        <tbody>
        <?php $__currentLoopData = $tblListaPrecios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblListaPrecios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr style="background-color: white">
            <td><p style=""><?php echo e($tblListaPrecios->idp); ?></p></td>
            <td><p style=""><?php echo e($tblListaPrecios->nombre); ?></p></td>

            <td><p style=""><?php echo e($tblListaPrecios->categoria); ?></p></td>
            <td><p style=""><?php echo e($tblListaPrecios->sub_categoria); ?></p></td>
            <td>
                <p style="">
                    <?php if($tblListaPrecios->id_vende==0): ?> MX <?php elseif($tblListaPrecios->id_vende==1): ?> US <?php else: ?> Desconocido <?php endif; ?>
                </p>
            </td>
            <td><p style=""><input type="text" class="form-control currency" name="lista1" id="lista1<?php echo e($tblListaPrecios->pid); ?>" value="<?php echo e($tblListaPrecios->lista1); ?>" onchange="guarda_costo(<?php echo e($tblListaPrecios->pid); ?>)"></p></td>
            <td><p style=""><input type="text" class="form-control currency" name="lista2" id="lista2<?php echo e($tblListaPrecios->pid); ?>" value="<?php echo e($tblListaPrecios->lista2); ?>" onchange="guarda_costo(<?php echo e($tblListaPrecios->pid); ?>)"></p></td>
            <td><p style=""><input type="text" class="form-control currency" name="lista3" id="lista3<?php echo e($tblListaPrecios->pid); ?>" value="<?php echo e($tblListaPrecios->lista3); ?>" onchange="guarda_costo(<?php echo e($tblListaPrecios->pid); ?>)"></p></td>
            <td><p style=""><input type="text" class="form-control currency" name="lista4" id="lista4<?php echo e($tblListaPrecios->pid); ?>" value="<?php echo e($tblListaPrecios->lista4); ?>" onchange="guarda_costo(<?php echo e($tblListaPrecios->pid); ?>)"></p></td>
            <td><p style=""><input type="text" class="form-control currency" name="lista5" id="lista5<?php echo e($tblListaPrecios->pid); ?>" value="<?php echo e($tblListaPrecios->lista5); ?>" onchange="guarda_costo(<?php echo e($tblListaPrecios->pid); ?>)"></p></td>
            
            
            
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table><?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_lista_precios/table.blade.php ENDPATH**/ ?>