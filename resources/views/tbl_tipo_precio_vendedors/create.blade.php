@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Tipo Precio Vendedor
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tblTipoPrecioVendedors.store']) !!}

                        @include('tbl_tipo_precio_vendedors.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
