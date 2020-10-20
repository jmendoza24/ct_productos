@extends('layouts.master')
@section('titulo') @endsection
@section('content')
<div id="base"> 
<div class="col-md-12"><h4><strong class="texto_azul">EDITAR USUARIO</strong></h4></div> 
<br>
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#" onclick="base_usuarios()"> <i class="fa fa-undo"></i> Regresar</a><br><br>

@php($editar = 1)
 {!! Form::model($usuarios_e, ['route' => ['usuarios.update', $usuarios_e->id], 'method' => 'patch','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
      @include('usuarios.fields')
 {!! Form::close() !!}
</div>
@endsection