<!-- Id Cotizacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cotizacion', 'Id Cotizacion:') !!}
    {!! Form::number('id_cotizacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    {!! Form::number('id_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Lista Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_lista', 'Id Lista:') !!}
    {!! Form::number('id_lista', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo', 'Costo:') !!}
    {!! Form::text('costo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descuento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descuento', 'Descuento:') !!}
    {!! Form::text('descuento', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentarios Adicionales Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comentarios_adicionales', 'Comentarios Adicionales:') !!}
    {!! Form::textarea('comentarios_adicionales', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblDetalleCotizacions.index') }}" class="btn btn-default">Cancel</a>
</div>
