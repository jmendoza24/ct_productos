@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Titulos Lista
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tblTitulosLista, ['route' => ['tblTitulosListas.update', $tblTitulosLista->id], 'method' => 'patch']) !!}

                        @include('tbl_titulos_listas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection