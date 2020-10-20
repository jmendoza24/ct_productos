@extends('layouts.master')
@section('content')
<div id="base"> 
    <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
        <div class="row">   
            <div class="col-md-12 "><br>
               <h1 class="pull-right">
              </h1>
              <h4><strong class="texto_verde">Carga masiva</strong></h4><br>
            </div>
            <br>  
            <div id="div_masivos" style="overflow: auto;width: 100%;height: 300px">

              <form method="post" action="{{ route('subidas') }}" class="form-horizontal" enctype='multipart/form-data'>
                 {!! csrf_field() !!}

                <div class="row">
                    <div class=" col-sm-4">
                        <select class="form-control select2"  id="formatos" style="width: 100%" name="formatos" required="required" onchange="baja_formatos()">
                            <option value="0">Selecciona una opción</option>
                            <option value="1">Lista de precios</option>
                            <option value="2">Productos</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class=" col-sm-4">
                        <input type="file" onchange="validarFile_csv(this)"  accept="application/csv" class="form-control" id="archivo" name="archivo" required="">
                    </div>
                </div>
                <div class="row">    
                    <div class="form-group col-sm-10">
                         <button title="Bajar Formato CSV" type="button"  id="descargas" class="btn btn_azul pull-right"><i class="fa  fa-download"></i> Bajar Formato CSV </button>
                    </div>
                    
                    <div class="form-group col-sm-2">
                         <button title="Subir CSV" type="submit"  class="btn btn_gris pull-right"><i class="fa fa-upload"></i> Subir CSV </button>
                    </div>
                </div>
                </form>
            </div>
         </div>   
     </div>
    </div>  
</div>
@endsection



