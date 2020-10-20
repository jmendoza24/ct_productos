<form id="catalogos_forma" action="">
	<?php echo csrf_field(); ?>
	<input type="hidden" name="id_catalogo" value="<?php echo e($tipo); ?>">
	<input type="hidden" name="id" value="<?php echo e($categorias->id); ?>">
	<input type="hidden" name="nivel" value="<?php echo e($categorias->nivel); ?>">
	<input type="hidden" name="id_padre" value="<?php echo e($categorias->id_padre); ?>">
	<div class="form-group col-sm-12">
	    <?php echo Form::label('categoria', 'Categoria:'); ?>

	    <input type="text" required="" name="categoria" class="form-control" id="categoria" value="<?php echo e($categorias->categorias); ?>">
	</div>
	<hr>
	<div class="form-group col-sm-12">
		<span class="btn btn-primary pull-right" onclick="guarda_catalogo(2,<?php echo e($categorias->id); ?>,1,'tabla_catalogos')">Guardar</span>
	</div>
</form> 
<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/catalogos/categorias_fields.blade.php ENDPATH**/ ?>