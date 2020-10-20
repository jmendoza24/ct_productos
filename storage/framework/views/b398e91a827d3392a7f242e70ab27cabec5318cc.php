<?php $__env->startSection('content'); ?>
<div id="base"> 
    <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
        <div class="row">   
            <div class="col-md-12 "><br>
              
              <h4><strong class="texto_verde">Información de empresa</strong></h4>
            </div>
            <br><br><br>
                  <?php echo $__env->make('tbl_empresas.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>   
     </div>
    </div>  
    
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_empresas/index.blade.php ENDPATH**/ ?>