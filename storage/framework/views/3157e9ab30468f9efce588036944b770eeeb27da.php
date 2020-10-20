<?php $__env->startSection('content'); ?>
   
<div id="base">
 <div class="col-md-12"><h4><strong class="texto_azul">Catálogos</strong></h4></div>

  <div id="accordion" role="tablist">
        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Tipo cliente
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
            <div class="card-body">
                   <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_cliente(0,0)"  href="#"> <span class="material-icons md-18">add</span> Tipo cliente</a>
                  </h1>
                  <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                      <?php echo $__env->make('tbl_tipo_clientes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
          </div>
        </div>
        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne9">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne9" aria-expanded="false" aria-controls="collapseOne9" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Tipo vendedor
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne9" class="collapse" role="tabpanel" aria-labelledby="headingOne9" data-parent="#accordion" style="">
            <div class="card-body">
                   <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(0,0)"  href="#"> <span class="material-icons md-18">add</span> Tipo vendedor</a>
                  </h1>
                  <div id="div_tipo_vendedores" style="overflow: auto;width: 100%">
                      <?php echo $__env->make('tbl_tipo_vendedors.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
          </div>
        </div>


        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne9000">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne9000" aria-expanded="false" aria-controls="collapseOne9000" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Fabricantes
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne9000" class="collapse" role="tabpanel" aria-labelledby="headingOne9000" data-parent="#accordion" style="">
            <div class="card-body">
         
                  <div id="div_fabricantes" style="overflow: auto;width: 100%">
                      <?php echo $__env->make('tbl_fabricantes.catalogo_fabricante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
          </div>
        </div>

        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne90">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne90" aria-expanded="false" aria-controls="collapseOne90" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Categorías
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne90" class="collapse" role="tabpanel" aria-labelledby="headingOne90" data-parent="#accordion" style="">
            <div class="card-body">
                   <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="categoria(0,0)"  href="#"> <span class="material-icons md-18">add</span> Categoría</a>
                  </h1>
                  <div id="div_categorias" style="overflow: auto;width: 100%">
                      <?php echo $__env->make('tbl_categorias.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
          </div>
        </div>
        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne901">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne901" aria-expanded="false" aria-controls="collapseOne901" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos">Sub categorías
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne901" class="collapse" role="tabpanel" aria-labelledby="headingOne901" data-parent="#accordion" style="">
            <div class="card-body">
                   <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="sub_categoría(0,0)"  href="#"> <span class="material-icons md-18">add</span> Sub categoría</a>
                  </h1>
                  <div id="div_subcategorias" style="overflow: auto;width: 100%">
                      <?php echo $__env->make('tbl_subcategorias.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
          </div>
        </div>

        <div class="card card-collapse ">
          <div class="card-header" role="tab" id="headingOne90a">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne90a" aria-expanded="false" aria-controls="collapseOne90a" class="collapsed">
                 &nbsp; &nbsp;<h2 class="textos"> Colores
                <i class="material-icons">add</i></h2>
              </a>
            </h5>
          </div>
          <div id="collapseOne90a" class="collapse" role="tabpanel" aria-labelledby="headingOne90a" data-parent="#accordion" style="">
            <div class="card-body">
                   <h1 class="pull-right">
                         <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="colores(0,0)"  href="#"> <span class="material-icons md-18">add</span> Color</a>
                  </h1>
                  <div id="div_colores" style="overflow: auto;width: 100%">
                      <?php echo $__env->make('tbl_colors.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
          </div>
        </div>
        <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne1">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Unidades de medida
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion" style="">
              <div class="card-body">
                     <h1 class="pull-right">
                           <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="unidad(0,0)"  href="#"> <span class="material-icons md-18">add</span> Unidad</a>
                    </h1>
                    <div id="div_unidades" style="overflow: auto;width: 100%">
                        <?php echo $__env->make('tbl_unidades.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
              </div>
            </div>
          </div>


          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne5">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Monedas
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne5" class="collapse" role="tabpanel" aria-labelledby="headingOne5" data-parent="#accordion" style="">
              <div class="card-body">
                     <h1 class="pull-right">
                           <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#myModal" onclick="moneda(0,0)"  href="#"> <span class="material-icons md-18">add</span> Moneda</a>
                    </h1>
                    <div id="div_monedas" style="overflow: auto;width: 100%">
                        <?php echo $__env->make('tbl_monedas.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
              </div>
            </div>
          </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">País de origen
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2" class="collapse" role="tabpanel" aria-labelledby="headingOne2" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                        <?php echo $__env->make('tbl_tipo_clientes.table_paises', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
              </div>
            </div>
          </div>

          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2as">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne2as" aria-expanded="false" aria-controls="collapseOne2as" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos">Estatus de productos
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne2as" class="collapse" role="tabpanel" aria-labelledby="headingOne2as" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                        <?php echo $__env->make('tbl_tipo_clientes.table_estatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
              </div>
            </div>
          </div>


          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne2">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Estados
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne3" data-parent="#accordion" style="">
              <div class="card-body"> 
                    <h1 class="pull-right">
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                        <?php echo $__env->make('tbl_tipo_clientes.table_estados', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
              </div>
            </div>
          </div>


          <div class="card card-collapse ">
            <div class="card-header" role="tab" id="headingOne4">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4" class="collapsed">
                   &nbsp; &nbsp;<h2 class="textos"> Municipios
                  <i class="material-icons">add</i></h2>
                </a>
              </h5>
            </div>
            <div id="collapseOne4" class="collapse" role="tabpanel" aria-labelledby="headingOne4" data-parent="#accordion" style="">
              <div class="card-body">
                    <h1 class="pull-right">
                    </h1>
                    <div id="div_tipo_cliente" style="overflow: auto;width: 100%">
                        <?php echo $__env->make('tbl_tipo_clientes.table_municipios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  </div>
              </div>
            </div>
          </div>
     </div>
</div>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/altermed/public_html/tpmonterrey.cotiza.tech/laravel/resources/views/tbl_tipo_clientes/index.blade.php ENDPATH**/ ?>