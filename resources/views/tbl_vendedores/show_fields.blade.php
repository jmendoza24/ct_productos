<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $tblVendedores->nombre }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $tblVendedores->correo }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $tblVendedores->telefono }}</p>
</div>

<!-- Id Tipo Precio Field -->
<div class="form-group">
    {!! Form::label('id_tipo_precio', 'Id Tipo Precio:') !!}
    <p>{{ $tblVendedores->id_tipo_precio }}</p>
</div>

<!-- Descuentos Field -->
<div class="form-group">
    {!! Form::label('descuentos', 'Descuentos:') !!}
    <p>{{ $tblVendedores->descuentos }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblVendedores->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblVendedores->updated_at }}</p>
</div>

