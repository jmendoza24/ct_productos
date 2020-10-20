@extends('layouts.master')
@section('content')
<div id="base"> 
    <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
        <div class="row">   
            <div class="col-md-12 "><br>
               <h1 class="pull-right">
                     <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="usuarios(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Usuario</a>
              </h1>
              <h4><strong class="texto_verde">Usuarios</strong></h4>
            </div>
            <br>  
            <div id="div_usuarios" style="overflow: auto;width: 100%">
                  @include('users.table')
            </div>
         </div>   
     </div>
    </div>  
</div>
@endsection

