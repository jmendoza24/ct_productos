@if($tipo==0)
          <div class="row">
            <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Fabricante:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_fabricante" name="id_fabricante" required="required">
                                    <option value="0">Selecciona una opción</option>
                                           @foreach($fabricantes as $fabricantes)
                                              <option  value="{{ $fabricantes->id }}"
                                                >{{ $fabricantes->nombre }}</option>
                                           @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">ID producto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('id_producto', null, ['id'=>'id_producto','class' => 'form-control ']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('nombre', null, ['id'=>'nombre','class' => 'form-control']) !!}
                                 <input type="hidden" name="idp" id="idp" value="0">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Código Producto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('codigo_producto', null, ['id'=>'codigo_producto','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Marca:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('marca', null, ['id'=>'marca','class' => 'form-control ']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Modelo:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('modelo', null, ['id'=>'modelo','class' => 'form-control ']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">SKU:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('sku', null, ['id'=>'sku','class' => 'form-control ']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descripción:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('descripcion', null, ['id'=>'descripcion','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Código de barras:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('codigo_barras', null, ['id'=>'codigo_barras','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descripción 2:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('descripcion2', null, ['id'=>'descripcion2','class' => 'form-control ']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_categoria" name="id_categoria" required="required" onchange="bs_subcategoria()" > 
                                        <option value="0">Sin categoría</option>

                                         @foreach($tblCategorias as $tblCategorias)
                                              <option  value="{{ $tblCategorias->id }}">{{ $tblCategorias->categoria }}</option>
                                           @endforeach
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

                                         @foreach($sql_color as $sql_color)
                                              <option  value="{{ $sql_color->id }}">{{ $sql_color->color }}</option>
                                           @endforeach
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
                                 {!! Form::text('volumen', null, ['id'=>'volumen','class' => 'form-control decimal-inputmask']) !!}
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Unidad de medida:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_unidad" name="id_unidad" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($tblUnidades as $tblUnidades)
                                              <option  value="{{ $tblUnidades->id }}">{{ $tblUnidades->unidad }}</option>
                                           @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Piezas incluidas:</strong></label>
                        <div class="col-md-12">
                                 {!! Form::text('unidades_paquete', null, ['id'=>'unidades_paquete','class' => 'form-control decimal-inputmask']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Origen:</strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_origen" name="id_origen" required="required">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($sql_pais as $sql_pais)
                                              <option  value="{{ $sql_pais->id }}">{{ $sql_pais->Pais }}</option>
                                           @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Pedido mínimo:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            {!! Form::text('pedido_minimo', null, ['id'=>'pedido_minimo','class' => 'form-control decimal-inputmask']) !!}

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
                                 {!! Form::text('presentacion', null, ['id'=>'presentacion','class' => 'form-control']) !!}
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Tiempo entrega:</strong></label>
                        <div class="col-md-12">
                            {!! Form::text('tiempo_entrega', null, ['id'=>'tiempo_entrega','class' => 'form-control']) !!}

                        </div>
                      </div>
              </div>


              
               

          </div><br>
          <div class="form-actions pull-right">
            <button type="button" onclick="captura_producto(0)" class="btn btn_azul">
              <span class="btn_azul material-icons md-18">add</span> Guardar
            </button>
          </div>


@else

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
                                           @foreach($fabricantes as $fabricantes)
                                              <option  value="{{ $fabricantes->id }}" 
                                                {{ old('id_fabricante', $tblProductos->id_fabricante) == $fabricantes->id ? 'selected' : '' }}
                                                >{{ $fabricantes->nombre }}</option>
                                           @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">ID producto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                          <input type="text" name="id_producto" id="id_producto" class="form-control" value="{{ $tblProductos->id_producto }}" onchange="captura_producto(1)">
                        </div>
                      </div>
              </div> 
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Nombre:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $tblProductos->nombre }}" onchange="captura_producto(1)">
                                 <input type="hidden" name="idp" id="idp" value="{{ $tblProductos->id }}">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Código Producto:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                             <input type="text" name="codigo_producto" id="codigo_producto" class="form-control" value="{{ $tblProductos->codigo_producto }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Marca:</strong></label>
                        <div class="col-md-12">
                           <input type="text" name="marca" id="marca" class="form-control" value="{{ $tblProductos->marca }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Modelo:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $tblProductos->modelo }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">SKU:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="sku" id="sku" class="form-control" value="{{ $tblProductos->sku }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
             
              
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descripción:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                          <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $tblProductos->descripcion }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Código de barras:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                               <input type="text" name="codigo_barras" id="codigo_barras" class="form-control" value="{{ $tblProductos->codigo_barras }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Descripción 2:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="descripcion2" id="descripcion2" class="form-control" value="{{ $tblProductos->descripcion2 }}" onchange="captura_producto(1)">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Categoría:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                   <select class="form-control select2" style="width: 100%" id="id_categoria" name="id_categoria" required="required" onchange="bs_subcategoria(),captura_producto(1)" > 
                                        <option value="0">Selecciona una opción</option>
                                         @foreach($tblCategorias as $tblCategorias)
                                              <option  value="{{ $tblCategorias->id }}"
                                                {{ old('id_categoria', $tblProductos->id_categoria) == $tblCategorias->id ? 'selected' : '' }}
                                                >{{ $tblCategorias->categoria }}</option>
                                           @endforeach
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
                                          @foreach($sub_cat as $sub_cat)
                                              <option  value="{{ $sub_cat->id }}"
                                                {{ old('id_categoria', $tblProductos->id_subcategoria) == $sub_cat->id ? 'selected' : '' }}
                                                >{{ $sub_cat->sub_categoria }}</option>
                                           @endforeach
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
                                         @foreach($sql_color as $sql_color)
                                              <option  value="{{ $sql_color->id }}"
                                                {{ old('id_color', $tblProductos->id_color) == $sql_color->id ? 'selected' : '' }}
                                                >{{ $sql_color->color }}</option>
                                           @endforeach
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
                                        <option value="1" {{ ($tblProductos->estatus==1) ? 'selected' : ''  }}>Activo</option>
                                        <option value="2" {{ ($tblProductos->estatus==2) ? 'selected' : ''  }}>Inactivo</option>
                                        <option value="3" {{ ($tblProductos->estatus==3) ? 'selected' : ''  }}>Sin Inventario</option>
                                        <option value="4" {{ ($tblProductos->estatus==4) ? 'selected' : ''  }}>Outlet</option>
                                        <option value="5" {{ ($tblProductos->estatus==5) ? 'selected' : ''  }}>Descontinuado</option>
                                       
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
                              <input type="text" name="volumen" id="volumen" class="form-control decimal-inputmask" value="{{ $tblProductos->volumen }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Unidad de medida:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_unidad" name="id_unidad" required="required" onchange="captura_producto(1)">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($tblUnidades as $tblUnidades)
                                              <option  value="{{ $tblUnidades->id }}"
                                                {{ old('id_unidad', $tblProductos->id_unidad) == $tblUnidades->id ? 'selected' : '' }}
                                                >{{ $tblUnidades->unidad }}</option>
                                           @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Piezas incluidas:</strong></label>
                        <div class="col-md-12">
                              <input type="text" name="unidades_paquete" id="unidades_paquete" class="form-control decimal-inputmask" value="{{ $tblProductos->unidades_paquete }}" onchange="captura_producto(1)">
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Origen:</strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_origen" name="id_origen" required="required" onchange="captura_producto(1)">
                                        <option value="0">Selecciona una opción</option>
                                        @foreach($sql_pais as $sql_pais)
                                              <option  value="{{ $sql_pais->id }}"
                                                {{ old('id_origen', $tblProductos->id_origen) == $sql_pais->id ? 'selected' : '' }}
                                                >{{ $sql_pais->Pais }}</option>
                                           @endforeach
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Pedido mínimo:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                            <input type="text" name="pedido_minimo" id="pedido_minimo" class="form-control decimal-inputmask" value="{{ $tblProductos->pedido_minimo }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Se cotiza en:<span class="red">*</span></strong></label>
                        <div class="col-md-12">
                                 <select class="form-control select2" style="width: 100%" id="id_vende" name="id_vende" required="required" onchange="captura_producto(1)">
                                        <option value="0" {{ ($tblProductos->id_vende==0) ? 'selected' : ''  }}>MX</option>
                                        <option value="1" {{ ($tblProductos->id_vende==1) ? 'selected' : ''  }}>US</option>
                                  </select>
                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Presentación:</strong></label>
                        <div class="col-md-12">
                             <input type="text" name="presentacion" id="presentacion" class="form-control" value="{{ $tblProductos->presentacion }}" onchange="captura_producto(1)">

                        </div>
                      </div>
              </div>
              <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-md-6 label-control" for="userinput6"><strong class="texto_gris">Tiempo entrega:</strong></label>
                        <div class="col-md-12">
                            <input type="text" name="tiempo_entrega" id="tiempo_entrega" class="form-control" value="{{ $tblProductos->tiempo_entrega }}" onchange="captura_producto(1)">

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
                                    {!! csrf_field() !!}
                                <input type="hidden" name="idform" id="idform" value="1">
                                <input type="hidden" name="idp" id="idp" value="{{ $tblProductos->id }}">    
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
                                        {!! csrf_field() !!}
                                    <input type="hidden" name="idform" id="idform" value="2">
                                    <input type="hidden" name="idp" id="idp" value="{{ $tblProductos->id }}">
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
                                    {!! csrf_field() !!}
                                <input type="hidden" name="idform" id="idform" value="3">
                                <input type="hidden" name="idp" id="idp" value="{{ $tblProductos->id }}">
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
                                        {!! csrf_field() !!}
                                <input type="hidden" name="idform" id="idform" value="4">
                                <input type="hidden" name="idp" id="idp" value="{{ $tblProductos->id }}">
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
                                    {!! csrf_field() !!}
                                <input type="hidden" name="idform" id="idform" value="5">
                                <input type="hidden" name="idp" id="idp" value="{{ $tblProductos->id }}">
                                <input style="width: 100%" id="foto5" accept="image/*" onchange="validarFile2(this,5)" name="foto5" type="file"  class="file" data-overwrite-initial="false">
                            </form>
                          </div>
                        </div>
                   </div>



   </div>
  
     </div>     

@endif
