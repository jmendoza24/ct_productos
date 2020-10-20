    <table class="table table-striped table-bordered zero-configuration6" id="tblProductos-table">
        <thead>
        <tr class="gris_barra">
        <th>Foto</th>
        <th>Producto ID</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Categoría</th>
        <th>Subcategoría</th>
        <th></th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblProductos as $tblProductos)
            <tr style="background-color: white">
            <td>
             <div class="img-container" style="width: 150px;height:150px">

                @if(empty($tblProductos->foto1))
                @else
                        <img class="rounded img-fluid" src=data:image/jpeg;base64,{{ base64_encode(Storage::get($tblProductos->foto1)) }}>
                    </div>    
                @endif
            </div>
            </td>    
            <td><p style="">{{ $tblProductos->id_producto }}</p></td>
            <td><p style="width: 140px">{{ $tblProductos->nombre }}</p></td>
            <td><p style="width: 260px">{{ $tblProductos->descripcion }}</p></td>
            <td><p style="width: 90px">{{ $tblProductos->categoria }}</p></td>
            <td><p style="width: 90px">{{ $tblProductos->sub_categoria }}</p></td>

            <td>
                <div class='btn-group'>   
                    <a title="Editar"  href="{{ route('tblProductos.edit', [$tblProductos->id]) }}" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_producto({{ $tblProductos->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input  onchange="activa_producto({{ $tblProductos->id }})" type="checkbox" {{ ($tblProductos->activo==1) ? 'checked' : '' }}>
                          <span class="toggle "></span>
                        </label>
                    </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
