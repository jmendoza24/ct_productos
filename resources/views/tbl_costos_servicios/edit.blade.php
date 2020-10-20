@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Costos Servicios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblCostosServicios, ['route' => ['tblCostosServicios.update', $tblCostosServicios->id], 'method' => 'patch']) !!}

                        @include('tbl_costos_servicios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection