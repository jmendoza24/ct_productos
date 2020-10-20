<div class="tab-content px-1 pt-1">
  <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
     <br>
<div class="row">
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Entidad:<span class="red">*</span></strong></label>
                <div class="col-md-12">
                      <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $tblEntidads->nombre }}" onchange="empresa({{ $tblEntidads->id }})">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Presidente:<span class="red">*</span></strong></label>
                <div class="col-md-12">
                      <input type="text" name="director" id="director" class="form-control" value="{{ $tblEntidads->director }}" onchange="empresa({{ $tblEntidads->id }})">
                </div>
              </div>
      </div>
     <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">RFC:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="rfc" id="rfc" class="form-control " value="{{ $tblEntidads->rfc }}" onchange="empresa({{ $tblEntidads->id }})">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="telefono" id="telefono" class="form-control international-inputmask" value="{{ $tblEntidads->telefono }}" onchange="empresa({{ $tblEntidads->id }})">
                </div>
              </div>
      </div>
      
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="correo" id="correo" class="form-control email-inputmask" value="{{ $tblEntidads->correo }}" onchange="empresa({{ $tblEntidads->id }})">
                </div>
              </div>
      </div>
    
     <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono 2:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="telefono2" id="telefono2" class="form-control international-inputmask" value="{{ $tblEntidads->telefono2 }}" onchange="empresa({{ $tblEntidads->id }})">
                </div>
              </div>
      </div>
  
      <div class="col-md-6">
          <div class="form-group row">
              <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Estado:<span class="red">*</span></strong></label>
              <div class="col-md-12">
                  <select class="form-control select2" style="width: 100%" id="id_estado" name="id_estado" required="required" onchange="bs_municipio(),empresa({{ $tblEntidads->id }})">
                              <option value="0">Selecciona una opción</option>
                               @foreach($sql_estados as $tipo)
                              <option  value="{{ $tipo->id }}" {{ ($tblEntidads->id_estado==$tipo->id) ? 'selected' : '' }}>{{ $tipo->estado }}</option>
                              @endforeach 
                    </select>
              </div>
            </div>
       </div>
       <div class="col-md-6">
          <div class="form-group row">
              <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Municipio:<span class="red">*</span></strong></label>
              <div class="col-md-12">
                  <select class="form-control select2" style="width: 100%" id="id_municipio" name="id_municipio" required="required" onchange="empresa({{ $tblEntidads->id }})">
                              <option value="0">Selecciona una opción</option>
                              @if($valida==1)
                                  @foreach($sql_municipios as $tipo)
                                  <option  value="{{ $tipo->id }}"  {{ ($tblEntidads->id_municipio==$tipo->id) ? 'selected' : '' }}>{{ $tipo->municipio }}</option>
                                  @endforeach 
                              @endif
                              
                    </select>
              </div>
            </div>
       </div>
       <div class="col-md-12">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Dirección:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $tblEntidads->direccion }}" onchange="empresa({{ $tblEntidads->id }})">
                </div>
              </div>
      </div>
   

  </div><br>

  </div>
  </div>
   <div class="col-md-12">
          <div class="row">
              <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Logo:</strong></label>
              <div class="col-md-12">
                <form method="post"  enctype="multipart/form-data" id="formUpload">
                        {!! csrf_field() !!}
                    <input style="width: 100%" id="logo" accept="image/*" onchange="validarFile(this)" name="logo" type="file"  class="file" data-overwrite-initial="false">
                </form>
              </div>
            </div>
      </div>


