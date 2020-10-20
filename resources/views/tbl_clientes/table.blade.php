    <table class="table table-striped table-bordered zero-configuration2" id="tblClientes-table">
        <thead>
        <tr class="gris_barra">
        <th>Nombre</th>
        <th>Tipo cliente</th>    
        <th>Teléfono</th>
        <th>Lista de precios</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tblClientes as $tblClientes)
            <tr style="background-color: white">
            <td><p style="">{{ $tblClientes->nombre }}</p></td>
            <td><p style="">{{ $tblClientes->tipo }}</p></td>
            <td><p style="">{{ $tblClientes->telefono }}</p></td>
            <td>
                @if($tblClientes->id_tipo_precio==1)
                {{ $tbl_titulos_listas->titulo1 }}
                @elseif($tblClientes->id_tipo_precio==2)
                {{ $tbl_titulos_listas->titulo2 }}
                @elseif($tblClientes->id_tipo_precio==3)
                {{ $tbl_titulos_listas->titulo3 }}
                @elseif($tblClientes->id_tipo_precio==4)
                {{ $tbl_titulos_listas->titulo4 }}
                @elseif($tblClientes->id_tipo_precio==5)
                {{ $tbl_titulos_listas->titulo5 }}
                @else
                {{ $tbl_titulos_listas->titulo1 }}
                @endif
            </td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar"  href="{{ route('tblClientes.edit', [$tblClientes->id]) }}" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_cliente({{ $tblClientes->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input onchange="activa_cliente({{ $tblClientes->id }})" type="checkbox" {{ ($tblClientes->activo==1) ? 'checked' : '' }}>
                          <span class="toggle"></span>
                        </label>
                    </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
