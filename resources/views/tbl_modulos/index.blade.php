@extends('layouts.master')
@section('content')
   
<div id="base">
 <div class="col-md-12"><h4><strong class="texto_azul">Catálogos</strong></h4></div>

  <div id="accordion" role="tablist">
        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Direcciones
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
            <div class="card-body">
               
                  <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                      @include('tbl_modulos.table')
                </div>
            </div>
          </div>
        </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Estados
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne3" data-parent="#accordion" style="">
              <div class="card-body">
                    
                    <div id="div_estados" style="overflow: auto;width: 100%">
                         @include('tbl_modulos.table_estados')

                  </div>
              </div>
            </div>
          </div>


          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne4">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Municipios
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne4" class="collapse" role="tabpanel" aria-labelledby="headingOne4" data-parent="#accordion" style="">
              <div class="card-body">
                    
                    <div id="div_municipios" style="overflow: auto;width: 100%">
                        @include('tbl_modulos.table_municipios')
                  </div>
              </div>
            </div>
          </div>



          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as3">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as3" aria-expanded="false" aria-controls="collapseOne2as3" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Ubicaciones
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as3" class="collapse" role="tabpanel" aria-labelledby="headingOne2as3" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Ubicacion</a>
                  </h1>
                    <div id="div_ubicaciones" style="overflow: auto;width: 100%">
                      @include('tbl_ubicaciones.table')
                  </div>
              </div>
            </div>
          </div>




      
        <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne1">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Unidades de medida
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion" style="">
              <div class="card-body">
                     <h1 class="pull-right">
                           <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="unidad(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Unidade de medida</a>
                    </h1>
                    <div id="div_unidades" style="overflow: auto;width: 100%">
                         @include('tbl_unidades.table')

                  </div>
              </div>
            </div>
          </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2asd">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2asd" aria-expanded="false" aria-controls="collapseOne2asd" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Estatus del sistema
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2asd" class="collapse" role="tabpanel" aria-labelledby="headingOne2asd" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                        @include('tbl_modulos.table_estatus')
                  </div>
              </div>
            </div>
          </div>
     </div>
</div>
@endsection






