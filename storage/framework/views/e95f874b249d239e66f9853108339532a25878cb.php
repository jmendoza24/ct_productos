<?php if($tipo==0): ?>
          <div class="row">
            <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Fabricante:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_fabricante" name="id_fabricante" required="required">
                                    <option value="0">Selecciona una opción</option>
                                           <?php $__currentLoopData = $fabricantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fabricantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($fabricantes->id); ?>"
                                                ><?php echo e($fabricantes->nombre); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">ID producto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('id_producto', null, ['id'=>'id_producto','class' => 'form-control ']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('nombre', null, ['id'=>'nombre','class' => 'form-control']); ?>

                                 <input type="hidden" name="idp" id="idp" value="0">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Código Producto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('codigo_producto', null, ['id'=>'codigo_producto','class' => 'form-control']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Marca:</strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('marca', null, ['id'=>'marca','class' => 'form-control ']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Modelo:</strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('modelo', null, ['id'=>'modelo','class' => 'form-control ']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">SKU:</strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('sku', null, ['id'=>'sku','class' => 'form-control ']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descripción:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('descripcion', null, ['id'=>'descripcion','class' => 'form-control']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Código de barras:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('codigo_barras', null, ['id'=>'codigo_barras','class' => 'form-control']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descripción 2:</strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('descripcion2', null, ['id'=>'descripcion2','class' => 'form-control ']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_categoria" name="id_categoria" required="required" onchange="bs_subcategoria()" > 
                                        <option value="0">Sin categoría</option>

                                         <?php $__currentLoopData = $tblCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblCategorias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($tblCategorias->id); ?>"><?php echo e($tblCategorias->categoria); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Subcategoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_subcategoria" name="id_subcategoria" required="required">
                                        <option value="0">Sin subcategoría</option>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Color:</strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_color" name="id_color" >
                                        <option value="0">Sin color</option>

                                         <?php $__currentLoopData = $sql_color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sql_color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($sql_color->id); ?>"><?php echo e($sql_color->color); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Estatus:</strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="estatus" name="estatus" >
                                        <option value="0">Sin Estatus</option>
                                        <option value="1">Activo</option>
                                        <option value="3">Inactivo</option>
                                        <option value="4">Sin Inventario</option>
                                        <option value="5">Outlet</option>
                                        <option value="6">Descontinuado</option>
                                       
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Cantidades</strong></h3><br><br>
              </div>
                
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Volumen:</strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('volumen', null, ['id'=>'volumen','class' => 'form-control decimal-inputmask']); ?>

                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Unidad de medida:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_unidad" name="id_unidad" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <?php $__currentLoopData = $tblUnidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblUnidades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($tblUnidades->id); ?>"><?php echo e($tblUnidades->unidad); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Piezas incluidas:</strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('unidades_paquete', null, ['id'=>'unidades_paquete','class' => 'form-control decimal-inputmask']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Origen:</strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_origen" name="id_origen" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        <?php $__currentLoopData = $sql_pais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sql_pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($sql_pais->id); ?>"><?php echo e($sql_pais->Pais); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Pedido mínimo:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <?php echo Form::text('pedido_minimo', null, ['id'=>'pedido_minimo','class' => 'form-control decimal-inputmask']); ?>


                        </div>
                      </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Se cotiza en:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                           
                           <select class="form-control select2" style="width: 100%" id="id_vende" name="id_vende" required="required" onchange="captura_producto(1)">
                                  <option value="0" >MX</option>
                                  <option value="1" >US</option>
                            </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Presentación:</strong></label>
                        <div class="col-md-12">
                                 <?php echo Form::text('presentacion', null, ['id'=>'presentacion','class' => 'form-control']); ?>

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Tiempo entrega:</strong></label>
                        <div class="col-md-12">
                            <?php echo Form::text('tiempo_entrega', null, ['id'=>'tiempo_entrega','class' => 'form-control']); ?>


                        </div>
                      </div>
              </div>


              
               

          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_producto(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>


<?php else: ?>

<ul class="nav nav-tabs nav-underline no-hover-bg nav-justified">
  <li class="nav-item">
    <a class="nav-link active" id="active-tab32" data-toggle="tab" href="#active32" aria-controls="active32"
    aria-expanded="true"><b class="texto_azul">I</b><b class="texto_azul" style="text-transform: lowercase;">nformación de producto</b></a>
  </li>
     
</ul>
<div class="tab-content px-1 pt-1">
  <div role="tabpanel" class="tab-pane active in" id="active32" aria-labelledby="active-tab32" aria-expanded="true">
     <br>
          
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Fabricante:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_fabricante" name="id_fabricante" required="required" onchange="captura_producto(1)">
                                    <option value="0">Selecciona una opción</option>
                                           <?php $__currentLoopData = $fabricantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fabricantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($fabricantes->id); ?>" 
                                                <?php echo e(old('id_fabricante', $tblProductos->id_fabricante) == $fabricantes->id ? 'selected' : ''); ?>

                                                ><?php echo e($fabricantes->nombre); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">ID producto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                          <input type="text" name="id_producto" id="id_producto" class="form-control" value="<?php echo e($tblProductos->id_producto); ?>" onchange="captura_producto(1)">
                        </div>
                      </div>
              </div> 
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo e($tblProductos->nombre); ?>" onchange="captura_producto(1)">
                                 <input type="hidden" name="idp" id="idp" value="<?php echo e($tblProductos->id); ?>">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Código Producto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                             <input type="text" name="codigo_producto" id="codigo_producto" class="form-control" value="<?php echo e($tblProductos->codigo_producto); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Marca:</strong></label>
                        <div class="col-md-12">
                           <input type="text" name="marca" id="marca" class="form-control" value="<?php echo e($tblProductos->marca); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Modelo:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="modelo" id="modelo" class="form-control" value="<?php echo e($tblProductos->modelo); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">SKU:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="sku" id="sku" class="form-control" value="<?php echo e($tblProductos->sku); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
             
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descripción:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                          <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo e($tblProductos->descripcion); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Código de barras:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                               <input type="text" name="codigo_barras" id="codigo_barras" class="form-control" value="<?php echo e($tblProductos->codigo_barras); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descripción 2:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="descripcion2" id="descripcion2" class="form-control" value="<?php echo e($tblProductos->descripcion2); ?>" onchange="captura_producto(1)">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_categoria" name="id_categoria" required="required" onchange="bs_subcategoria(),captura_producto(1)" > 
                                        <option value="0">Selecciona una opción</option>
                                         <?php $__currentLoopData = $tblCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblCategorias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($tblCategorias->id); ?>"
                                                <?php echo e(old('id_categoria', $tblProductos->id_categoria) == $tblCategorias->id ? 'selected' : ''); ?>

                                                ><?php echo e($tblCategorias->categoria); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Subcategoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_subcategoria" name="id_subcategoria" required="required" onchange="captura_producto(1)">
                                        <option value="0">Sin subcategoría</option>
                                          <?php $__currentLoopData = $sub_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($sub_cat->id); ?>"
                                                <?php echo e(old('id_categoria', $tblProductos->id_subcategoria) == $sub_cat->id ? 'selected' : ''); ?>

                                                ><?php echo e($sub_cat->sub_categoria); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Color:</strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_color" name="id_color" >
                                        <option value="0">Sin color</option>
                                         <?php $__currentLoopData = $sql_color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sql_color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($sql_color->id); ?>"
                                                <?php echo e(old('id_color', $tblProductos->id_color) == $sql_color->id ? 'selected' : ''); ?>

                                                ><?php echo e($sql_color->color); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Estatus:</strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="estatus" name="estatus" >
                                        <option value="0">Sin Estatus</option>
                                        <option value="1" <?php echo e(($tblProductos->estatus==1) ? 'selected' : ''); ?>>Activo</option>
                                        <option value="2" <?php echo e(($tblProductos->estatus==2) ? 'selected' : ''); ?>>Inactivo</option>
                                        <option value="3" <?php echo e(($tblProductos->estatus==3) ? 'selected' : ''); ?>>Sin Inventario</option>
                                        <option value="4" <?php echo e(($tblProductos->estatus==4) ? 'selected' : ''); ?>>Outlet</option>
                                        <option value="5" <?php echo e(($tblProductos->estatus==5) ? 'selected' : ''); ?>>Descontinuado</option>
                                       
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Cantidades</strong></h3><br><br>
              </div>
                
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Volumen:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="volumen" id="volumen" class="form-control decimal-inputmask" value="<?php echo e($tblProductos->volumen); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Unidad de medida:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_unidad" name="id_unidad" required="required" onchange="captura_producto(1)">
                                        <option value="0">Selecciona una opción</option>
                                        <?php $__currentLoopData = $tblUnidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tblUnidades): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($tblUnidades->id); ?>"
                                                <?php echo e(old('id_unidad', $tblProductos->id_unidad) == $tblUnidades->id ? 'selected' : ''); ?>

                                                ><?php echo e($tblUnidades->unidad); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Piezas incluidas:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="unidades_paquete" id="unidades_paquete" class="form-control decimal-inputmask" value="<?php echo e($tblProductos->unidades_paquete); ?>" onchange="captura_producto(1)">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Origen:</strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_origen" name="id_origen" required="required" onchange="captura_producto(1)">
                                        <option value="0">Selecciona una opción</option>
                                        <?php $__currentLoopData = $sql_pais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sql_pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option  value="<?php echo e($sql_pais->id); ?>"
                                                <?php echo e(old('id_origen', $tblProductos->id_origen) == $sql_pais->id ? 'selected' : ''); ?>

                                                ><?php echo e($sql_pais->Pais); ?></option>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Pedido mínimo:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="pedido_minimo" id="pedido_minimo" class="form-control decimal-inputmask" value="<?php echo e($tblProductos->pedido_minimo); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Se cotiza en:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_vende" name="id_vende" required="required" onchange="captura_producto(1)">
                                        <option value="0" <?php echo e(($tblProductos->id_vende==0) ? 'selected' : ''); ?>>MX</option>
                                        <option value="1" <?php echo e(($tblProductos->id_vende==1) ? 'selected' : ''); ?>>US</option>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Presentación:</strong></label>
                        <div class="col-md-12">
                             <input type="text" name="presentacion" id="presentacion" class="form-control" value="<?php echo e($tblProductos->presentacion); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Tiempo entrega:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="tiempo_entrega" id="tiempo_entrega" class="form-control" value="<?php echo e($tblProductos->tiempo_entrega); ?>" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              

              <div class="col-md-12"><br>
                    <h3><strong class="texto_azul">Fotos</strong></h3><br><br>
              </div>


                  <div class="col-md-6">
                      <div class="row">
                          <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Foto 1:<span class="red">*</span></strong></label>
                          <div class="col-md-12">
                            <form method="post"  enctype="multipart/form-data" id="formUpload1">
                                    <?php echo csrf_field(); ?>

                                <input type="hidden" name="idform" id="idform" value="1">
                                <input type="hidden" name="idp" id="idp" value="<?php echo e($tblProductos->id); ?>">    
                                <input style="width: 100%" id="foto1" accept="image/*" onchange="validarFile2(this,1)" name="foto1" type="file"  class="file" data-overwrite-initial="false">
                            </form>
                          </div>
                        </div>
                   </div>

                   <div class="col-md-6">
                          <div class="row">
                              <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Foto 2:</strong></label>
                              <div class="col-md-12">
                                <form method="post"  enctype="multipart/form-data" id="formUpload2">
                                        <?php echo csrf_field(); ?>

                                    <input type="hidden" name="idform" id="idform" value="2">
                                    <input type="hidden" name="idp" id="idp" value="<?php echo e($tblProductos->id); ?>">
                                    <input style="width: 100%" id="foto2" accept="image/*" onchange="validarFile2(this,2)" name="foto2" type="file"  class="file" data-overwrite-initial="false">
                                </form>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-6">
                      <div class="row">
                          <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Foto 3:</strong></label>
                          <div class="col-md-12">
                            <form method="post"  enctype="multipart/form-data" id="formUpload3">
                                    <?php echo csrf_field(); ?>

                                <input type="hidden" name="idform" id="idform" value="3">
                                <input type="hidden" name="idp" id="idp" value="<?php echo e($tblProductos->id); ?>">
                                <input style="width: 100%" id="foto3" accept="image/*" onchange="validarFile(this,3)" name="foto3" type="file"  class="file" data-overwrite-initial="false">
                            </form>
                          </div>
                        </div>
                   </div>

                   <div class="col-md-6">
                          <div class="row">
                              <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Foto 4:</strong></label>
                              <div class="col-md-12">
                                <form method="post"  enctype="multipart/form-data" id="formUpload4">
                                        <?php echo csrf_field(); ?>

                                <input type="hidden" name="idform" id="idform" value="4">
                                <input type="hidden" name="idp" id="idp" value="<?php echo e($tblProductos->id); ?>">
                                    <input style="width: 100%" id="foto4" accept="image/*" onchange="validarFile2(this,4)" name="foto4" type="file"  class="file" data-overwrite-initial="false">
                                </form>
                              </div>
                            </div>
                      </div>
                      <div class="col-md-6">
                      <div class="row">
                          <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Foto 5:</strong></label>
                          <div class="col-md-12">
                            <form method="post"  enctype="multipart/form-data" id="formUpload5">
                                    <?php echo csrf_field(); ?>

                                <input type="hidden" name="idform" id="idform" value="5">
                                <input type="hidden" name="idp" id="idp" value="<?php echo e($tblProductos->id); ?>">
                                <input style="width: 100%" id="foto5" accept="image/*" onchange="validarFile2(this,5)" name="foto5" type="file"  class="file" data-overwrite-initial="false">
                            </form>
                          </div>
                        </div>
                   </div>



   </div>
  
     </div>     

<?php endif; ?>
<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/tbl_productos/fields.blade.php ENDPATH**/ ?>