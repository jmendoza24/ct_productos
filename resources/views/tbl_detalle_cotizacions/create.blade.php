@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Detalle Cotizacion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tblDetalleCotizacions.store']) !!}

                        @include('tbl_detalle_cotizacions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
