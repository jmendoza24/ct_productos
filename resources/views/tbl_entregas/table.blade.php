    <table class="table table-striped table-bordered zero-configuration5" id="tblEntregas-table">
        <thead>
       <tr class="gris_barra">
        <th>Direccion</th>
        <th>Colonia</th>
        <th>Cp</th>
        <th>Edo.</th>
        <th>Mun.</th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblEntregas as $tblEntregas)
            <tr>
            <td><p style="">{{ $tblEntregas->direccion }}</p></td>
            <td><p style="">{{ $tblEntregas->colonia }}</p></td>
            <td><p style="">{{ $tblEntregas->cp }}</p></td>
            <td><p style="">{{ $tblEntregas->estado }}</p></td>
            <td><p style="">{{ $tblEntregas->municipio }}</p></td>
                <td>
                     <div class='btn-group'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="direccion_cliente(1,{{ $tblEntregas->ide }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_entrega({{ $tblEntregas->ide }},{{ $tblEntregas->id_cliente }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-24">delete_sweep</span></a>
                        
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
