<!-- Tipo Vendedor Field -->
<div class="form-group">
    {!! Form::label('tipo_vendedor', 'Tipo Vendedor:') !!}
    <p>{{ $tblTipoVendedor->tipo_vendedor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblTipoVendedor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblTipoVendedor->updated_at }}</p>
</div>

