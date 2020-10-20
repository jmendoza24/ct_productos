
@extends('layouts.master')
@section('content')
   
<div id="base">
 <div class="col-md-12"><h4><strong class="texto_azul">Alta de servicios para direcciones</strong></h4></div>

  <div id="accordion" role="tablist">
        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Registro civil
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
            <div class="card-body">
                <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="servicio(0,0,1)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                  </h1>
                  <div id="div_registro_civil" style="overflow: auto;width: 100%">
                    @include('tbl_formatos.table')
                </div>
            </div>
          </div>
        </div>


        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne9000">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne9000" aria-expanded="false" aria-controls="collapseOne9000" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Agua potable y alcantarillado
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne9000" class="collapse" role="tabpanel" aria-labelledby="headingOne9000" data-parent="#accordion" style="">
            <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                  </h1>
                  <div id="div_fabricantes" style="overflow: auto;width: 100%">
                </div>
            </div>
          </div>
        </div>

        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne90">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne90" aria-expanded="false" aria-controls="collapseOne90" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Secretaria general
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne90" class="collapse" role="tabpanel" aria-labelledby="headingOne90" data-parent="#accordion" style="">
            <div class="card-body">
                   <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                  </h1>
                  <div id="div_categorias" style="overflow: auto;width: 100%">
                </div>
            </div>
          </div>
        </div>
      
        <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne1">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Desarrollo social
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
                  </div>
              </div>
            </div>
          </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as" aria-expanded="false" aria-controls="collapseOne2as" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Obras públicas
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                   </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>


          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Comercio
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne3" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>


          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne4">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Eco. Gest. Amb.
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne4" class="collapse" role="tabpanel" aria-labelledby="headingOne4" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>



          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as3">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as3" aria-expanded="false" aria-controls="collapseOne2as3" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Seg. Pub. Trans.
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as3" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as31">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as31" aria-expanded="false" aria-controls="collapseOne2as31" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Protección civil
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as31" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as3c">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as3c" aria-expanded="false" aria-controls="collapseOne2as3c" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">servicios municipales
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as3c" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as3l">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as3l" aria-expanded="false" aria-controls="collapseOne2as3l" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Catastro
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as3l" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as3x">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as3x" aria-expanded="false" aria-controls="collapseOne2as3x" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Rastro municipal
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as3x" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>

           <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as3xx">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as3xx" aria-expanded="false" aria-controls="collapseOne2as3xx" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Alcoholes
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as3xx" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>
          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as3xx1">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as3xx1" aria-expanded="false" aria-controls="collapseOne2as3xx1" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Transportes
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as3xx1" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Servicio</a>
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                  </div>
              </div>
            </div>
          </div>
     </div>
</div>
@endsection










