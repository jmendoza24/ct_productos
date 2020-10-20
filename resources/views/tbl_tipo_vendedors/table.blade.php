    <table class="table table-striped table-bordered zero-configuration12" id="tblTipovendedores-table">
        <thead>
        <tr class="gris_barra">
                <th>ID Tipo vendedor</th>
                <th>Tipo vendedor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblTipoVendedors as $tblTipoVendedor)
            <tr style="background-color: white">
                <td><p style="width: 180px">{{ $tblTipoVendedor->id }}</p></td>
                <td><p style="width: 180px">{{ $tblTipoVendedor->tipo_vendedor }}</p></td>
                <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="tipo_vendedor(1,{{ $tblTipoVendedor->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_tipo_vendedor({{ $tblTipoVendedor->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



