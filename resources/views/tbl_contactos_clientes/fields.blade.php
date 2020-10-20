@if($tipo==0)
          <div class="row">
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('nombre', null, ['id'=>'nombre_contacto','class' => 'form-control']) !!}
                                 <input type="hidden" name="idcon" id="idcon" value="0">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Puesto:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('puesto', null, ['id'=>'puesto_contacto','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:<span class="red">*</span></strong></label>
                      <div class="col-md-12">
                           
                                 {!! Form::text('correo', null, ['id'=>'correo_contacto','class' => 'form-control email-inputmask']) !!}

                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('telefono', null, ['id'=>'telefono_contacto','class' => 'form-control international-inputmask']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                      <div class="col-md-12">
                           {!! Form::textarea('comentarios', null, ['id'=>'comentarios_contacto','class' => 'form-control']) !!}

                      </div>
                    </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_contacto_cliente(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else

        <div class="row">
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="nombre" id="nombre_contacto" class="form-control" value="{{ $tblContactosClientes->nombre }}">
                            <input type="hidden" name="idcon" id="idcon" value="{{ $tblContactosClientes->id }}">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Puesto:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="puesto" id="puesto_contacto" class="form-control" value="{{ $tblContactosClientes->puesto }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:<span class="red">*</span></strong></label>
                      <div class="col-md-12">
                            <input type="text" name="correo" id="correo_contacto" class="form-control email-inputmask" value="{{ $tblContactosClientes->correo }}">
                      </div>
                    </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="telefono" id="telefono_contacto" class="form-control international-inputmask" value="{{ $tblContactosClientes->telefono }}">
                        </div>
                      </div>
              </div>

              <div class="col-md-12">
                  <div class="form-group row">
                      <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Comentarios:</strong></label>
                      <div class="col-md-12">
                            <input type="hidden" name="idv" id="idcon" value="{{ $tblContactosClientes->id  }}">
                            <textarea class="form-control" id="comentarios_contacto" name="comentarios">{{ $tblContactosClientes->comentarios }}</textarea>
                      </div>
                    </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_contacto_cliente(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@endif
     

