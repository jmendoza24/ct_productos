@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Tipo Cliente
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblTipoCliente, ['route' => ['tblTipoClientes.update', $tblTipoCliente->id], 'method' => 'patch']) !!}

                        @include('tbl_tipo_clientes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection