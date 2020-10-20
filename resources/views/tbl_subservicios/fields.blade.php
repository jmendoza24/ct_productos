<!-- Id Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_servicio', 'Id Servicio:') !!}
    {!! Form::number('id_servicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Subservicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subservicio', 'Subservicio:') !!}
    {!! Form::text('subservicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblSubservicios.index') }}" class="btn btn-default">Cancel</a>
</div>
