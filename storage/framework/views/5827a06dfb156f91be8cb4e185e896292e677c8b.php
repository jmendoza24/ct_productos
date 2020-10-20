<?php if($tipo==0): ?>
          <div class="row">
          	<div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_categoria" name="id_categoria" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <?php $__currentLoopData = $tblSubcategorias_sql; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  value="<?php echo e($tipo->id); ?>"><?php echo e($tipo->categoria); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="userinput6"><strong class="texto_gris">Sub categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('sub_categoria', null, ['id'=>'sub_categoria','class' => 'form-control']); ?>

                        </div>
                      </div>
                      <input type="hidden" name="idsc" id="idsc" value="0">
              </div>
          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_subcategoria(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
<?php else: ?>
        <div class="row">

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_categoria" name="id_categoria" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <?php $__currentLoopData = $tblSubcategorias_sql; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option  value="<?php echo e($tipo->id); ?>"
                                       <?php echo e(old('id_categoria', $tblSubcategorias->id_categoria) == $tipo->id ? 'selected' : ''); ?> ><?php echo e($tipo->categoria); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Sub categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="sub_categoria" id="sub_categoria" class="form-control" value="<?php echo e($tblSubcategorias->sub_categoria); ?>">
                        </div>
                      </div>
                      <input type="hidden" name="idsc" id="idsc" value="<?php echo e($tblSubcategorias->id); ?>">
              </div>
         </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_subcategoria(1)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>
<?php endif; ?>
     

<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_subcategorias/fields.blade.php ENDPATH**/ ?>