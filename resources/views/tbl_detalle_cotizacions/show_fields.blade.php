<!-- Id Cotizacion Field -->
<div class="form-group">
    {!! Form::label('id_cotizacion', 'Id Cotizacion:') !!}
    <p>{{ $tblDetalleCotizacion->id_cotizacion }}</p>
</div>

<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $tblDetalleCotizacion->id_producto }}</p>
</div>

<!-- Id Lista Field -->
<div class="form-group">
    {!! Form::label('id_lista', 'Id Lista:') !!}
    <p>{{ $tblDetalleCotizacion->id_lista }}</p>
</div>

<!-- Costo Field -->
<div class="form-group">
    {!! Form::label('costo', 'Costo:') !!}
    <p>{{ $tblDetalleCotizacion->costo }}</p>
</div>

<!-- Descuento Field -->
<div class="form-group">
    {!! Form::label('descuento', 'Descuento:') !!}
    <p>{{ $tblDetalleCotizacion->descuento }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $tblDetalleCotizacion->cantidad }}</p>
</div>

<!-- Comentarios Adicionales Field -->
<div class="form-group">
    {!! Form::label('comentarios_adicionales', 'Comentarios Adicionales:') !!}
    <p>{{ $tblDetalleCotizacion->comentarios_adicionales }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblDetalleCotizacion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblDetalleCotizacion->updated_at }}</p>
</div>

