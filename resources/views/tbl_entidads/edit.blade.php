@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Entidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblEntidad, ['route' => ['tblEntidads.update', $tblEntidad->id], 'method' => 'patch']) !!}

                        @include('tbl_entidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection