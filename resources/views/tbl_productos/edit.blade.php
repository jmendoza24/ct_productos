@extends('layouts.master')
@section('content')<br><br>
<a class="btn btn_verde pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('tblProductos.index') }}"  > <i class="fa fa-undo"></i>  Regresar</a>
<br>
<div id="base">
<div class="col-md-12"><h4><strong class="texto_verde">Productos</strong></h4></div> 
<br>
<input type="hidden" name="idcp" id="idp" value="{{ $idp }}">
@php($editar = 1) 
   

            @include('tbl_productos.fields')

</div>
@endsection




