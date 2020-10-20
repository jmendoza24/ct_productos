@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Modulos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblModulos, ['route' => ['tblModulos.update', $tblModulos->id], 'method' => 'patch']) !!}

                        @include('tbl_modulos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection