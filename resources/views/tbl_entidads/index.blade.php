@extends('layouts.master')
@section('content')
<div id="base"> 
    <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
        <div class="row">   
            <div class="col-md-12 "><br>
              
              <h4><strong class="texto_verde">Información de la entidad</strong></h4>
            </div>
            <br><br><br>
                  @include('tbl_entidads.fields')
         </div>   
     </div>
    </div>  
    
</div>
@endsection

