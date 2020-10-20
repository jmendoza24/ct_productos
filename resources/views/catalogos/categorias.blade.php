@extends('layouts.master')
@section('content')
<div class="row">   
    <div class="col-md-12 "><br>
      <h4><strong class="texto_verde">Categorias</strong></h4>
    </div>
 </div>   
<div class="row" id="tabla_catalogos">
    @include('catalogos.tablas_cat')
</div>
@endsection


