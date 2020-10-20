@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Cotizaciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblCotizaciones, ['route' => ['tblCotizaciones.update', $tblCotizaciones->id], 'method' => 'patch']) !!}

                        @include('tbl_cotizaciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection