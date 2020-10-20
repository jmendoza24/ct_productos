<?php $__env->startSection('content'); ?><br><br>
<a class="btn btn_verde pull-right" style="margin-top: -10px;margin-bottom: 5px" href="<?php echo e(route('tblClientes.index')); ?>"  > <i class="fa fa-undo"></i>  Regresar</a>
<br>
<div id="base">
<div class="col-md-12"><h4><strong class="texto_verde">Clientes</strong></h4></div> 
<br>
<input type="hidden" name="idcc" id="idcc" value="<?php echo e($idcc); ?>">
<?php ($editar = 1); ?> 
   <?php echo Form::model($tblClientes, ['route' => ['tblClientes.update', $tblClientes->id], 'method' => 'patch']); ?>


        <?php echo $__env->make('tbl_clientes.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_clientes/edit.blade.php ENDPATH**/ ?>