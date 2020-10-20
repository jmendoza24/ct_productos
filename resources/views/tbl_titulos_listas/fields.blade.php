<!-- Titulo1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo1', 'Titulo1:') !!}
    {!! Form::text('titulo1', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo2', 'Titulo2:') !!}
    {!! Form::text('titulo2', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo3', 'Titulo3:') !!}
    {!! Form::text('titulo3', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo4', 'Titulo4:') !!}
    {!! Form::text('titulo4', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo5', 'Titulo5:') !!}
    {!! Form::text('titulo5', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblTitulosListas.index') }}" class="btn btn-default">Cancel</a>
</div>
