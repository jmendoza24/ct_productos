<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $tblTipoPrecio->id_producto }}</p>
</div>

<!-- Id Cliente Field -->
<div class="form-group">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $tblTipoPrecio->id_cliente }}</p>
</div>

<!-- Costo Field -->
<div class="form-group">
    {!! Form::label('costo', 'Costo:') !!}
    <p>{{ $tblTipoPrecio->costo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblTipoPrecio->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblTipoPrecio->updated_at }}</p>
</div>

