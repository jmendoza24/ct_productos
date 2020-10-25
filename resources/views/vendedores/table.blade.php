@for($i=1; $i<=6; $i++)
<div class="col-md-6 col-sm-12">
  <div class="card border-primary">
    <div class="card-content">
      <div class="card-body pt-1">

        <table border="1" class="form" style="width: 100%;">
          <tr>
            <td class="text-center"><b>ID DIALDESA</b></td>
            <td class="text-center">Nombre producto</td>
          </tr>
          <tr>
            <td rowspan="4" style="text-align: center;">
                <img src="{{ url('app-assets/images/elements/01.png') }}" alt="element 01" width="190"  class="float-left" >      
            </td>
            <td style="text-align: right;"><b>${{ number_format(1334,2)}}</b></td>
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
              <label>Costo:</label>
              <input type="number" step="0.0" name="" class="form-control">
            </td>
          </tr>
          <tr>
            <td>
              <label>Existencia:</label>
              <input type="number" name="" class="form-control">
            </td>
          </tr>
        </table>
        <button class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
@endfor