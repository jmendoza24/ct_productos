@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Empresa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblEmpresa, ['route' => ['tblEmpresas.update', $tblEmpresa->id], 'method' => 'patch']) !!}

                        @include('tbl_empresas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection