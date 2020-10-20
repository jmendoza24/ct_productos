<!-- Id Modulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_modulo', 'Id Modulo:') !!}
    {!! Form::number('id_modulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Articulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('articulo', 'Articulo:') !!}
    {!! Form::text('articulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Contenido Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('contenido', 'Contenido:') !!}
    {!! Form::textarea('contenido', null, ['class' => 'form-control']) !!}
</div>

<!-- Fragmento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fragmento', 'Fragmento:') !!}
    {!! Form::text('fragmento', null, ['class' => 'form-control']) !!}
</div>

<!-- Monto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monto', 'Monto:') !!}
    {!! Form::text('monto', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Moneda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_moneda', 'Id Moneda:') !!}
    {!! Form::number('id_moneda', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', 'Activo:') !!}
    {!! Form::number('activo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblArticulos.index') }}" class="btn btn-default">Cancel</a>
</div>
