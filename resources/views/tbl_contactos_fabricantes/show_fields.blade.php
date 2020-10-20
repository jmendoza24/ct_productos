<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $tblContactosFabricantes->nombre }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $tblContactosFabricantes->correo }}</p>
</div>

<!-- Puesto Field -->
<div class="form-group">
    {!! Form::label('puesto', 'Puesto:') !!}
    <p>{{ $tblContactosFabricantes->puesto }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $tblContactosFabricantes->telefono }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $tblContactosFabricantes->comentarios }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblContactosFabricantes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblContactosFabricantes->updated_at }}</p>
</div>

