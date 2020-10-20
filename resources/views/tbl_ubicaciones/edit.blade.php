@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Ubicaciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblUbicaciones, ['route' => ['tblUbicaciones.update', $tblUbicaciones->id], 'method' => 'patch']) !!}

                        @include('tbl_ubicaciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection