
@if($tipo==0)
          <div class="row">
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Dirección:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" value="{{ $nombre_direccion }}" class="form-control" disabled="disabled">
                            <input type="hidden" name="id_direccion" id="id_direccion" value="{{ $id_direccion }}" class="form-control">
                        </div>
                      </div>
                      <input type="hidden" name="idcs" id="idcs" value="0">
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Servicio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                              <select class="form-control select2" style="width: 100%" id="id_servicio" name="id_servicio" required="required" onchange="bs_subservicios()">
                                    <option value="">Selecciona una opción</option>
                                    @foreach($sql_formatos_registro_civil as $tipo)
                                        <option  value="{{ $tipo->id }}">{{ $tipo->servicio }}</option>
                                    @endforeach
                              </select>
                        </div>
                      </div>
              </div>
        
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Artículo:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('articulo', null, ['id'=>'articulo','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
                     <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Subservicio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                              <select class="form-control select2" style="width: 100%" id="id_subservicio" name="id_subservicio" required="required">
                                      <option value="">Selecciona una opción</option>
                                      <option value="0">Sin subservicio</option>
                              </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Fracción:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('fraccion', null, ['id'=>'fraccion','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Monto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('monto', null, ['id'=>'monto','class' => 'form-control currency']) !!}
                        </div>
                      </div>
              </div>
            <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo cobro:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <select class="form-control select2" style="width: 100%" id="moneda" name="moneda" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <option value="1">Pesos</option>
                                        <option value="2">Umas</option>
                              </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Periodicidad:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <select class="form-control select2" style="width: 100%" id="periodicidad" name="periodicidad" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <option value="1">Mensual</option>
                                        <option value="2">Evento</option>
                              </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('comentarios', null, ['id'=>'comentarios','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_servicio_costo(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else

        <div class="row">
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Dirección:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" value="{{ $nombre_direccion }}" class="form-control" disabled="disabled">
                            <input type="hidden" name="id_direccion" id="id_direccion" value="{{ $id_direccion }}" class="form-control">
                        </div>
                      </div>
                      <input type="hidden" name="idcs" id="idcs" value="{{ $tblCostosServicios->id }}">
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Servicio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                              <select class="form-control select2" style="width: 100%" id="id_servicio" name="id_servicio" required="required" onchange="bs_subservicios()">
                                        <option value="">Selecciona una opción</option>
                                    @foreach($sql_formatos_registro_civil as $tipo)
                                        <option  value="{{ $tipo->id }}"  {{ ($tipo->id==$tblCostosServicios->id_servicio) ? 'selected' : '' }}       >{{ $tipo->servicio }}</option>
                                    @endforeach
                              </select>
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Artículo:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                <input type="text" name="articulo" id="articulo" class="form-control" value="{{ $tblCostosServicios->articulo }}">
                        </div>
                      </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Subservicio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                              <select class="form-control select2" style="width: 100%" id="id_subservicio" name="id_subservicio" required="required">
                                      <option value="0">Sin subservicio</option>
                                    @foreach($sql_subservicios as $tipo)
                                        <option  value="{{ $tipo->id }}"  {{ ($tipo->id==$tblCostosServicios->id_subservicio) ? 'selected' : '' }}       >{{ $tipo->subservicio }}</option>
                                    @endforeach
                              </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Fracción:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="fraccion" id="fraccion" class="form-control" value="{{ $tblCostosServicios->fraccion }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Monto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="monto" id="monto" class="form-control currency" value="{{ $tblCostosServicios->monto }}">
                        </div>
                      </div>
              </div>
            <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo cobro:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <select class="form-control select2" style="width: 100%" id="moneda" name="moneda" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <option value="1" {{ ($tblCostosServicios->periodicidad==1) ? 'selected' : '' }}>Pesos</option>
                                        <option value="2" {{ ($tblCostosServicios->periodicidad==2) ? 'selected' : '' }}>Umas</option>
                              </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Periodicidad:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <select class="form-control select2" style="width: 100%" id="periodicidad" name="periodicidad" required="required">
                                        <option value="0" {{ ($tblCostosServicios->periodicidad==0) ? 'selected' : '' }}>Selecciona una opción</option>
                                        <option value="1" {{ ($tblCostosServicios->periodicidad==1) ? 'selected' : '' }}>Mensual</option>
                                        <option value="2" {{ ($tblCostosServicios->periodicidad==2) ? 'selected' : '' }}>Evento</option>
                              </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="comentarios" name="comentarios">{{$tblCostosServicios->comentarios }}</textarea>
                        </div>
                      </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_servicio_costo(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@endif
     

