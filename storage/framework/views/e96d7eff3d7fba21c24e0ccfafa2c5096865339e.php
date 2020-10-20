<div class="col-md-6">
    <span class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="ver_catalogo(2,0,1,0)">Agregar</span>
    <br><br><br>
     <table class="table table-bordered table-stripped zero-configuration">
         <thead>
             <tr>
                 <th>Categoria</th>
                 <th></th>
             </tr>
         </thead> 
         <tbody>
             <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php if($c->nivel==0): ?>
                <tr>
                    <td><span data-toggle="modal" style="cursor: pointer;" data-target="#myModal" onclick="ver_catalogo(2,<?php echo e($c->id); ?>,2,0)"><?php echo e($c->categorias); ?></span></td>
                    <td><span title="Borrar" onclick="elimina_catalogo(2,<?php echo e($c->id); ?>,'catalogos_tallas')" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></span></td>
                </tr>
                <?php endif; ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
     </table>
 </div>
 <div class="col-md-6">
    <span class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="ver_catalogo(3,0,1,0)">Agregar</span>
    <br><br><br>
     <table class="table table-bordered table-stripped zero-configuration">
         <thead>
             <tr>
                 <th>Categoria 2</th>
                 <th></th>
             </tr>
         </thead>
     </table>
 </div>
 <div class="col-md-6">
    <span class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="ver_catalogo(4,0,1,0)">Agregar</span>
    <br><br><br>
     <table class="table table-bordered table-stripped zero-configuration">
         <thead>
             <tr>
                 <th>Categoria 3</th>
                 <th></th>
             </tr>
         </thead>
     </table>
 </div>
 <div class="col-md-6">
    <span class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="ver_catalogo(5,0,1,0)">Agregar</span>
    <br><br><br>
     <table class="table table-bordered table-stripped zero-configuration">
         <thead>
             <tr>
                 <th>Categoria 4</th>
                 <th></th>
             </tr>
         </thead>
     </table>
 </div>
<?php /**PATH C:\wamp64\www\laravel\tp\resources\views/catalogos/tablas_cat.blade.php ENDPATH**/ ?>