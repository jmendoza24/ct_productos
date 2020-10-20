<!-- Id Categoria Field -->
<div class="form-group">
    {!! Form::label('id_categoria', 'Id Categoria:') !!}
    <p>{{ $tblSubcategorias->id_categoria }}</p>
</div>

<!-- Sub Categoria Field -->
<div class="form-group">
    {!! Form::label('sub_categoria', 'Sub Categoria:') !!}
    <p>{{ $tblSubcategorias->sub_categoria }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tblSubcategorias->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tblSubcategorias->updated_at }}</p>
</div>

