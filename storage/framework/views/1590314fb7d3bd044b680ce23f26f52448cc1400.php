<style type="text/css">
  input[type="text"],input[type="number"],
  select.form-control {
  background: transparent;
  border: none;
  border-bottom: 1px solid #DED6D0;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0;
}

input[type="text"]:focus,
select.form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}


</style>
<?php for($i=1; $i<=6; $i++): ?>
<div class="col-md-6 col-sm-12">
  <div class="card border-primary">
    <div class="card-content">
      <div class="card-body pt-1">

        <table border="0" class="form" style="width: 100%;">
          <tr>
            <td class="text-center"><b>ID DIALDESA</b></td>
            <td class="text-center">Nombre producto</td>
          </tr>
          <tr>
            <td rowspan="5" style="text-align: center;">
                <img src="<?php echo e(url('app-assets/images/elements/01.png')); ?>" alt="element 01" width="190"  class="float-left" >                      
            </td>
            <td style="text-align: right;"><b>$<?php echo e(number_format(1334,2)); ?></b></td>
          </tr>
          <tr>
            <td>
              <fieldset class="form-group">
                  <label for="basicInput">Código barras:</label>
                  <input type="text" name="" class="form-control">
                </fieldset>              
            </td>
          </tr>
          <tr>
            <td>
              <label>Sucursal:</label>
              <input type="text" name="" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
              <label>Costo:</label>
              <input type="number" step="0.0" name="" min="0" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
              <label>Existencia:</label>
              <input type="number" name="existencia" min="0" class="form-control">
            </td>
          </tr>
          <tr>
            <td class="text-center"><button class="btn btn-primary text-center">Guardar</button></td>
            <td></td>
          </tr>
        </table>
        
      </div>
    </div>
  </div>
</div>
<?php endfor; ?><?php /**PATH C:\wamp64\www\laravel\ct_productos\resources\views/vendedores/table.blade.php ENDPATH**/ ?>