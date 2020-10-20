<!-- Id Servicio Field -->
<div class="form-group">
    {!! Form::label('id_servicio', 'Id Servicio:') !!}
    <p>{{ $tblSubservicios->id_servicio }}</p>
</div>

<!-- Subservicio Field -->
<div class="form-group">
    {!! Form::label('subservicio', 'Subservicio:') !!}
    <p>{{ $tblSubservicios->subservicio }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblSubservicios->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblSubservicios->updated_at }}</p>
</div>

