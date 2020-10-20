@if($tipo==0)
          <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo cliente:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('tipo', null, ['id'=>'tipo','class' => 'form-control']) !!}
                        </div>
                      </div>
                      <input type="hidden" name="idtc" id="idtc" value="0">
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_tipo_cliente(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else
        <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo cliente:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="tipo" id="tipo" class="form-control" value="{{ $tblTipoCliente->tipo }}">
                        </div>
                      </div>
                      <input type="hidden" name="idtc" id="idtc" value="{{ $tblTipoCliente->id }}">
              </div>
         </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_tipo_cliente(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@endif
     

