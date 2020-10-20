    <table class="table table-striped table-bordered zero-configuration16" id="tblContactosFabricantes-table">
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
        @foreach($tblContactosFabricantes as $tblContactosFabricantes)
            <tr style="background-color: white">
            <td><p style="">{{ $tblContactosFabricantes->nombre }}</p></td>
            <td><p style="">{{ $tblContactosFabricantes->puesto }}</p></td>
            <td><p style="">{{ $tblContactosFabricantes->telefono }}</p></td>
            <td><p style="">{{ $tblContactosFabricantes->correo }}</p></td>
                <td>
                    <div class='btn-group'>   
                    <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="contactos_fabricantes(1,{{ $tblContactosFabricantes->id }})"  href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_contacto_fabricante({{ $tblContactosFabricantes->id }},{{ $tblContactosFabricantes->id_fabricante  }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
