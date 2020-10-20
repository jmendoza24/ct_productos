<!-- Id Cliente Field -->
<div class="form-group">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $tblEntregas->id_cliente }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $tblEntregas->direccion }}</p>
</div>

<!-- Colonia Field -->
<div class="form-group">
    {!! Form::label('colonia', 'Colonia:') !!}
    <p>{{ $tblEntregas->colonia }}</p>
</div>

<!-- Cp Field -->
<div class="form-group">
    {!! Form::label('cp', 'Cp:') !!}
    <p>{{ $tblEntregas->cp }}</p>
</div>

<!-- Id Estado Field -->
<div class="form-group">
    {!! Form::label('id_estado', 'Id Estado:') !!}
    <p>{{ $tblEntregas->id_estado }}</p>
</div>

<!-- Id Municipio Field -->
<div class="form-group">
    {!! Form::label('id_municipio', 'Id Municipio:') !!}
    <p>{{ $tblEntregas->id_municipio }}</p>
</div>

<!-- Id Pais Field -->
<div class="form-group">
    {!! Form::label('id_pais', 'Id Pais:') !!}
    <p>{{ $tblEntregas->id_pais }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $tblEntregas->comentarios }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblEntregas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblEntregas->updated_at }}</p>
</div>

