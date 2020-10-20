@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Subcategorias
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblSubcategorias, ['route' => ['tblSubcategorias.update', $tblSubcategorias->id], 'method' => 'patch']) !!}

                        @include('tbl_subcategorias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection