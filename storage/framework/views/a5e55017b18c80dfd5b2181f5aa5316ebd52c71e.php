<?php if($tipo==0): ?>
          <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Unidad:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('unidad', null, ['id'=>'unidad','class' => 'form-control']); ?>

                        </div>
                      </div>
                      <input type="hidden" name="idun" id="idun" value="0">
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_unidad(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
<?php else: ?>
        <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Unidad:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="unidad" id="unidad" class="form-control" value="<?php echo e($tblUnidades->unidad); ?>">
                        </div>
                      </div>
                      <input type="hidden" name="idun" id="idun" value="<?php echo e($tblUnidades->id); ?>">
              </div>
         </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_unidad(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
<?php endif; ?>
     

<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_unidades/fields.blade.php ENDPATH**/ ?>