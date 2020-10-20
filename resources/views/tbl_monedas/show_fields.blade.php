<!-- Moneda Field -->
<div class="form-group">
    {!! Form::label('moneda', 'Moneda:') !!}
    <p>{{ $tblMonedas->moneda }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblMonedas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblMonedas->updated_at }}</p>
</div>

