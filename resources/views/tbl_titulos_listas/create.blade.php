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
                    {!! Form::open(['route' => 'tblTitulosListas.store']) !!}

                        @include('tbl_titulos_listas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
