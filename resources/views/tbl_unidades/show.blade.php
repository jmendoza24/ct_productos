@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tbl Unidades
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tbl_unidades.show_fields')
                    <a href="{{ route('tblUnidades.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
