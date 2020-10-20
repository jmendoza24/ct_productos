@extends('layouts.master')
@section('content')
@if (Session::has('success'))

    <div class="alert alert-success alert-dismissible btn_verde">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>{{ Session::get('success') }}</strong> 
    </div>
    
@endif
<div id="base">
<body onload="habilita_tipo2({{ $num_cot }})"></body>	
 <div class="col-md-12"><h4><strong class="texto_azul"> Cotización Cot. {{ $num_cot }}</strong></h4></div>

<ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
  <li class="nav-item">
    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32"
    aria-expanded="true"><b class="texto_azul"><h4><i class="material-icons texto_verde">looks_one</i> C</b><b class="texto_azul" style="text-transform: lowercase;">liente</h4></b></a>
  </li>
     <li class="nav-item">
        <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="#linkOpt2" aria-controls="linkOpt2"><h4><b class="texto_azul" style="text-transform: capitalize;"><i class="material-icons texto_verde">looks_two</i> Productos</h4></b></a>
     </li>
     <li class="nav-item">
        <a class="nav-link" id="linkOpt-tab3" data-toggle="tab" href="#linkOpt3" aria-controls="linkOpt3"><b class="texto_azul"><h4><i class="material-icons texto_verde">looks_3</i> C</b><b class="texto_azul" style="text-transform: lowercase;">otización</h4></b></a>
    </li>
    
</ul>
<div class="tab-content px-1 pt-1">
  <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
     <br>
          
        
     <div class="row"> 
         
      <div class="col-md-6">
          <div class="form-group row">
                <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Tipo cliente: <span class="red">*</span></strong></label>
                <div class="col-md-12">
                  <select class="form-control" id="id_tipo_cliente" name="id_tipo_cliente" onchange="habilita_tipo(),guarda_cotizacion({{ $num_cot }})" >
                      <option value="0"  {{ ($actual->id_tipo_cliente==0) ? 'selected' : '' }}>Nuevo Cliente</option>
                      <option value="1"  {{ ($actual->id_tipo_cliente==1) ? 'selected' : '' }}>Cliente Registrado</option>

                    </select>
                  </div>
                </div>
              </div>
               
                  <div class="col-md-6" id="nuevo">
                      <div class="form-group row" >
                          <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Cliente: <span class="red">*</span></strong></label>
                          <div class="col-md-12">
                              <input type="text" name="cliente" id="cliente" class=" form-control"  value="{{ $actual->cliente }}" onchange="guarda_cotizacion({{ $num_cot }})">
                          </div>
                        </div>
                  </div>
                  <div class="col-md-6" id="viejo" style="display: none">
                    <div class="form-group row" >
                          <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Cliente: <span class="red">*</span></strong></label>
                          <div class="col-md-12">
                             <select class="form-control" id="id_cliente" name="id_cliente"   onchange="bs_contactos({{ $num_cot }}),guarda_cotizacion({{ $num_cot }})">
                                <option value="0">Selecciona una opción</option>
                                		   @foreach($clientes as $clientes)
                                              <option  value="{{ $clientes->id }}" 
                                                {{ old('id_cliente', $actual->id_cliente) == $clientes->id ? 'selected' : '' }}
                                                >{{ $clientes->nombre }}</option>
                                           @endforeach
                             </select>
                          </div>
                        </div>
                  </div>

                  <div class="col-md-6" id="cnuevo">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Contacto: <span class="red">*</span></strong></label>
                            <div class="col-md-12">
                              
                              <input type="text" name="contacto" id="contacto"  class=" form-control" value="{{ $actual->contacto }}" onchange="guarda_cotizacion({{ $num_cot }})">
                            </div>
                          </div>
                  </div>
                  
                  <div class="col-md-6" id="cviejo" style="display: none">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Contacto: <span class="red">*</span></strong></label>
                            <div class="col-md-12">

                                <select class="form-control" id="id_contacto" name="id_contacto"   onchange="info_con({{ $num_cot }}),guarda_cotizacion({{ $num_cot }})">
                                 <option value="0">Selecciona una opción</option> 
                                 
                              </select>
                            </div>
                          </div>
                  </div>

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Teléfono:</strong></label>
                            <div class="col-md-12">
                                   <input type="text" name="telefono" id="telefono"  class="form-control international-inputmask"  value="{{ $actual->telefono }}" onchange="guarda_cotizacion({{ $num_cot }})">
                             </div>
                          </div>
                  </div>
                  
                  <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Correo: <span class="red">*</span></strong></label>
                            <div class="col-md-12">
                                   <input type="text" name="correo" id="correo"  class=" form-control email-inputmask" value="{{ $actual->correo }}"  onchange="guarda_cotizacion({{ $num_cot }})">
                            </div>
                          </div>
                  </div>
                  <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Descuento autorizado:</strong></label>
                            <div class="col-md-12">
                            	   @if(empty($actual->descuento))
                                   <input type="text" name="descuento" id="descuento" class="form-control percentage-mask"  value="00.00" onchange="guarda_cotizacion({{ $num_cot }})">
                                   @else
                                       <input type="text" name="descuento" id="descuento" class="form-control percentage-mask"  value="{{ $actual->descuento }}" onchange="guarda_cotizacion({{ $num_cot }})">
                                   @endif
                             </div>
                          </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Nombre de cotización:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                          <input type="text" name="nombre" id="nombre" class="form-control" onchange="guarda_cotizacion({{ $num_cot }})" value="{{ $actual->nombre }}">
                        </div>
                      </div>
                </div>
                  <div class="col-md-6" id="listan" >
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Tipo de lista autorizada: <span class="red">*</span></strong></label>
                            <div class="col-md-12">

                                <select class="form-control" id="lista" name="lista"   onchange="lista({{ $num_cot }})">
                                 <option value="1" {{ ($actual->lista==1) ? 'selected' : '' }} >{{ $tbl_titulos_listas->titulo1 }}</option> 
                                 <option value="2" {{ ($actual->lista==2) ? 'selected' : '' }} >{{ $tbl_titulos_listas->titulo2 }}</option> 
                                 <option value="3" {{ ($actual->lista==3) ? 'selected' : '' }} >{{ $tbl_titulos_listas->titulo3 }}</option> 
                                 <option value="4" {{ ($actual->lista==4) ? 'selected' : '' }} >{{ $tbl_titulos_listas->titulo4 }}</option> 
                                 <option value="5" {{ ($actual->lista==5) ? 'selected' : '' }} >{{ $tbl_titulos_listas->titulo5 }}</option> 
                                
                              </select>
                            </div>
                          </div>
                  </div>
                  <div class="col-md-6" id="listar" style="display: none">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Tipo de lista autorizada:</strong></label>
                            <div class="col-md-12">
                                   <input type="text" name="x" id="x" class="form-control" disabled="disabled">
                            </div>
                          </div>
                  </div>
                 

        
                 <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Condiciones de cotización:</strong></label>
                            <div class="col-md-12">
                            	  @if(empty($actual->condiciones))
                            	     <textarea style="height: 120px" id="condiciones" name="condiciones" class="form-control"   onchange="guarda_cotizacion({{ $num_cot }})">{{ $empresa->condiciones }}</textarea>
                            	  @else
                                    <textarea style="height: 120px" id="condiciones" name="condiciones" class="form-control"   onchange="guarda_cotizacion({{ $num_cot }})">{{ $actual->condiciones }}</textarea>
                                @endif
                             </div>
                          </div>
                  </div>
                   <div class="col-md-12">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Comentarios adicionales: </strong></label>
                            <div class="col-md-12">
                                    <textarea style="height: 120px" id="comentarios" name="comentarios"  class="form-control" onchange="guarda_cotizacion({{ $num_cot }})">{{ $actual->comentarios }}</textarea>
                             </div>
                          </div>
                  </div>
                  
         <div class="col-md-6" id="" style="">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"></label>
                            <div class="col-md-12">

                            </div>
                          </div>
                  </div>
                  <div class="col-md-6" id="" style="">
                        <div class="form-group row">
                            <label class="col-md-6 label-control" for="userinput1"><strong class="texto_gris">Tipo de cambio registrado: <span class="red">*</span></strong></label>
                            <div class="col-md-12">

                                <select class="form-control" id="tipo_cambio" name="tipo_cambio"   onchange="guarda_cotizacion_tc({{ $num_cot }})">
                                  @if($actual->tipo_cambio==$empresa->tipo_cambio)
                                    <option value="{{ $actual->tipo_cambio }}">{{ $actual->tipo_cambio }}</option>
                                  @else
                                    <option value="{{ $actual->tipo_cambio }}">{{ $actual->tipo_cambio }}</option>
                                    <option value="{{ $empresa->tipo_cambio }}">{{ $empresa->tipo_cambio }}</option> 
                                 @endif

                              </select>
                            </div>
                          </div>
                  </div>


                </div>

   </div>
    <br>
    <div class="tab-pane" id="linkOpt2" role="tabpanel" aria-labelledby="linkOpt-tab2" aria-expanded="false">
      <div class="row">   
              <div class="col-md-12 "><br>
                 <h1 class="pull-right">
                </h1>
              </div>
        <br>  
        <div id="div_productos_cotizados" style="overflow: auto;width: 100%">
        	  @include('tbl_productos.table_cotizados')
        </div>
     </div>
    </div>
    <div class="tab-pane" id="linkOpt3" role="tabpanel" aria-labelledby="linkOpt-tab3" aria-expanded="false">
        <div class="row">   
              <div class="col-md-12 "><br>

              <h1 class="">
                     <a class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px"  href="{{ route('envia.cotiza',['id_cotizacion'=>$num_cot])}}"> <span class="material-icons md-18">send</span> Enviar</a>
                     <a class="btn btn_gris pull-right" style="margin-top: -10px;margin-bottom: 5px"  onclick="guarda()" href="#"> <span class="material-icons md-18">save</span> Guardar</a>
                     <a class="btn btn_gris pull-right" style="margin-top: -10px;margin-bottom: 5px"  href="{{ route('download.cotiza',['id_cotizacion'=>$num_cot])}}"> <span class="material-icons md-18">cloud_download</span> PDF.</a>
                     <a class="btn btn_gris pull-right" style="margin-top: -10px;margin-bottom: 5px"  onclick="baja_cotiza_xls({{ $num_cot }})" href="#"> <span class="material-icons md-18">cloud_download</span> XLS.</a>
              </h1>
              </div>
              
            <div id="div_cotizacion" style="overflow: auto;width: 100%">
                    @include('tbl_cotizaciones.table_cotizacion')

            </div>
         </div>
      </div>
        
     </div>     

</div>
@endsection

