    <table class="table table-striped table-bordered zero-configuration" id="tblTipoClientes-table">
        <thead>
        <tr class="gris_barra">
                <th>ID Tipo cliente</th>
                <th>Tipo cliente</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblTipoCliente as $tblTipoCliente)
            <tr style="background-color: white">
                <td><p style="width: 180px">{{ $tblTipoCliente->id }}</p></td>
                <td><p style="width: 180px">{{ $tblTipoCliente->tipo }}</p></td>
                <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="tipo_cliente(1,{{ $tblTipoCliente->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_tipo_cliente({{ $tblTipoCliente->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



