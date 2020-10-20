<!-- Id Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_direccion', 'Id Direccion:') !!}
    {!! Form::number('id_direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ubicacion', 'Ubicacion:') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_estado', 'Id Estado:') !!}
    {!! Form::number('id_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_municipio', 'Id Municipio:') !!}
    {!! Form::number('id_municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentarios Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    {!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblUbicaciones.index') }}" class="btn btn-default">Cancel</a>
</div>
