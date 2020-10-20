
@if($tipo==0)
          <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Dirección:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                        	<input type="text" value="{{ $nombre_direccion }}" class="form-control" disabled="disabled">
                        	<input type="hidden" name="id_direccion" id="id_direccion" value="{{ $id_direccion }}" class="form-control">
                        </div>
                      </div>
                      <input type="hidden" name="idf" id="idf" value="0">
              </div>
              {{-- <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Ubicacióń:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                        	  <select class="form-control select2" style="width: 100%" id="id_ubicacion" name="id_ubicacion" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($tbl_registro_civil as $tipo)
                                        <option  value="{{ $tipo->id }}">{{ $tipo->ubicacion }}</option>
                                        @endforeach
                              </select>
                        </div>
                      </div>
              </div> --}}
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Servicio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('servicio', null, ['id'=>'servicio','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_servicio(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else
        <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Dirección:<span class="red">*</span></strong></label>
                        <div class="col-md-12">

                          <input type="text" value="{{ $nombre_direccion }}" class="form-control" disabled="disabled">
                        	<input type="hidden" name="id_direccion" id="id_direccion" value="{{ $id_direccion }}" class="form-control">                        </div>
                      </div>
              </div>
             {{--  <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Ubicacióń:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                        	<select class="form-control select2" style="width: 100%" id="id_ubicacion" name="id_ubicacion" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($tbl_registro_civil as $tipo)
                                        <option  value="{{ $tipo->id }}"{{ ($tblFormatos->id_ubicacion==$tipo->id) ? 'selected' : '' }} >{{ $tipo->ubicacion }}</option>
                                        @endforeach
                              </select>
                        </div>
                      </div>
              </div> --}}
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Servicio:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="servicio" id="servicio" class="form-control" value="{{ $tblFormatos->servicio }}">
                        </div>
                      </div>
                      <input type="hidden" name="idf" id="idf" value="{{ $tblFormatos->id }}">
              </div>
         </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_servicio(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@endif
     

