    <table class="table table-striped table-bordered zero-configuration6" id="tblProductos-table">
        <thead>
        <tr class="gris_barra">
        <th>Foto</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Categoría</th>
        <th>Precio</th>
        <th>Agregar</th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblProductos as $tblProductos)
            <tr style="background-color: white">
            <td class="text-center">
             <div class="img-container text-center" >
 
                 @if(empty($tblProductos->foto1))
                @else
                        <img class="rounded img-fluid" style="width: 160px;height:120px" src=data:image/jpeg;base64,{{ base64_encode(Storage::get($tblProductos->foto1)) }}>
                    </div>    
                @endif 
            </div>
            </td>  
            <td><p style="width: 90px">{{ $tblProductos->nombre }}</p></td>
            <td><p style="width: 200px">{{ $tblProductos->descripcion }}</p></td>

            <td><p style="width: 90px">{{ $tblProductos->categoria }}</p></td>
             @if($actual->id_tipo_cliente==0) 
                         <td class="text-right"><p>$ @if($actual->lista==1) {{  number_format($tblProductos->lista1,2) }} @elseif($actual->lista==2) {{ number_format($tblProductos->lista2,2)}} @elseif($actual->lista==3) {{  number_format($tblProductos->lista3,2) }} @elseif($actual->lista==4) {{  number_format($tblProductos->lista4,2) }} @elseif($actual->lista==5) {{  number_format($tblProductos->lista5,2) }} @else {{  number_format($tblProductos->lista1,2) }} @endif

             @else 
                         <td class="text-right"><p>$ @if($sql_cliente->id_tipo_precio==1) {{  number_format($tblProductos->lista1,2) }} @elseif($sql_cliente->id_tipo_precio==2) {{ number_format($tblProductos->lista2,2)}} @elseif($sql_cliente->id_tipo_precio==3) {{  number_format($tblProductos->lista3,2) }} @elseif($sql_cliente->id_tipo_precio==4) {{  number_format($tblProductos->lista4,2) }} @elseif($sql_cliente->id_tipo_precio==5) {{  number_format($tblProductos->lista5,2) }} @else {{  number_format($tblProductos->lista1,2) }} @endif

             @endif
                
               </p>
            </td>
            <td>

                <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" {{ ($tblProductos->idp==$tblProductos->id_p) ? 'checked' : '' }}  onchange="agrega_producto({{ $tblProductos->id_p }},{{ $num_cot }})">
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>

            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
