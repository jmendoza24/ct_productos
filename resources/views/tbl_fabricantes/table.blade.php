
    <table class="table table-striped table-bordered zero-configuration16" id="tblFabricantes-table">
        <thead>
        <tr class="gris_barra">
        <th>Nombre fabricante</th>
        <th>Razón social</th>    
        <th>Teléfono</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tblFabricantes as $tblFabricantes)
            <tr style="background-color: white">
            <td><p style="">{{ $tblFabricantes->nombre }}</p></td>
            <td><p style="">{{ $tblFabricantes->razon }}</p></td>
            <td><p style="">{{ $tblFabricantes->tel1 }}</p></td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar"  href="{{ route('tblFabricantes.edit', [$tblFabricantes->id]) }}" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_fabricante({{ $tblFabricantes->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input onchange="activa_fabricante({{ $tblFabricantes->id }})" type="checkbox" {{ ($tblFabricantes->activo==1) ? 'checked' : '' }}>
                          <span class="toggle"></span>
                        </label>
                    </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
