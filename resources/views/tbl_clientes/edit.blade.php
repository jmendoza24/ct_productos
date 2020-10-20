@extends('layouts.master')
@section('content')<br><br>
<a class="btn btn_verde pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('tblClientes.index') }}"  > <i class="fa fa-undo"></i>  Regresar</a>
<br>
<div id="base">
<div class="col-md-12"><h4><strong class="texto_verde">Clientes</strong></h4></div> 
<br>
<input type="hidden" name="idcc" id="idcc" value="{{ $idcc }}">
@php($editar = 1) 
   {!! Form::model($tblClientes, ['route' => ['tblClientes.update', $tblClientes->id], 'method' => 'patch']) !!}

        @include('tbl_clientes.fields')

   {!! Form::close() !!}
</div>
@endsection




