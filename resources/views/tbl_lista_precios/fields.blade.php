<!-- Id Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_producto', 'Id Producto:') !!}
    {!! Form::number('id_producto', null, ['class' => 'form-control']) !!}
</div>

<!-- Lista1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lista1', 'Lista1:') !!}
    {!! Form::text('lista1', null, ['class' => 'form-control']) !!}
</div>

<!-- Lista2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lista2', 'Lista2:') !!}
    {!! Form::text('lista2', null, ['class' => 'form-control']) !!}
</div>

<!-- Lista3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lista3', 'Lista3:') !!}
    {!! Form::text('lista3', null, ['class' => 'form-control']) !!}
</div>

<!-- Lista5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lista5', 'Lista5:') !!}
    {!! Form::text('lista5', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblListaPrecios.index') }}" class="btn btn-default">Cancel</a>
</div>
