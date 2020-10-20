@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Contactos Clientes
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tblContactosClientes.store']) !!}

                        @include('tbl_contactos_clientes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
