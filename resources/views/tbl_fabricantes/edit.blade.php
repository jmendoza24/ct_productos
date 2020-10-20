@extends('layouts.master')
@section('content')<br><br>
<a class="btn btn_verde pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('tblFabricantes.index') }}"  > <i class="fa fa-undo"></i>  Regresar</a>
<br>
<div id="base">
<div class="col-md-12"><h4><strong class="texto_verde">Fabricantes</strong></h4></div> 
<br>
<input type="hidden" name="idf" id="idf" value="{{ $idf }}">
@php($editar = 1) 

     {!! Form::model($tblFabricantes, ['route' => ['tblFabricantes.update', $tblFabricantes->id], 'method' => 'patch']) !!}

          @include('tbl_fabricantes.fields')

     {!! Form::close() !!}
</div>
@endsection




