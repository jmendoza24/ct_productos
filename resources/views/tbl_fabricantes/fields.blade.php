@if($tipo==0)
          <div class="row">
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Fabricante:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('nombre', null, ['id'=>'nombre','class' => 'form-control']) !!}
                                 <input type="hidden" name="idf" id="idf" value="0">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Razón social:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('razon', null, ['id'=>'razon','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Teléfono 1:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('tel1', null, ['id'=>'tel1','class' => 'form-control international-inputmask']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Teléfono 2:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('tel2', null, ['id'=>'tel2','class' => 'form-control international-inputmask']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">RFC:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('rfc', null, ['id'=>'rfc','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
             
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Sitio web:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('web', null, ['id'=>'web','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Dirección</strong></h3><br>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Calle y número:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('direccion', null, ['id'=>'direccion','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Colonia:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('colonia', null, ['id'=>'colonia','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
            
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Estado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                {!! Form::text('estado', null, ['id'=>'estado','class' => 'form-control']) !!}

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Municipio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                               {!! Form::text('municipio', null, ['id'=>'municipio','class' => 'form-control']) !!}

                        </div>
                      </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">CP:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('cp', null, ['id'=>'cp','class' => 'form-control decimal-inputmask']) !!}
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">País:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="pais" name="pais" required="required">
                                    <option value="0">Selecciona una opción</option>
                                    @foreach($pais_sql as $tipo)
                                    <option  value="{{ $tipo->id }}">{{ $tipo->Pais }}</option>
                                    @endforeach
                              </select>
                        </div>
                      </div>
              </div>


              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Condiciones:</strong></label>
                      <div class="col-md-12">
                           {!! Form::textarea('condiciones', null, ['id'=>'condiciones','class' => 'form-control']) !!}

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
            <button type="button" onclick="captura_fabricante(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else

<ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
  <li class="nav-item">
    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32"
    aria-expanded="true"><b class="texto_azul">I</b><b class="texto_azul" style="text-transform: lowercase;">nformación de fabricante</b></a>
  </li>
     <li class="nav-item">
        <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="#linkOpt2" aria-controls="linkOpt2"><b class="texto_azul" style="text-transform: capitalize;">Contactos</b></a>
     </li>
     
</ul>
<div class="tab-content px-1 pt-1">
  <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
     <br>
          
        <div class="row">
           
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Fabricante:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="nombre" id="nombre" class="form-control" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" value="{{ $tblFabricantes->nombre }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6" style="display: none;" id="rz">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Razón social:</strong></label>
                        <div class="col-md-12">
                                <input type="text" name="razon" id="razon" class="form-control" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" value="{{ $tblFabricantes->razon }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Teléfono 1:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="tel1" id="tel1" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" class="form-control international-inputmask" value="{{ $tblFabricantes->tel1 }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Teléfono 2:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="tel2" id="tel2" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" class="form-control international-inputmask" value="{{ $tblFabricantes->tel2 }}">
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">RFC:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="rfc" id="rfc" class="form-control " onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" value="{{ $tblFabricantes->rfc }}">
                        </div>
                      </div>
              </div>
               <div class="col-md-6" style="display: none;" id="sweb">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Sitio web:</strong></label>
                        <div class="col-md-12">
                           <input type="text" name="web" id="web" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" class="form-control" value="{{ $tblFabricantes->web }}">

                        </div>
                      </div>
              </div>
              
              <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Dirección</strong></h3><br>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Calle y número:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="direccion" id="direccion" class="form-control" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" value="{{ $tblFabricantes->direccion }}">
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Colonia:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="colonia" id="colonia" class="form-control" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" value="{{ $tblFabricantes->colonia }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Estado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="estado" id="estado" class="form-control" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" value="{{ $tblFabricantes->estado }}">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Municipio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="municipio" id="municipio" class="form-control" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" value="{{ $tblFabricantes->municipio }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">CP:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="cp" id="cp" class="form-control decimal-inputmask" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" value="{{ $tblFabricantes->cp }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">País:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="pais" name="pais" required="required">
                                    <option value="0">Selecciona una opción</option>
                                    @foreach($pais_sql as $tipo)
                                    <option  value="{{ $tipo->id }}" 
                                    {{ old('pais', $tblFabricantes->pais) == $tipo->id ? 'selected' : '' }} >{{ $tipo->Pais }}</option>
                                    @endforeach
                              </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Condiciones:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="condiciones" id="condiciones" class="form-control"  value="{{ $tblFabricantes->condiciones }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                      <div class="col-md-12">
                            <input type="hidden" name="idf" id="idf" value="{{ $tblFabricantes->id  }}">

                            <textarea class="form-control" id="comentarios" onchange="captura_fabricante(1,{{ $tblFabricantes->id }})" name="comentarios">{{ $tblFabricantes->comentarios }}</textarea>
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
                     <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="contactos_fabricantes(0,0)"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Contacto</a>
                </h1>
              </div>
        <br>  
        <div id="div_contactos_fabricantes" style="overflow: auto;width: 100%">
                 @include('tbl_contactos_fabricantes.table')

        </div>
     </div>
    </div>
     </div>     

@endif
