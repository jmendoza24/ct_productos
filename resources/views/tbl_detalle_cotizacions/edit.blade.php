@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Detalle Cotizacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblDetalleCotizacion, ['route' => ['tblDetalleCotizacions.update', $tblDetalleCotizacion->id], 'method' => 'patch']) !!}

                        @include('tbl_detalle_cotizacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection