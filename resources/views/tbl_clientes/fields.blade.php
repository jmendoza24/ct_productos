@if($tipo==0)
          <div class="row">
            <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo persona:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="tipo_persona" name="tipo_persona" required="required" onchange="personas()">
                                        <option value="0">Persona fisica</option>
                                        <option value="1">Persona moral</option>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo cliente:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_tipo_cliente" name="id_tipo_cliente" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($tipo_clientes as $tipo)
                                        <option  value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                                        @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('nombre', null, ['id'=>'nombre','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">RFC:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('rfc', null, ['id'=>'rfc','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6" id="pues">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Puesto:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('puesto', null, ['id'=>'puesto','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6" style="display: none;" id="rz">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Razón social:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('razon', null, ['id'=>'razon','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6" id="corre">
                    <div class="form-group row">
                      <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:<span class="red">*</span></strong></label>
                      <div class="col-md-12">
                           
                                 {!! Form::text('correo', null, ['id'=>'correo','class' => 'form-control email-inputmask']) !!}

                      </div>
                    </div>
              </div>
                <div class="col-md-6" style="display: none;" id="sweb">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Sitio web:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('web', null, ['id'=>'web','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono 1:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('telefono', null, ['id'=>'telefono','class' => 'form-control international-inputmask']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono 2:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('telefono2', null, ['id'=>'telefono2','class' => 'form-control international-inputmask']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Dirección</strong></h3><br>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Calle y número:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('calle', null, ['id'=>'calle','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Colonia:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('colonia', null, ['id'=>'colonia','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
            
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Estado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_estado" name="id_estado" required="required" onchange="bs_municipio()">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($sql_estados as $estado)
                                        <option  value="{{ $estado->id }}">{{ $estado->estado }}</option>
                                        @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Municipio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_municipio" name="id_municipio" required="required">
                                        <option value="0">Selecciona una opción</option>

                                  </select>
                        </div>
                      </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">CP:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('cp', null, ['id'=>'cp','class' => 'form-control decimal-inputmask']) !!}
                        </div>
                      </div>
              </div>

              
              <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Precios</strong></h3><br>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Vendedor asignado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_vendedor" name="id_vendedor" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($vendedores as $vendedores)
                                        <option  value="{{ $vendedores->id }}">{{ $vendedores->nombre }}</option>
                                        @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Lista de precio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_tipo_precio" name="id_tipo_precio" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <option value="1">{{ $tbl_titulos_listas->titulo1 }}</option>  
                                        <option value="2">{{ $tbl_titulos_listas->titulo2 }}</option>
                                        <option value="3">{{ $tbl_titulos_listas->titulo3 }}</option> 
                                        <option value="4">{{ $tbl_titulos_listas->titulo4 }}</option> 
                                        <option value="5">{{ $tbl_titulos_listas->titulo5 }}</option> 
                                  </select>
                        </div>
                      </div>
              </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descuento autorizado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="descuento" id="descuento" class="form-control percentage-mask"  value="00.00">
                        </div>
                      </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                      <div class="col-md-12">
                           {!! Form::textarea('comentarios', null, ['id'=>'comentarios','class' => 'form-control']) !!}

                      </div>
                    </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_cliente(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else

<body onload="personas()"></body>
<ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
  <li class="nav-item">
    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32"
    aria-expanded="true"><b class="texto_azul">I</b><b class="texto_azul" style="text-transform: lowercase;">nformación de cliente</b></a>
  </li>
     <li class="nav-item">
        <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="#linkOpt2" aria-controls="linkOpt2"><b class="texto_azul" style="text-transform: capitalize;">Contactos</b></a>
     </li>
     <li class="nav-item">
        <a class="nav-link" id="linkOpt-tab3" data-toggle="tab" href="#linkOpt3" aria-controls="linkOpt3"><b class="texto_azul">D</b><b class="texto_azul" style="text-transform: lowercase;">ireción de envio</b></a>
    </li>
</ul>
<div class="tab-content px-1 pt-1">
  <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
     <br>
          
        <div class="row">
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo persona:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="tipo_persona" name="tipo_persona" required="required" onchange="personas()">
                                        <option value="0" {{ ($tblClientes->tipo_persona==0) ? 'selected' : '' }}>Persona fisica</option>
                                        <option value="1" {{ ($tblClientes->tipo_persona==1) ? 'selected' : '' }}>Persona moral</option>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo cliente:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_tipo_cliente" name="id_tipo_cliente" onchange="captura_cliente(1,{{ $tblClientes->id }})" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($tipo_clientes as $tipo)
                                        <option  value="{{ $tipo->id }}"
                                       {{ old('id_tipo_cliente', $tblClientes->id_tipo_cliente) == $tipo->id ? 'selected' : '' }} >{{ $tipo->tipo }}</option>
                                        @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="nombre" id="nombre" class="form-control" onchange="captura_cliente(1,{{ $tblClientes->id }})" value="{{ $tblClientes->nombre }}">
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">RFC:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="rfc" id="rfc" class="form-control " onchange="captura_cliente(1,{{ $tblClientes->id }})" value="{{ $tblClientes->rfc }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6" id="pues">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Puesto:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="puesto" id="puesto" class="form-control" onchange="captura_cliente(1,{{ $tblClientes->id }})" value="{{ $tblClientes->puesto }}">
                        </div>
                      </div>
              </div>
               <div class="col-md-6" style="display: none;" id="rz">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Razón social:</strong></label>
                        <div class="col-md-12">
                                <input type="text" name="razon" id="razon" class="form-control" onchange="captura_cliente(1,{{ $tblClientes->id }})" value="{{ $tblClientes->razon }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6" id="corre">
                    <div class="form-group row">
                      <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:<span class="red">*</span></strong></label>
                      <div class="col-md-12">
                            <input type="text" name="correo" id="correo" onchange="captura_cliente(1,{{ $tblClientes->id }})" class="form-control email-inputmask" value="{{ $tblClientes->correo }}">
                      </div>
                    </div>
              </div>
               <div class="col-md-6" style="display: none;" id="sweb">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Sitio web:</strong></label>
                        <div class="col-md-12">
                           <input type="text" name="web" id="web" onchange="captura_cliente(1,{{ $tblClientes->id }})" class="form-control" value="{{ $tblClientes->web }}">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono 1:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="telefono" id="telefono" onchange="captura_cliente(1,{{ $tblClientes->id }})" class="form-control international-inputmask" value="{{ $tblClientes->telefono }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono 2:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="telefono2" id="telefono2" onchange="captura_cliente(1,{{ $tblClientes->id }})" class="form-control international-inputmask" value="{{ $tblClientes->telefono2 }}">
                        </div>
                      </div>
              </div>

               <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Dirección</strong></h3><br>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Calle y número:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="calle" id="calle" class="form-control" onchange="captura_cliente(1,{{ $tblClientes->id }})" value="{{ $tblClientes->calle }}">
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Colonia:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="colonia" id="colonia" class="form-control" onchange="captura_cliente(1,{{ $tblClientes->id }})" value="{{ $tblClientes->colonia }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Estado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                             <select class="form-control select2" style="width: 100%" id="id_estado" name="id_estado" required="required" onchange="bs_municipio(),captura_cliente(1,{{ $tblClientes->id }})">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($sql_estados as $estado)
                                        <option  value="{{ $estado->id }}"
                                           {{ old('id_estado', $tblClientes->id_estado) == $estado->id ? 'selected' : '' }} >{{ $estado->estado }}</option>
                                        @endforeach   
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Municipio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                             <select class="form-control select2" style="width: 100%" id="id_municipio" onchange="captura_cliente(1,{{ $tblClientes->id }})" name="id_municipio" required="required">
                                @if(!empty($tblClientes))
                                    @foreach($municipios as $idmun)
                                      <option value="{{ $idmun->id }}" 
                                           {{ old('id_municipio', $tblClientes->id_municipio) == $idmun->id ? 'selected' : '' }}
                                       >{{ $idmun->municipio }}</option>
                                    @endforeach
                                 @endif
                             </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Cp:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="cp" id="cp" class="form-control decimal-inputmask" onchange="captura_cliente(1,{{ $tblClientes->id }})" value="{{ $tblClientes->cp }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Precios</strong></h3><br>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Vendedor asignado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_vendedor" onchange="captura_cliente(1,{{ $tblClientes->id }})" name="id_vendedor" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($vendedores as $vendedores)
                                        <option  value="{{ $vendedores->id }}"
                                        {{ old('id_vendedor', $tblClientes->id_vendedor) == $vendedores->id ? 'selected' : '' }} >{{ $vendedores->nombre }}</option>

                                        @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
      
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Lista de precio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_tipo_precio" onchange="captura_cliente(1,{{ $tblClientes->id }})" name="id_tipo_precio" required="required">
                                        <option value="1" {{ ($tblClientes->id_tipo_precio==1) ? 'selected' : '' }} >{{ $tbl_titulos_listas->titulo1 }}</option>  
                                        <option value="2" {{ ($tblClientes->id_tipo_precio==2) ? 'selected' : '' }}>{{ $tbl_titulos_listas->titulo2 }}</option>
                                        <option value="3" {{ ($tblClientes->id_tipo_precio==3) ? 'selected' : '' }}>{{ $tbl_titulos_listas->titulo3 }}</option> 
                                        <option value="4" {{ ($tblClientes->id_tipo_precio==4) ? 'selected' : '' }}>{{ $tbl_titulos_listas->titulo4 }}</option> 
                                        <option value="5" {{ ($tblClientes->id_tipo_precio==5) ? 'selected' : '' }}>{{ $tbl_titulos_listas->titulo5 }}</option>   
                                  </select>
                        </div>
                      </div>
              </div>
              
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descuento autorizado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="descuento" id="descuento" class="form-control percentage-mask"  value="{{ $tblClientes->descuento }}" onchange="captura_cliente(1,{{ $tblClientes->id }})">
                        </div>
                      </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                      <div class="col-md-12">
                            <input type="hidden" name="idc" id="idc" value="{{ $tblClientes->id  }}">
                            <textarea class="form-control" id="comentarios" onchange="captura_cliente(1,{{ $tblClientes->id }})" name="comentarios">{{ $tblClientes->comentarios }}</textarea>
                      </div>
                    </div>
              </div>
        </div><br>

   </div>
    <br>
    <div class="tab-pane" id="linkOpt2" role="tabpanel" aria-labelledby="linkOpt-tab2" aria-expanded="false">
      <div class="row">   
              <div class="col-md-12 "><br>
                 <h1 class="pull-right">
                     <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="contactos_clientes(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Contacto</a>
                </h1>
              </div>
        <br>  
        <div id="div_contactos" style="overflow: auto;width: 100%">
              @include('tbl_contactos_clientes.table')
        </div>
     </div>
    </div>
    <div class="tab-pane" id="linkOpt3" role="tabpanel" aria-labelledby="linkOpt-tab3" aria-expanded="false">
        <div class="row">   
              <div class="col-md-12 "><br>
                 <h1 class="pull-right">
                     <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="direccion_cliente(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Dirección</a>
              </h1>
              </div>
            <br>  
            <div id="div_direcciones" style="overflow: auto;width: 100%">
              @include('tbl_entregas.table')
            </div>
         </div>
      </div>
     </div>     

@endif
