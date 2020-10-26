    <table class="table table-striped table-bordered zero-configuration6" id="tblProductos-table">
        <thead>
        <tr class="gris_barra">
        <th>Foto</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Categoría</th>
        <th>Precio</th>
        <th>Agregar</th>
       </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $tblProductos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblProductos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td class="text-center">
             <div class="img-container text-center" >
 
                 <?php if(empty($tblProductos->foto1)): ?>
                <?php else: ?>
                        <img class="rounded img-fluid" style="width: 160px;height:120px" src=data:image/jpeg;base64,<?php echo e(base64_encode(Storage::get($tblProductos->foto1))); ?>>
                    </div>    
                <?php endif; ?> 
            </div>
            </td>  
            <td><p style="width: 90px"><?php echo e($tblProductos->nombre); ?></p></td>
            <td><p style="width: 200px"><?php echo e($tblProductos->descripcion); ?></p></td>

            <td><p style="width: 90px"><?php echo e($tblProductos->categoria); ?></p></td>
             <?php if($actual->id_tipo_cliente==0): ?> 
                         <td class="text-right"><p>$ <?php if($actual->lista==1): ?> <?php echo e(number_format($tblProductos->lista1,2)); ?> <?php elseif($actual->lista==2): ?> <?php echo e(number_format($tblProductos->lista2,2)); ?> <?php elseif($actual->lista==3): ?> <?php echo e(number_format($tblProductos->lista3,2)); ?> <?php elseif($actual->lista==4): ?> <?php echo e(number_format($tblProductos->lista4,2)); ?> <?php elseif($actual->lista==5): ?> <?php echo e(number_format($tblProductos->lista5,2)); ?> <?php else: ?> <?php echo e(number_format($tblProductos->lista1,2)); ?> <?php endif; ?>

             <?php else: ?> 
                         <td class="text-right"><p>$ <?php if($sql_cliente->id_tipo_precio==1): ?> <?php echo e(number_format($tblProductos->lista1,2)); ?> <?php elseif($sql_cliente->id_tipo_precio==2): ?> <?php echo e(number_format($tblProductos->lista2,2)); ?> <?php elseif($sql_cliente->id_tipo_precio==3): ?> <?php echo e(number_format($tblProductos->lista3,2)); ?> <?php elseif($sql_cliente->id_tipo_precio==4): ?> <?php echo e(number_format($tblProductos->lista4,2)); ?> <?php elseif($sql_cliente->id_tipo_precio==5): ?> <?php echo e(number_format($tblProductos->lista5,2)); ?> <?php else: ?> <?php echo e(number_format($tblProductos->lista1,2)); ?> <?php endif; ?>

             <?php endif; ?>
                
               </p>
            </td>
            <td>

                <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" <?php echo e(($tblProductos->idp==$tblProductos->id_p) ? 'checked' : ''); ?>  onchange="agrega_producto(<?php echo e($tblProductos->id_p); ?>,<?php echo e($num_cot); ?>)">
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>

            </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php /**PATH C:\wamp64\www\laravel\ct_productos\resources\views/tbl_productos/table_cotizados.blade.php ENDPATH**/ ?>