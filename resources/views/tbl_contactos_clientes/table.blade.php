    <table class="table table-striped table-bordered zero-configuration4" id="tblContactosClientes-table">
        <thead>
        <tr class="gris_barra">
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tblContactosClientes as $tblContactosClientes)
            <tr style="background-color: white">
            <td><p style="">{{ $tblContactosClientes->nombre }}</p></td>
            <td><p style="">{{ $tblContactosClientes->puesto }}</p></td>
            <td><p style="">{{ $tblContactosClientes->telefono }}</p></td>
            <td><p style="">{{ $tblContactosClientes->correo }}</p></td>
                <td>
                    <div class='btn-group'>   
                    <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="contactos_clientes(1,{{ $tblContactosClientes->id }})"  href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_contacto_cliente({{ $tblContactosClientes->id }},{{ $tblContactosClientes->id_cliente  }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
