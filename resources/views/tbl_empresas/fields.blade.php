
<div class="tab-content px-1 pt-1">
  <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
     <br>
<div class="row">
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                <div class="col-md-12">
                      <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $tblEmpresas->nombre }}" onchange="empresa()">
                </div>
              </div>
      </div>
     <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">RFC:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="rfc" id="rfc" class="form-control " value="{{ $tblEmpresas->rfc }} " onchange="empresa()">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="telefono" id="telefono" class="form-control international-inputmask" value="{{ $tblEmpresas->telefono }} " onchange="empresa()">
                </div>
              </div>
      </div>
     
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Celular:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="celular" id="celular" class="form-control international-inputmask" value="{{ $tblEmpresas->celular }} " onchange="empresa()">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre contacto:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="nombre_contacto" id="nombre_contacto" class="form-control " value="{{ $tblEmpresas->nombre_contacto }} " onchange="empresa()">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="correo" id="correo" class="form-control email-inputmask" value="{{ $tblEmpresas->correo }} " onchange="empresa()">
                </div>
              </div>
      </div>
       <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Facebook:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="face" id="face" class="form-control " value="{{ $tblEmpresas->face }} " onchange="empresa()">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Instagram:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="insta" id="insta" class="form-control " value="{{ $tblEmpresas->insta }} " onchange="empresa()">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Web:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="web" id="web" class="form-control" value="{{ $tblEmpresas->web }} " onchange="empresa()">
                </div>
              </div>
      </div>
   
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo cambio USD:<span class="red">*</span></strong></label>
                <div class="col-md-12">
                      <input type="text" name="tipo_cambio" id="tipo_cambio" class="form-control currency" value="{{ $tblEmpresas->tipo_cambio }} " onchange="empresa()">
                </div>
              </div>
      </div>
       <div class="col-md-12">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Dirección:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $tblEmpresas->direccion }} " onchange="empresa()">
                </div>
              </div> 
      </div>
      <div class="col-md-12">
          <div class="form-group row">
              <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Condiciones:</strong></label>
              <div class="col-md-12">
                    <textarea cols="40" rows="14"  class="form-control" id="condiciones" name="condiciones" onchange="empresa()" >{{ $tblEmpresas->condiciones }}</textarea>
              </div>
            </div>
      </div>

  </div><br>
{{--   <div class="form-actions pull-right">
    <button type="button" onclick="captura_empresa(1)" class="btn btn_azul">
      <span class="btn_azul material-icons md-18">add</span> Guardar
    </button>
  </div>
 --}}
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


