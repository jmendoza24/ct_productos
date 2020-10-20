<?php
header("Pragma: public");
header("Expires: 0");
$filename = "reporte.xls"; 
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?> 
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />

<br>
<table class="table table-striped table-bordered"  style=" width: 100%">
    <thead>

        <tr class="gris_barra">
        <th>ID OC</th>
        <th>Nombre Cotización</th>
        <th>Cliente</th>
        <th>Fecha</th>
        <th>TC</th>
        <th>Lista autorizada</th>
        <th>ID Producto</th>
        <th>Categoría</th>
        <th>Subcategoría</th>
        <th>Cantidad</th>
        <th>Precio unit USD</th>
        <th>Precio unit MXN</th>
        <th>Descuento</th>
        <th>Total MXN</th>
        <th>Subtotal cot</th>
        <th>Descuento</th>
        <th>IVA</th>
        <th>Total Cot</th>
        <th>Anticipo</th>
        <th>Flete</th>

      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $reportes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reportes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $reportes->id_oc; ?></td>
            <td><?php echo $reportes->nombre_cotizacion; ?></td>
            <?php if($reportes->id_tipo_cliente==0): ?>
                        <td><?php echo $reportes->cliente; ?></td>
            <?php else: ?>
                        <td><?php echo $reportes->nombre; ?></td>
            <?php endif; ?>
            <td><?php echo $reportes->fecha_cot; ?></td>
            <td style="text-align: right">$<?php echo e(number_format($reportes->tipo_cambio,2)); ?></td>
            <td>
              

                <?php if($reportes->lpc==1): ?>
                      <?php echo e($lista->titulo1); ?>

                    <?php elseif($reportes->lpc==2): ?>
                      <?php echo e($lista->titulo2); ?>

                    <?php elseif($reportes->lpc==3): ?>
                      <?php echo e($lista->titulo3); ?>

                    <?php elseif($reportes->lpc==4): ?>
                      <?php echo e($lista->titulo4); ?>

                    <?php elseif($reportes->lpc==5): ?>
                      <?php echo e($lista->titulo5); ?>

                    <?php endif; ?>

            </td>
            <td><?php echo $reportes->id_producto; ?></td>
            <td><?php echo $reportes->categoria; ?></td>
            <td><?php echo $reportes->sub_categoria; ?></td>
            <td><?php echo $reportes->cantidad; ?></td>


            <?php if($reportes->id_vende==1): ?>


                <?php if($reportes->lpc==1): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista1*$reportes->tipo_cambio,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista1*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2); ?></td>

                    <?php elseif($reportes->lpc==2): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista2*$reportes->tipo_cambio,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista2*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2); ?></td>

                    <?php elseif($reportes->lpc==3): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista3*$reportes->tipo_cambio,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista3*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2); ?></td>

                    <?php elseif($reportes->lpc==4): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista4*$reportes->tipo_cambio,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista4*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2); ?></td>

                    <?php elseif($reportes->lpc==5): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista5*$reportes->tipo_cambio,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista5*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2); ?></td>

                    <?php endif; ?>
            <?php else: ?>
                                    <td style="text-align: right">$<?php echo number_format(0,2); ?></td>

            <?php endif; ?>



            <?php if($reportes->id_vende==0): ?>
                    <?php if($reportes->lpc==1): ?> 
                        <td style="text-align: right">$<?php echo number_format($reportes->lista1,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista1*$reportes->dcdescuento)/100 ,2); ?></td>


                    <?php elseif($reportes->lpc==2): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista2,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista2*$reportes->dcdescuento)/100 ,2); ?></td>


                    <?php elseif($reportes->lpc==3): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista3,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista3*$reportes->dcdescuento)/100 ,2); ?></td>


                    <?php elseif($reportes->lpc==4): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista4,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista4*$reportes->dcdescuento)/100 ,2); ?></td>


                    <?php elseif($reportes->lpc==5): ?>
                        <td style="text-align: right">$<?php echo number_format($reportes->lista5,2); ?></td>
                        <td style="text-align: right">$<?php echo number_format( ($reportes->lista5*$reportes->dcdescuento)/100 ,2); ?></td>


                    <?php endif; ?>
            <?php else: ?>
                <td style="text-align: right">$<?php echo number_format(0,2); ?></td>


            <?php endif; ?> 

            <td style="text-align: right">$<?php echo number_format($reportes->tot_fila,2); ?></td>
            <td style="text-align: right">$<?php echo number_format($reportes->tot_filas,2); ?></td>
            <td style="text-align: right">$<?php echo number_format(($reportes->tot_filas*$reportes->descuento_aplicado)/100,2); ?></td>
            <td style="text-align: right">$<?php echo number_format((($reportes->tot_filas*$reportes->iva)/100),2); ?></td>
            <td style="text-align: right">$<?php echo number_format($reportes->totales,2); ?></td>
            <td style="text-align: right">$<?php echo number_format($reportes->anticipo,2); ?></td>
            <td style="text-align: right">$<?php echo number_format($reportes->flete,2); ?></td>


        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    </tbody>
  </table>
<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_oc/baja_reporte_xls.blade.php ENDPATH**/ ?>