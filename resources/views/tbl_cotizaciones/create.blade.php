@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Cotizaciones
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tblCotizaciones.store']) !!}

                        @include('tbl_cotizaciones.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
