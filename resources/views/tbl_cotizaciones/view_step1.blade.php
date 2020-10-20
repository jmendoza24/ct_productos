<fieldset id="rapida">
  
 <ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
  <li class="nav-item">
    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32"
    aria-expanded="true">Proyecto</a>
  </li>
   <li class="nav-item">
        <a class="nav-link" id="linkOpt-tab2" data-toggle="tab" href="#linkOpt2" aria-controls="linkOpt2">Configuración </a>
   </li>
   
</ul>
<div class="tab-content px-1 pt-1">
<div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
  <br>

     <div class="row"> 
         <div class="col-md-6">
          <div class="form-group row">
              <label class="col-md-6 label-control" for="userinput1">Nombre de cotización:<span class="red">*</span></label>
              <div class="col-md-12">
              </div>
            </div>
      </div>
      <div class="col-md-6">
          <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput1">Tipo: <span class="red">*</span></label>
                <div class="col-md-12">
                  <select class="form-control" id="tipo_cliente" name="tipo_cliente" onchange="habilita_tipo()" required="required">

                    </select>
                  </div>
                </div>
              </div>
               
                  <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="userinput1">Correo: <span class="red">*</span></label>
                            <div class="col-md-12">
                            </div>
                          </div>
                  </div>
                  <div class="col-md-6" id="nuevo">
                      <div class="form-group row" >
                          <label class="col-md-4 label-control" for="userinput1">Cliente: <span class="red">*</span></label>
                          <div class="col-md-12">
                          </div>
                        </div>
                  </div>
                  <div class="col-md-6" id="viejo" style="display: none">
                    <div class="form-group row" >
                          <label class="col-md-4 label-control" for="userinput1">Cliente: <span class="red">*</span></label>
                          <div class="col-md-12">
                             <select class="form-control" id="id_clientes" name="id_clientes"  required="required" onchange="()">
                              
                          </div>
                        </div>
                  </div>
               
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="userinput1">Teléfono:</label>
                            <div class="col-md-12">
                             </div>
                          </div>
                  </div>
                  <div class="col-md-6" id="cnuevo">
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="userinput1">Contacto: <span class="red">*</span></label>
                            <div class="col-md-12">
                              
                              <input type="hidden" name="proyecto" id="proyecto"  class=" form-control">
                              <input type="hidden" name="id_estado" id="id_estado" value="0" class=" form-control">
                              <input type="hidden" name="id_municipio" id="id_municipio" value="0" class=" form-control">
                              <input type="hidden" name="cp" id="cp" value="0" class=" form-control">
                            </div>
                          </div>
                  </div>
                  
                  <div class="col-md-6" id="cviejo" style="display: none">
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="userinput1">Contacto: <span class="red">*</span></label>
                            <div class="col-md-12">

                                <select class="form-control" id="id_contacto" name="id_contacto"  required="required" onchange="info_con()">
                                 <option value="">Selecciona una opción</option> 
                                   
                              </select>
                            </div>
                          </div>
                  </div>
                 

                 
                 <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="userinput1">Condiciones:</label>
                            <div class="col-md-12">
                             </div>
                          </div>
                  </div>
                   <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="userinput1">Comentarios: </label>
                            <div class="col-md-12">
                             </div>
                          </div>
                  </div>
                </div>
</div>
        



    </fieldset>





