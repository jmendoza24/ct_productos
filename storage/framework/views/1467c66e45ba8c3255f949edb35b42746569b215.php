<?php $__env->startSection('titulo'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <div class="col-md-12"><h4><strong class="texto_azul">Cotiza.tech</strong></h4></div><br><br> 

<div class="row">
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                <div class="col-md-12">
                      <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo e($tblEmpresas->nombre); ?>"  disabled="disabled">
                </div>
              </div>
      </div>
     <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">RFC:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="rfc" id="rfc" class="form-control " value="<?php echo e($tblEmpresas->rfc); ?> " disabled="disabled">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Teléfono:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="telefono" id="telefono" class="form-control international-inputmask" value="<?php echo e($tblEmpresas->telefono); ?> "  disabled="disabled">
                </div>
              </div>
      </div>
     
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Celular:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="celular" id="celular" class="form-control international-inputmask" value="<?php echo e($tblEmpresas->celular); ?> "  disabled="disabled">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Nombre contacto:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="nombre_contacto" id="nombre_contacto" class="form-control " value="<?php echo e($tblEmpresas->nombre_contacto); ?> "  disabled="disabled">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Correo:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="correo" id="correo" class="form-control email-inputmask" value="<?php echo e($tblEmpresas->correo); ?> "  disabled="disabled">
                </div>
              </div>
      </div>
       <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Facebook:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="face" id="face" class="form-control " value="<?php echo e($tblEmpresas->face); ?> "  disabled="disabled">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Instagram:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="insta" id="insta" class="form-control " value="<?php echo e($tblEmpresas->insta); ?> "  disabled="disabled">
                </div>
              </div>
      </div>
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Web:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="web" id="web" class="form-control" value="<?php echo e($tblEmpresas->web); ?> "  disabled="disabled">
                </div>
              </div>
      </div>
   
      <div class="col-md-6">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Tipo cambio USD:<span class="red">*</span></strong></label>
                <div class="col-md-12">
                      <input type="text" name="tipo_cambio" id="tipo_cambio" class="form-control currency" value="<?php echo e($tblEmpresas->tipo_cambio); ?> "  onchange="empresa()">
                </div>
              </div>
      </div>
       <div class="col-md-12">
            <div class="form-group row">
                <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Dirección:</strong></label>
                <div class="col-md-12">
                      <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo e($tblEmpresas->direccion); ?> "  disabled="disabled">
                </div>
              </div> 
      </div>
      <div class="col-md-12">
          <div class="form-group row">
              <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Condiciones:</strong></label>
              <div class="col-md-12">
                    <textarea cols="40" rows="14"  class="form-control" id="condiciones" name="condiciones"  disabled="disabled"><?php echo e($tblEmpresas->condiciones); ?></textarea>
              </div>
            </div>
      </div>

  </div>
    
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/home.blade.php ENDPATH**/ ?>