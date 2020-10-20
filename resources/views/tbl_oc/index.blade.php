@extends('layouts.master')
@section('content')
<div id="base"> 
    <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
        <div class="row">   
            <div class="col-md-12 "><br>
               <h1 class="pull-right">
                     <a class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px"  onclick="baja_reporte_xls()" href="#"> <span class="material-icons md-18">save_alt</span> Reporte OC</a>
                     <a class="btn btn_gris pull-right" style="margin-top: -10px;margin-bottom: 5px"  href="{{ route('tblCotizaciones.index') }}"> <span class="material-icons md-18">receipt_long</span> Cotizaciones</a>

              </h1>

              <h4><strong class="texto_verde">Ordenes de compra</strong></h4>
            </div>
            <br>  
            <div id="div_cotizaciones" style="overflow: auto;width: 100%">
                  @include('tbl_oc.oc_table')
            </div>
         </div>   
     </div>
    </div>  
</div>

@endsection



 