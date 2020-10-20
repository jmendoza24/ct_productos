@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Unidades
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblUnidades, ['route' => ['tblUnidades.update', $tblUnidades->id], 'method' => 'patch']) !!}

                        @include('tbl_unidades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection