<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $tblClientes->nombre }}</p>
</div>

<!-- Nombre Corto Field -->
<div class="form-group">
    {!! Form::label('nombre_corto', 'Nombre Corto:') !!}
    <p>{{ $tblClientes->nombre_corto }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $tblClientes->direccion }}</p>
</div>

<!-- Colonia Field -->
<div class="form-group">
    {!! Form::label('colonia', 'Colonia:') !!}
    <p>{{ $tblClientes->colonia }}</p>
</div>

<!-- Id Municipio Field -->
<div class="form-group">
    {!! Form::label('id_municipio', 'Id Municipio:') !!}
    <p>{{ $tblClientes->id_municipio }}</p>
</div>

<!-- Id Estado Field -->
<div class="form-group">
    {!! Form::label('id_estado', 'Id Estado:') !!}
    <p>{{ $tblClientes->id_estado }}</p>
</div>

<!-- Id Pais Field -->
<div class="form-group">
    {!! Form::label('id_pais', 'Id Pais:') !!}
    <p>{{ $tblClientes->id_pais }}</p>
</div>

<!-- Rfc Field -->
<div class="form-group">
    {!! Form::label('rfc', 'Rfc:') !!}
    <p>{{ $tblClientes->rfc }}</p>
</div>

<!-- Estatus Field -->
<div class="form-group">
    {!! Form::label('estatus', 'Estatus:') !!}
    <p>{{ $tblClientes->estatus }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', 'Activo:') !!}
    <p>{{ $tblClientes->activo }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $tblClientes->comentarios }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblClientes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblClientes->updated_at }}</p>
</div>

