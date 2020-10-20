@if($tipo==0)
          <div class="row">

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Puesto:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('puesto', null, ['id'=>'puesto','class' => 'form-control']) !!}
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
                      <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:<span class="red">*</span></strong></label>
                      <div class="col-md-12">
                           
                                 {!! Form::text('correo', null, ['id'=>'correo','class' => 'form-control email-inputmask']) !!}

                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('telefono', null, ['id'=>'telefono','class' => 'form-control international-inputmask']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Tipo vendedor:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_tipo_vendedor" name="id_tipo_vendedor" required="required">
                                        <option value="0">Selecciona una opción</option>
                                           @foreach($tbl_tipo_vendedor as $tbl_tipo_vendedor)
                                              <option  value="{{ $tbl_tipo_vendedor->id }}">{{ $tbl_tipo_vendedor->tipo_vendedor }}</option>
                                           @endforeach
                                  </select>
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
            <button type="button" onclick="captura_vendedor(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else

<body onload="bs_municipio()"></body>

        <div class="row">

            
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Puesto:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="puesto" id="puesto" class="form-control" value="{{ $tblVendedores->puesto }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $tblVendedores->nombre }}">
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:<span class="red">*</span></strong></label>
                      <div class="col-md-12">
                            <input type="text" name="correo" id="correo" class="form-control email-inputmask" value="{{ $tblVendedores->correo }}">
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="telefono" id="telefono" class="form-control international-inputmask" value="{{ $tblVendedores->telefono }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Tipo vendedor:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_tipo_vendedor" name="id_tipo_vendedor" required="required">
                                        <option value="0">Selecciona una opción</option>
                                         @foreach($tbl_tipo_vendedor as $tbl_tipo_vendedor)
                                        <option  value="{{ $tbl_tipo_vendedor->id }}"
                                           {{ old('id_tipo_vendedor', $tblVendedores->id_tipo_vendedor) == $tbl_tipo_vendedor->id ? 'selected' : '' }} >{{ $tbl_tipo_vendedor->tipo_vendedor }}</option>
                                        @endforeach 
                                    
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">RFC:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="rfc" id="rfc" class="form-control " value="{{ $tblVendedores->rfc }}">
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
                              <input type="text" name="calle" id="calle" class="form-control" value="{{ $tblVendedores->calle }}">
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Colonia:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="colonia" id="colonia" class="form-control" value="{{ $tblVendedores->colonia }}">
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
                                        <option  value="{{ $estado->id }}"
                                           {{ old('id_estado', $tblVendedores->id_estado) == $estado->id ? 'selected' : '' }} >{{ $estado->estado }}</option>
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
                                @if(!empty($tblVendedores))
                                    @foreach($municipios as $idmun)
                                      <option value="{{ $idmun->id }}" 
                                           {{ old('id_municipio', $tblVendedores->id_municipio) == $idmun->id ? 'selected' : '' }}
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
                              <input type="text" name="cp" id="cp" class="form-control decimal-inputmask" value="{{ $tblVendedores->cp }}">
                        </div>
                      </div>
              </div>
                 
               
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                      <div class="col-md-12">
                            <input type="hidden" name="idv" id="idv" value="{{ $tblVendedores->id  }}">
                            <textarea class="form-control" id="comentarios" name="comentarios">{{ $tblVendedores->comentarios }}</textarea>
                      </div>
                    </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_vendedor(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@endif
     
            
        



{{-- 
<div class="form-group col-sm-6">
    {!! Form::label('id_tipo_precio', 'Id Tipo Precio:') !!}
    {!! Form::number('id_tipo_precio', null, ['class' => 'form-control']) !!}
</div>



<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tblVendedores.index') }}" class="btn btn-default">Cancel</a>
</div>
 --}}