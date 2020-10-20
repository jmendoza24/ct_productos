<?php if($tipo==0): ?>
          <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('categoria', null, ['id'=>'categoria','class' => 'form-control']); ?>

                        </div>
                      </div>
                      <input type="hidden" name="idcat" id="idcat" value="0">
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_categoria(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
<?php else: ?>
        <div class="row">
              <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo e($tblCategorias->categoria); ?>">
                        </div>
                      </div>
                      <input type="hidden" name="idcat" id="idcat" value="<?php echo e($tblCategorias->id); ?>">
              </div>
         </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_categoria(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
<?php endif; ?>
     

<?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_categorias/fields.blade.php ENDPATH**/ ?>