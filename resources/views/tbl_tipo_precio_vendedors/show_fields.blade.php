<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $tblTipoPrecioVendedor->id_producto }}</p>
</div>

<!-- Id Vendedor Field -->
<div class="form-group">
    {!! Form::label('id_vendedor', 'Id Vendedor:') !!}
    <p>{{ $tblTipoPrecioVendedor->id_vendedor }}</p>
</div>

<!-- Costo Field -->
<div class="form-group">
    {!! Form::label('costo', 'Costo:') !!}
    <p>{{ $tblTipoPrecioVendedor->costo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblTipoPrecioVendedor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblTipoPrecioVendedor->updated_at }}</p>
</div>

