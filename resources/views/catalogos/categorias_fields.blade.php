<form id="catalogos_forma" action="">
	@csrf
	<input type="hidden" name="id_catalogo" value="{{$tipo}}">
	<input type="hidden" name="id" value="{{$categorias->id}}">
	<input type="hidden" name="nivel" value="{{$categorias->nivel}}">
	<input type="hidden" name="id_padre" value="{{$categorias->id_padre}}">
	<div class="form-group col-sm-12">
	    {!! Form::label('categoria', 'Categoria:') !!}
	    <input type="text" required="" name="categoria" class="form-control" id="categoria" value="{{$categorias->categorias}}">
	</div>
	<hr>
	<div class="form-group col-sm-12">
		<span class="btn btn-primary pull-right" onclick="guarda_catalogo(2,{{$categorias->id}},1,'tabla_catalogos')">Guardar</span>
	</div>
</form> 
