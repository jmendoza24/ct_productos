
<?php $__env->startSection('content'); ?>
<div class="row">   
    <div class="col-md-12 "><br>
      <h4><strong class="texto_verde">Categorias</strong></h4>
    </div>
 </div>   
<div class="row" id="tabla_catalogos">
    <?php echo $__env->make('catalogos.tablas_cat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\tp\resources\views/catalogos/categorias.blade.php ENDPATH**/ ?>