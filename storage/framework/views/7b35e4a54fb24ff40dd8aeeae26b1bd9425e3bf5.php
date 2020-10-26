<br>
<table class="table table-striped table-bordered"  style=" width: 100%">
    <thead>
       <tr style="width: 100%" class="gris_barra">
        <th colspan="3" style="background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">Cliente:  <?php if($actual->id_cliente==0): ?>  &nbsp;&nbsp;<?php echo e($actual->cliente); ?>  <?php else: ?>    <?php if($actual->id_cliente==0): ?>   <?php else: ?> &nbsp;&nbsp;<?php echo e($sql_cliente->nombre); ?> <?php endif; ?> <?php endif; ?></th>
        <th colspan="3" style="background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">Nombre cotización: &nbsp;&nbsp;<?php echo e($actual->nombre); ?></th>
        <th colspan="3" style="background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">Lista autorizada:  &nbsp;&nbsp;   <?php echo e($lista); ?></th>
      </tr>
      <tr style="width: 100%" class="gris_barra">
        <th colspan="3" style="background-color: white;border-left-color:white;border-right-color:white">Correo: &nbsp;&nbsp;<?php echo e($actual->correo); ?></th>
        <th colspan="3" style="background-color: white;border-left-color:white;border-right-color:white">Teléfono: &nbsp;&nbsp;<?php echo e($actual->telefono); ?></th>
        <th colspan="3" style="background-color: white;border-left-color:white;border-right-color:white">Tc: $<?php echo e(number_format($actual->tipo_cambio,2)); ?></th>

      </tr> 
      <input type="hidden" name="idl" id="idl" value="<?php echo e($idl); ?>">
        <tr class="gris_barra">
        <th>Foto</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio unit. USD</th>
        <th>Precio unit. MXN</th>
        <th>Descuento</th>
        <th>Total MXN</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php ($total=0); ?>
      <?php ($sub_total=0); ?>
      <?php ($con_descuento=0); ?>
      <?php ($con_iva=0); ?>
      <?php ($iva=0); ?>
      <?php ($anticipo=0); ?> 
       <?php $__currentLoopData = $cotizados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cotizados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: white">
            <td>
             <div class="img-container" style="width: 100px;">

               <?php if(empty($cotizados->foto1)): ?>
                <?php else: ?>
                        <img class="rounded img-fluid" src=data:image/jpeg;base64,<?php echo e(base64_encode(Storage::get($cotizados->foto1))); ?>>
                    </div>    
                <?php endif; ?> 
            </div>
            </td>    
            <td><p style="width: 100px"><?php echo e($cotizados->nombre); ?></p></td>
            <td><p style="width: 240px"><?php echo e($cotizados->descripcion); ?></p></td>
            <td>
              <p style="width: 100px">
                  <?php if(empty($cotizados->cantidad)): ?>
                         <input style="background-color:whitesmoke" type="text"  id="cantidad<?php echo e($cotizados->id_dt); ?>" value="0" class="form-control decimal-inputmask" onchange="guarda_detalles(<?php echo e($cotizados->id_dt); ?>,<?php echo e($num_cot); ?>)">

                  <?php else: ?>
                        <input style="background-color:whitesmoke" type="text"  id="cantidad<?php echo e($cotizados->id_dt); ?>" value="<?php echo e($cotizados->cantidad); ?>" class="form-control decimal-inputmask" onchange="guarda_detalles(<?php echo e($cotizados->id_dt); ?>,<?php echo e($num_cot); ?>)">
                  <?php endif; ?>
                </p>
            </td>
            <td>
                <p style="width: 100px"> 
                  <?php if($cotizados->id_vende==1): ?>

                                <?php if($idl==1): ?>
                                       <input type="text"  style="background-color:whitesmoke" id="costous<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista1); ?>">

                                <?php elseif($idl==2): ?>
                                       <input type="text"  style="background-color:whitesmoke" id="costous<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista2); ?>">

                                <?php elseif($idl==3): ?>
                                       <input type="text"  style="background-color:whitesmoke" id="costous<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista3); ?>">

                                <?php elseif($idl==4): ?>
                                       <input type="text"  style="background-color:whitesmoke" id="costous<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista4); ?>">
                                
                                <?php elseif($idl==5): ?>

                                       <input type="text"  style="background-color:whitesmoke" id="costous<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista5); ?>">

                                <?php endif; ?>


                            <?php else: ?>

                                        <input type="text"  style="background-color:whitesmoke" id="costous<?php echo e($cotizados->id_dt); ?>" class="form-control currency" value="00.00" disabled="disabled" >

                            <?php endif; ?>


                </p>
            </td>
            
              <td>
                <p style="width: 100px">
                            <?php if(empty($cotizados->id_vende) || $cotizados->id_vende==0): ?>

                                <?php if($idl==1): ?>
                                    <input type="text" style="background-color:whitesmoke"  id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista1); ?>">

                                <?php elseif($idl==2): ?>
                                    <input type="text"  style="background-color:whitesmoke" id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista2); ?>">

                                <?php elseif($idl==3): ?>
                                    <input type="text"  style="background-color:whitesmoke" id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista3); ?>">

                                <?php elseif($idl==4): ?>
                                     <input type="text"  style="background-color:whitesmoke" id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista4); ?>">
                                
                                <?php elseif($idl==5): ?>
                                      <input type="text"  id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista5); ?>">

                                <?php endif; ?>


                            <?php else: ?>

                                    <?php if($idl==1): ?>
                                        <input type="text"  style="background-color:whitesmoke" id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista1*$actual->tipo_cambio); ?>">

                                    <?php elseif($idl==2): ?>
                                        <input type="text"  style="background-color:whitesmoke" id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista2*$actual->tipo_cambio); ?>">

                                    <?php elseif($idl==3): ?>
                                        <input type="text"  style="background-color:whitesmoke" id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista3*$actual->tipo_cambio); ?>">

                                    <?php elseif($idl==4): ?>
                                         <input type="text"  style="background-color:whitesmoke" id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista4*$actual->tipo_cambio); ?>">
                                    
                                    <?php elseif($idl==5): ?>
                                          <input type="text"  style="background-color:whitesmoke" id="costomx<?php echo e($cotizados->id_dt); ?>" class="form-control currency" disabled="disabled" value="<?php echo e($cotizados->lista5*$actual->tipo_cambio); ?>">

                                    <?php endif; ?>
                            <?php endif; ?>

                </p>
            </td>
            
            <td>
              <p style="width: 100px">
                    <?php if(empty($cotizados->descuento)): ?>
                          <input type="text" style="background-color:whitesmoke;text-align: right"  value="00.00" id="descuentos<?php echo e($cotizados->id_dt); ?>" class="form-control percentage-mask" onchange="guarda_detalles(<?php echo e($cotizados->id_dt); ?>,<?php echo e($num_cot); ?>)">

                    <?php else: ?>
                          <input type="text" style="background-color:whitesmoke;text-align: right" value="<?php echo e($cotizados->descuento); ?>"  id="descuentos<?php echo e($cotizados->id_dt); ?>" class="form-control percentage-mask" onchange="guarda_detalles(<?php echo e($cotizados->id_dt); ?>,<?php echo e($num_cot); ?>)">

                    <?php endif; ?>

                </p> 
            </td>
            <td><input type="text" name="" style="background-color:whitesmoke" id="tot<?php echo e($cotizados->id_dt); ?>"  value="<?php echo e(($cotizados->costo*$cotizados->cantidad)-(($cotizados->costo*$cotizados->cantidad)*($cotizados->descuento/100))); ?>" disabled="disabled" class="form-control currency"></td>
            <td>
              <div class='btn-group'>   
                    <a title="Borrar" onclick="borra_registro_detalle(<?php echo e($cotizados->idp); ?>,<?php echo e($num_cot); ?>)" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
            </td>
        </tr>
            <?php ($total=($cotizados->costo*$cotizados->cantidad)-(($cotizados->costo*$cotizados->cantidad)*($cotizados->descuento/100))); ?>
            <?php ($sub_total+=$total); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php ($con_descuento=($sub_total*($actual->descuento_aplicado/100))); ?>
          <?php ($iva=((($sub_total-$con_descuento)+$actual->flete)*($actual->iva/100))); ?>
          <?php ($con_iva=$sub_total-$con_descuento+$iva +$actual->flete); ?>
          <?php ($anticipo= $con_iva*($actual->anticipo/100)); ?>
          
           <tr style="width: 100%" class="gris_barra" style="color: gray" >
                <td  colspan="5" class="gris_barra" style="text-align: left;"></td>
                <td  class="gris_barra" style="text-align: right;"><strong>Sub Total:</strong></td>
                <td  class="gris_barra" style="text-align: right;"><strong></strong> </td>
                <td  class="gris_barra" style="text-align: right;background-color:whitesmoke "><input style="background-color:whitesmoke" type="text" name="sub_tot" id="sub_tot" class="form-control currency" disabled="disabled" value="<?php echo e($sub_total); ?>" ></td>
                <td  class="gris_barra" style="text-align: right;"><strong></strong> </td>

              </tr>
              
              
              
              
              
              
              
              
              <tr style="width: 100%"  style="color: gray; background-color: white" >

                <td colspan="6" style="text-align: right;background-color: white;color: #023761;font-size: 14px"><strong>Descuento:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                         <select style="text-align: right;text-align-last: right;width: 100%" class="form-control" id="descuento_aplicado" name="descuento_aplicado" onchange="actualiza2(<?php echo e($num_cot); ?>)">
                          <?php if($actual->descuento=='00.00'): ?>
                                <option value="0" <?php echo e(($actual->descuento_aplicado==0) ? 'selected' : ''); ?>>00.00%</option>

                          <?php else: ?>
                                <option value="0" <?php echo e(($actual->descuento_aplicado==0) ? 'selected' : ''); ?>>00.00%</option>
                                <option value="<?php echo e($actual->descuento); ?>" <?php echo e(($actual->descuento==$actual->descuento_aplicado) ? 'selected' : ''); ?> ><?php echo e($actual->descuento); ?>%</option>
                     
                          <?php endif; ?>
                         </select> 
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: "><input style="background-color:whitesmoke;width: 130px;text-align: right;" type="text" id="con_descuento" class="form-control currency" value="$ <?php echo e($con_descuento); ?>" disabled="disabled"></td>
                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
              
              
              
            <tr style="width: 100%"  style="color: gray; background-color: white" >
                <td colspan="2" style="text-align: right;background-color: white"><strong>Comentarios:</strong></td> 
                <td colspan="3" style="text-align: right;background-color: white"><textarea  style="height: 200px" class="form-control" onchange="actualiza2(<?php echo e($num_cot); ?>)" id="comentarios_encot"><?php echo e($actual->comentarios); ?></textarea></td> 


                <td colspan="1" style="text-align: right;background-color: white;color: #023761;font-size: 14px"><strong>I.V.A:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                         <select style="text-align: right;text-align-last: right;width: 100%" class="form-control" id="iva" name="iva" onchange="actualiza2(<?php echo e($num_cot); ?>)">
                           <option value="0"  <?php echo e(($actual->iva==0) ? 'selected' : ''); ?>>00.00%</option>
                           <option value="8"  <?php echo e(($actual->iva==8) ? 'selected' : ''); ?>>08.00%</option>
                           <option value="16" <?php echo e(($actual->iva==16) ? 'selected' : ''); ?>>16.00%</option>
                         </select> 
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: "><input style=background-color:whitesmoke;"width: 130px;text-align: right;" type="text" id="ivas" class="form-control currency" value="<?php echo e($iva); ?>" disabled="disabled"></td>
                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
              
              
             <tr style="width: 100%"  style="color: gray;" >
                <td colspan="2" style="text-align: right;background-color: white"><strong>Condiciones:</strong></td> <br><br><br><br><br>
                <td colspan="3" style="text-align: right;background-color: white"><textarea  style="height: 1200px;width: 600px" cols="40" rows="5"  class="form-control " onchange="actualiza2(<?php echo e($num_cot); ?>)" id="condiciones_encot"><?php echo e($actual->condiciones); ?></textarea></td> 

                <td colspan="1" style="background-color: whitesmoke;text-align:right;color: #023761;font-size: 14px"><strong>Total:</strong></td> 
                <td  style="background-color: whitesmoke;text-align: "><strong> </strong> </td>
                <td  style="background-color: whitesmoke;text-align: right; "><input style="background-color:whitesmoke;width: 130px;text-align: right;" type="text" id="totales" class="form-control currency" value="<?php echo e($con_iva); ?>" disabled="disabled"></td>
                <td  style="background-color: whitesmoke;text-align: right; "></td>
              </tr>
              
              <tr style="width: 100%"  style="color: gray; background-color: white" >
                <td colspan="2" style="background-color: white;text-align:right"><strong>Flete estimado:</strong></td> 
                <td colspan="3" style="background-color: white;text-align: "> 
                    <?php if(empty($actual->flete)): ?>
                       <input type="text" name="flete" style="background-color:whitesmoke;width: 100px;" id="flete" class="form-control currency" value="0" onchange="actualiza2(<?php echo e($num_cot); ?>)"> 
                    <?php else: ?>
                        <input type="text" name="flete" style="background-color:whitesmoke;width: 100px;" id="flete" class="form-control currency" value="<?php echo e($actual->flete); ?>" onchange="actualiza2(<?php echo e($num_cot); ?>)"> 
                    <?php endif; ?>
                </td>
                
                <td colspan="1" style="text-align: right;background-color: white"><strong>Anticipo:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                          <?php if(empty($actual->anticipo)): ?>
                           <input type="text" style="background-color:whitesmoke;text-align: left;text-align: right;text-align-last: right;width: 100%" name="anticipo" id="anticipo" class="form-control percentage-mask" value="00.00" onchange="actualiza2(<?php echo e($num_cot); ?>)">

                          <?php else: ?>
                             <input type="text" style="background-color:whitesmoke;text-align: left;text-align: right;text-align-last: right;width: 100%" name="anticipo" id="anticipo" class="form-control percentage-mask" value="<?php echo e($actual->anticipo); ?>" onchange="actualiza2(<?php echo e($num_cot); ?>)">
                          <?php endif; ?>
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: "><input style="background-color:whitesmoke;width: 130px;text-align: right;" type="text" id="ant" value="<?php echo e($anticipo); ?>" class="form-control currency" disabled="disabled" ></td>

                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
    </tbody>
  </table>
<?php /**PATH C:\wamp64\www\laravel\ct_productos\resources\views/tbl_cotizaciones/table_cotizacion.blade.php ENDPATH**/ ?>