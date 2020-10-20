@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Tipo Precio Vendedor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblTipoPrecioVendedor, ['route' => ['tblTipoPrecioVendedors.update', $tblTipoPrecioVendedor->id], 'method' => 'patch']) !!}

                        @include('tbl_tipo_precio_vendedors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection