@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Subservicios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblSubservicios, ['route' => ['tblSubservicios.update', $tblSubservicios->id], 'method' => 'patch']) !!}

                        @include('tbl_subservicios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection