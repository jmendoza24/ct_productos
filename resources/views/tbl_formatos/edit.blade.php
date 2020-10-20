@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Formatos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblFormatos, ['route' => ['tblFormatos.update', $tblFormatos->id], 'method' => 'patch']) !!}

                        @include('tbl_formatos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection