<form id="catalogos_forma" action="">
	@csrf
	<input type="hidden" name="id_catalogo" value="1">
	<input type="hidden" name="id" value="{{$tallas->id}}">
	<!-- Catalogo Field -->
	<div class="form-group col-sm-12">
	    {!! Form::label('categoria', 'Talla:') !!}
	    <input type="text" required="" name="talla" class="form-control" id="talla" value="{{$tallas->talla}}">
	</div>
	<hr>
	<div class="form-group col-sm-12">
		<span class="btn btn-primary pull-right" onclick="guarda_catalogo(1,{{$tallas->id}},1,'catalogos_tallas')">Guardar</span>
	</div>
</form> 
