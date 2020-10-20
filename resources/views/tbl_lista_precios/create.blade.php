@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Lista Precios
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tblListaPrecios.store']) !!}

                        @include('tbl_lista_precios.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
