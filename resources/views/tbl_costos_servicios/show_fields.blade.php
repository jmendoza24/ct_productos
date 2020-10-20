<!-- Id Direccion Field -->
<div class="form-group">
    {!! Form::label('id_direccion', 'Id Direccion:') !!}
    <p>{{ $tblCostosServicios->id_direccion }}</p>
</div>

<!-- Id Servicio Field -->
<div class="form-group">
    {!! Form::label('id_servicio', 'Id Servicio:') !!}
    <p>{{ $tblCostosServicios->id_servicio }}</p>
</div>

<!-- Articulo Field -->
<div class="form-group">
    {!! Form::label('articulo', 'Articulo:') !!}
    <p>{{ $tblCostosServicios->articulo }}</p>
</div>

<!-- Fraccion Field -->
<div class="form-group">
    {!! Form::label('fraccion', 'Fraccion:') !!}
    <p>{{ $tblCostosServicios->fraccion }}</p>
</div>

<!-- Monto Field -->
<div class="form-group">
    {!! Form::label('monto', 'Monto:') !!}
    <p>{{ $tblCostosServicios->monto }}</p>
</div>

<!-- Moneda Field -->
<div class="form-group">
    {!! Form::label('moneda', 'Moneda:') !!}
    <p>{{ $tblCostosServicios->moneda }}</p>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{{ $tblCostosServicios->comentarios }}</p>
</div>

<!-- Periodicidad Field -->
<div class="form-group">
    {!! Form::label('periodicidad', 'Periodicidad:') !!}
    <p>{{ $tblCostosServicios->periodicidad }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblCostosServicios->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblCostosServicios->updated_at }}</p>
</div>

