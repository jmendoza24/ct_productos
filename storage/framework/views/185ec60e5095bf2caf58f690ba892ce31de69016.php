<?php $__env->startSection('content'); ?>
<div id="base"> 
    <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
        <div class="row">   
            <div class="col-md-12 "><br>
              <div class="col-md-12 "><br>
               <h1 class="pull-right">
                     <a  class="btn btn_gris pull-right" style="margin-top: -10px;margin-bottom: 5px"  onclick="baja_lista_precios()"  href="#"> <span class="material-icons md-18">cloud_download</span> Descargar lista</a>
              </h1>
              <h4><strong class="texto_verde">Lista de precios</strong></h4>
            </div>
            <br>  
            <div id="div_productos" style="overflow: auto;width: 100%">
                  <?php echo $__env->make('tbl_lista_precios.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>   
     </div>
    </div>  
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_lista_precios/index.blade.php ENDPATH**/ ?>