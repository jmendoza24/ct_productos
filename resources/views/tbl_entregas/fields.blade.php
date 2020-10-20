@if($tipo==0)
          <div class="row">
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Calle:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('direccion_entrega', null, ['id'=>'direccion_entrega','class' => 'form-control']) !!}
                                 <input type="hidden" name="ide" id="ide" value="0">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Colonia:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('colonia_entrega', null, ['id'=>'colonia_entrega','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>

            
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Estado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_estado_entrega" name="id_estado_entrega" required="required" onchange="bs_municipio2()">
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
                             <select class="form-control select2" style="width: 100%" id="id_municipio_entrega" name="id_municipio_entrega" required="required">
                                    <option value="0">Selecciona una opción</option>

                              </select>
                    </div>
                  </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">CP:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('cp_entrega', null, ['id'=>'cp_entrega','class' => 'form-control decimal-inputmask']) !!}
                        </div>
                      </div>
              </div>

              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                      <div class="col-md-12">
                           {!! Form::textarea('comentarios_entrega', null, ['id'=>'comentarios_entrega','class' => 'form-control']) !!}

                      </div>
                    </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_direccion_cliente(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else

        <div class="row">
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Calle:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="direccion_entrega" id="direccion_entrega" class="form-control" value="{{ $tblEntregas->direccion }}">
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Colonia:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="colonia_entrega" id="colonia_entrega" class="form-control" value="{{ $tblEntregas->colonia }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Estado:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                             <select class="form-control select2" style="width: 100%" id="id_estado_entrega" name="id_estado_entrega" required="required" onchange="bs_municipio2()">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($sql_estados as $estado)
                                        <option  value="{{ $estado->id }}"
                                           {{ old('id_estado_entrega', $tblEntregas->id_estado) == $estado->id ? 'selected' : '' }} >{{ $estado->estado }}</option>
                                        @endforeach   
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Municipio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                             <select class="form-control select2" style="width: 100%" id="id_municipio_entrega" name="id_municipio_entrega" required="required">
                                    @foreach($municipios as $idmun)
                                      <option value="{{ $idmun->id }}" 
                                           {{ old('id_municipio_entrega', $tblEntregas->id_municipio) == $idmun->id ? 'selected' : '' }}
                                       >{{ $idmun->municipio }}</option>
                                    @endforeach
                             </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Cp:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="cp_entrega" id="cp_entrega" class="form-control decimal-inputmask" value="{{ $tblEntregas->cp }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                      <div class="col-md-12">
                                 <input type="hidden" name="ide" id="ide" value="{{ $tblEntregas->id }}">
                            <textarea class="form-control" id="comentarios_entrega" name="comentarios_entrega">{{ $tblEntregas->comentarios }}</textarea>
                      </div>
                    </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_direccion_cliente(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@endif
     
     