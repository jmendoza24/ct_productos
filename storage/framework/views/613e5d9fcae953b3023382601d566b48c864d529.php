<?php $__env->startSection('content'); ?>
<div id="base"> 
    <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
        <div class="row">   
            <div class="col-md-12 "><br>
               <h1 class="pull-right">
                     <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="clientes(0,0)"  href="#"> <span class="material-icons md-18">add</span> Cliente</a>
              </h1>
              <h4><strong class="texto_verde">Clientes</strong></h4>
            </div>
            <br>  
            <div id="div_clientes" style="overflow: auto;width: 100%">
                  <?php echo $__env->make('tbl_clientes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>   
     </div>
    </div>  
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_clientes/index.blade.php ENDPATH**/ ?>