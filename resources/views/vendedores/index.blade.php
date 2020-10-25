@extends('layouts.vendedor')
@section('titulo') @endsection
@section('content')
<div id="base"> 
<div class="col-md-12"><h4><strong class="texto_azul">Usuarios</strong></h4></div> 

         <ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
          <li class="nav-item">
            <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32"
            aria-expanded="true"> Usuarios </a>
          </li>
        </ul>
        <div class="tab-content px-1 pt-1">
            <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
                 <div class="row">   
                    <div class="col-md-12 "><br>
                       <h1 class="pull-right">
                            <a class="btn azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#registros" onclick="carga_us()" href="#"> <i class="fa fa-plus"></i> Usuario</a>
                      </h1>
                    </div>
                    <br>  
                    <div id="tabla_usuarios" style="overflow: auto;width: 100%">
                          
                    </div>
                 </div>   
             </div>
        </div> 

    <div class="modal fade text-left modal-full"  id="registros" tabindex="null" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content" id="contenidos">
        <div class="modal-header naranja">
          <h4 class="modal-title" id="myModalLabel17">Konstru.tech </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-content" style="overflow: auto;">
            <div class="modal-body" id="fields2">
            </div>
        </div>
          
      </div>
    </div>
  </div>
  </div>  

@endsection








