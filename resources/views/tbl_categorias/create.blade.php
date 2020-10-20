@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Categorias
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tblCategorias.store']) !!}

                        @include('tbl_categorias.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
