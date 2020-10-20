    <table class="table table-striped table-bordered zero-configuration4" id="tblFormatos-table">
        <thead>
       <tr class="gris_barra">
        <th>Dirección</th>
        <th>Servicio</th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblFormatos as $tblFormatos)
            <tr>
            <td><p style="width: 100px">Registro civil</p></td>
            <td><p style="">{{ $tblFormatos->servicio }}</p></td>
            <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="servicio(1,{{ $tblFormatos->id }},1)" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Subservicios" data-toggle="modal" data-target="#myModal" onclick="subservicio({{ $tblFormatos->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">playlist_add</span></a>
                        <a title="Borrar" onclick="borra_servicio({{ $tblFormatos->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



