 <table class="table table-shopping  table-striped table-bordered zero-configuration16">
      <thead>
          <tr class="gris_barra">
          <th>Foto</th>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Costo</th>
          <th>Fecha Ingreso</th>
          <th>Comentarios</th>
          <th>Registro</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($tblInventarios as $tblInventarios)

        <tr style="background-color: white">
          <td>
            <div class="img-container">
                @if(empty( $tblInventarios->foto1))
                @else
                   <img  style="width: 70px;height:50px" src=data:image/jpeg;base64,{{ base64_encode(Storage::get($tblInventarios->foto1)) }}>
                @endif
            </div>
          </td>
          <td class="td-name">
            <a href="#jacket">{{ $tblInventarios->nombre }}</a>
            <br>
            <small>{{ $tblInventarios->id_producto }}</small>
          </td>
          <td><p>{{ number_format($tblInventarios->cantidad,2) }}</p>
            <div class="btn-group btn-group-sm">
              <button class="btn btn-round btn-info"> <i class="material-icons">remove</i> </button>
              <button class="btn btn-round btn-info"> <i class="material-icons">add</i> </button>
            </div>
          </td>
          <td class="text-right"><p>${{ number_format($tblInventarios->costo,2) }}</p></td>
          <td class="td-number text-right"></td>
          <td class="td-number">
            
          </td>
          <td class="td-number">
            <p>{{ $tblInventarios->comentarios }}</p>
          </td>
          <td class="td-actions">
            <a title="Editar"  href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>

          </td>
        </tr>
        @endforeach

        <tr>
          <td colspan="3"></td>
          <td class="td-total">Total</td>
          <td colspan="1" class="td-price">
            <small>€</small>2,346
          </td>
          <td colspan="1"></td>
          <td colspan="2" class="text-right">
            <button type="button" class="btn btn-info btn-round">Complete Purchase <i class="material-icons">keyboard_arrow_right</i></button>
          </td>
        </tr>
      </tbody>
    </table>