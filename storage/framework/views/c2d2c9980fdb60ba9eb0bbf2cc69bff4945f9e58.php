<?php $__env->startSection('content'); ?><br><br>
<a class="btn btn_verde pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo e(route('tblProductos.index')); ?>"  > <i class="fa fa-undo"></i>  Regresar</a>
<br>
<div id="base">
<div class="col-md-12"><h4><strong class="texto_verde">Productos</strong></h4></div> 
<br>
<input type="hidden" name="idcp" id="idp" value="<?php echo e($idp); ?>">
<?php ($editar = 1); ?> 
   

            <?php echo $__env->make('tbl_productos.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_productos/edit.blade.php ENDPATH**/ ?>