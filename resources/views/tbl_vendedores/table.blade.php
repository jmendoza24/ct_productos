
    <table class="table table-striped table-bordered zero-configuration" id="tblVendedores-table">
      <thead>
        <tr class="gris_barra">
        <th>Puesto</th>    
        <th>Nombre</th>
        <th>Teléfono</th>
        <th></th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblVendedores as $tblVendedores)
            <tr style="background-color: white">
            <td><p style="width: 180px">{{ $tblVendedores->puesto }}</p></td>    
            <td><p style="width: 180px">{{ $tblVendedores->nombre }}</p></td>
            <td><p style="width: 180px">{{ $tblVendedores->telefono }}</p></td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="vendedores(1,{{ $tblVendedores->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_vendedor({{ $tblVendedores->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-24">delete_sweep</span></a>
                    
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input  onchange="activa_vendedor({{ $tblVendedores->id }})" type="checkbox" {{ ($tblVendedores->activo==1) ? 'checked' : '' }}>
                          <span class="toggle "></span>
                        </label>
                    </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>