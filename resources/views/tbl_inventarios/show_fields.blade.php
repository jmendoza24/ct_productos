<!-- Id Producto Field -->
<div class="form-group">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    <p>{{ $tblInventario->id_producto }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $tblInventario->cantidad }}</p>
</div>

<!-- Costo Field -->
<div class="form-group">
    {!! Form::label('costo', 'Costo:') !!}
    <p>{{ $tblInventario->costo }}</p>
</div>

<!-- Fecha Ingreso Field -->
<div class="form-group">
    {!! Form::label('fecha_ingreso', 'Fecha Ingreso:') !!}
    <p>{{ $tblInventario->fecha_ingreso }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $tblInventario->comentarios }}</p>
</div>

<!-- Id Usuario Field -->
<div class="form-group">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    <p>{{ $tblInventario->id_usuario }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblInventario->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblInventario->updated_at }}</p>
</div>

