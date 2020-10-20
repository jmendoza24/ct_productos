<!-- Id Direccion Field -->
<div class="form-group">
    {!! Form::label('id_direccion', 'Id Direccion:') !!}
    <p>{{ $tblUbicaciones->id_direccion }}</p>
</div>

<!-- Ubicacion Field -->
<div class="form-group">
    {!! Form::label('ubicacion', 'Ubicacion:') !!}
    <p>{{ $tblUbicaciones->ubicacion }}</p>
</div>

<!-- Id Estado Field -->
<div class="form-group">
    {!! Form::label('id_estado', 'Id Estado:') !!}
    <p>{{ $tblUbicaciones->id_estado }}</p>
</div>

<!-- Id Municipio Field -->
<div class="form-group">
    {!! Form::label('id_municipio', 'Id Municipio:') !!}
    <p>{{ $tblUbicaciones->id_municipio }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $tblUbicaciones->comentarios }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblUbicaciones->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblUbicaciones->updated_at }}</p>
</div>

