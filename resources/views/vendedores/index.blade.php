@extends('layouts.vendedor')
@section('titulo') @endsection
@section('content')

<div class="row" style="background: white;">
      <label class="mr-1 col-md-1" style="font-size: 14px;">Cadena:</label>
      <select class="form-control col-md-4 mr-1">
        <option value="">Seleccione...</option>
        <option value="1">Cadena 1</option>
        <option value="1">Cadena 2</option>
        <option value="1">Cadena 3</option>
        <option value="1">Cadena 4</option>
        <option value="1">Cadena 5</option>
      </select>
      <span class="btn btn-primary col-md-2">Buscar</span>
</div>
<section id="">
  <div class="row mt-2">
    @include('vendedores.table')
  </div>
</section>
@endsection








