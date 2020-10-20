<!-- Id Cliente Field -->
<div class="form-group">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    <p>{{ $tblContactosClientes->id_cliente }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $tblContactosClientes->nombre }}</p>
</div>

<!-- Puesto Field -->
<div class="form-group">
    {!! Form::label('puesto', 'Puesto:') !!}
    <p>{{ $tblContactosClientes->puesto }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $tblContactosClientes->telefono }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $tblContactosClientes->correo }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $tblContactosClientes->comentarios }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblContactosClientes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblContactosClientes->updated_at }}</p>
</div>

