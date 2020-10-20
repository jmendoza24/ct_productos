@if($tipo==0)
          <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Color:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('color', null, ['id'=>'color','class' => 'form-control']) !!}
                        </div>
                      </div>
                      <input type="hidden" name="idcol" id="idcol" value="0">
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_color(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else
        <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Color:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="color" id="color" class="form-control" value="{{ $tblColor->color }}">
                        </div>
                      </div>
                      <input type="hidden" name="idcol" id="idcol" value="{{ $tblColor->id }}">
              </div>
         </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_color(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@endif
     

