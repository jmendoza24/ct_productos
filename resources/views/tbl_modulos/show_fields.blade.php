<!-- Modulo Field -->
<div class="form-group">
    {!! Form::label('modulo', 'Modulo:') !!}
    <p>{{ $tblModulos->modulo }}</p>
</div>

<!-- Activo Field -->
<div class="form-group">
    {!! Form::label('activo', 'Activo:') !!}
    <p>{{ $tblModulos->activo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblModulos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblModulos->updated_at }}</p>
</div>

