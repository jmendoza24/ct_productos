@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Entregas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblEntregas, ['route' => ['tblEntregas.update', $tblEntregas->id], 'method' => 'patch']) !!}

                        @include('tbl_entregas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection