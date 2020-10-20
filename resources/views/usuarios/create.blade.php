@extends('layouts.master')
@section('titulo')Nuevo Usuario 
@endsection
 
@section('content')
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('usuarios.index') !!}"> <i class="fa fa-undo"></i> Regresar</a>

@php($editar = 0)      
{!! Form::open(['route' => 'usuarios.store','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
    @include('usuarios.fields')
{!! Form::close() !!}
@endsection
