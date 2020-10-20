<!-- Modulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modulo', 'Modulo:') !!}
    {!! Form::text('modulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', 'Activo:') !!}
    {!! Form::number('activo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblModulos.index') }}" class="btn btn-default">Cancel</a>
</div>
