<form id="catalogos_forma" action="">
	<?php echo csrf_field(); ?>
	<input type="hidden" name="id_catalogo" value="1">
	<input type="hidden" name="id" value="<?php echo e($tallas->id); ?>">
	<!-- Catalogo Field -->
	<div class="form-group col-sm-12">
	    <?php echo Form::label('categoria', 'Talla:'); ?>

	    <input type="text" required="" name="talla" class="form-control" id="talla" value="<?php echo e($tallas->talla); ?>">
	</div>
	<hr>
	<div class="form-group col-sm-12">
		<span class="btn btn-primary pull-right" onclick="guarda_catalogo(1,<?php echo e($tallas->id); ?>,1,'catalogos_tallas')">Guardar</span>
	</div>
</form> 
<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/catalogos/tallas_fields.blade.php ENDPATH**/ ?>