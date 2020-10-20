@extends('layouts.master')
@section('content')<br><br>
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('tblVendedores.index') }}" onclick="base_propio()" > <i class="fa fa-undo"></i> Regresar</a>
<br>
<div id="base">
<div class="col-md-12"><h4><strong class="texto_azul">Vendedores</strong></h4></div> 
<br>

@php($editar = 1)
{!! Form::model($tblVendedores, ['route' => ['tblVendedores.update', $tblVendedores->id], 'method' => 'patch']) !!}

    @include('tbl_vendedores.fields')

{!! Form::close() !!}
</div>
@endsection