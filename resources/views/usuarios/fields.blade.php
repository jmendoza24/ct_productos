<div class="tab-content px-1 pt-1">
  <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
     <br>
      <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput1">Nombre Usuario: <span class="red">*</span></label>
                <div class="col-md-12">
                     {!! Form::text('name', null, ['id'=>'name','class' => 'form-control']) !!}  
                  </div>
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-md-4 label-control">Correo: <span class="red">*</span></label>
                    <div class="col-md-12">
                        {!! Form::text('email', null, ['id'=>'email','class' => 'form-control email-inputmask2']) !!}
                    </div>
                </div>
             </div>
             {!! Form::hidden('id', null, ['class' => 'form-control']) !!}  

             <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-md-4 label-control" for="userinput6">Contraseña: <span class="red">*</span></label>
                  <div class="col-md-12">
                          {!! Form::password('password', ['id'=>'password','class' => 'form-control']) !!}
                  </div>
                </div>
              </div><!-- Foto Field -->
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-md-4 label-control">Tipo Usuario: <span class="red">*</span></label>
                      <div class="col-md-12">
                          <select class="form-control" id="id_tipo_usuario" name="id_tipo_usuario">
                            @if(!empty($usuarios_e->id_tipo_usuario))
                               <option value="0" {{ ($usuarios_e->id_tipo_usuario==0) ? 'selected' : '' }} >Administrador</option>
                               <option value="1" {{ ($usuarios_e->id_tipo_usuario==1) ? 'selected' : '' }}>Supervisor</option>
                               <option value="2" {{ ($usuarios_e->id_tipo_usuario==2) ? 'selected' : '' }}>Compras</option>
                               <option value="3" {{ ($usuarios_e->id_tipo_usuario==3) ? 'selected' : '' }}>Contratista</option> 
                            @else
                            <option value="0"  >Administrador</option>
                               <option value="1" >Supervisor</option>
                               <option value="2" >Compras</option>
                               <option value="3" >Contratista</option> 
                           
                            @endif
                          </select>
                      </div>
                  </div>
              </div>    
              <div class="col-md-6">
                  <div class="form-group row">
                      <label class="col-md-4 label-control">Contratista:</label>
                      <div class="col-md-12">
                          <select class="form-control" id="id_proveedor" name="id_proveedor" onchange="bs_contra_u()">
                               <option value="0" >Selecciona una opción</option>
                             @if(!empty($usuarios_e->id_proveedor))

                                  @foreach($proveedores as $tipo)
                                     <option value="{{ $tipo->id }}" 
                                         {{ old('id_proveedor', $usuarios_e->id_proveedor) == $tipo->id ? 'selected' : '' }}
                                     >{{ $tipo->nombre }}{{ ' '.$tipo->nombre_proveedor }} </option>
                                  @endforeach   
                              @else

                                  @foreach($proveedores as $tipo)
                                     <option value="{{ $tipo->id }}" 
                                     >{{ $tipo->nombre }}{{ ' '.$tipo->nombre_proveedor }} </option>
                                  @endforeach   
                              @endif
                          </select>
                      </div>
                  </div>
              </div>
             
      </div>
     
      @if($editar == 1)
        <div class="form-actions pull-right">
            <button type="submit" class="btn btn_azul">
              <i class="fa fa-check-square-o"></i> Guardar
            </button>
      </div>
      @else
      <div class="form-actions pull-right">
            <button type="button" class="btn btn_azul" onclick="gd_ud()">
              <i class="fa fa-check-square-o"></i> Guardar
            </button>
        </div>
      
      @endif
                  
  </div>                 
</div>
                    


