@if($tipo==0)
          <div class="row">
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('name', null, ['id'=>'name','class' => 'form-control']) !!}
                                 <input type="hidden" name="idu" id="idu" value="0">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('email', null, ['id'=>'email','class' => 'form-control email-inputmask']) !!}
                        </div>
                      </div>
              </div>

            
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo usuario:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_tipo_usuario" name="id_tipo_usuario" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Vendedor</option>
                                      
                                  </select>
                        </div>
                      </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Contraseña:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                <input type="password" class="form-control"  name="password" id="password"> 
                        </div>
                      </div>
              </div>

          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_usuario(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@else

        <div class="row">
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                              <input type="text" name="name" id="name" class="form-control" value="{{ $users->name }}">
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                              <input type="text" name="email" id="email" class="form-control email-inputmask" value="{{ $users->email }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo usuario:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                             <select class="form-control select2" style="width: 100%" id="id_tipo_usuario" name="id_tipo_usuario" required="required" >
                                        <option value="0">Selecciona una opción</option>
                                        <option value="1" {{ ($users->id_tipo_usuario==1) ? 'selected' : '' }}>Administrador</option>
                                        <option value="2" {{ ($users->id_tipo_usuario==2) ? 'selected' : '' }}>Vendedor</option>                       
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Contraseña:</strong></label>
                        <div class="col-md-12">
                            <input type="hidden" name="idu" id="idu" value="{{ $users->id }}">
                             <input type="password" class="form-control"  name="password" id="password"> 
                        </div>
                      </div>
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_usuario(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
@endif
     
     