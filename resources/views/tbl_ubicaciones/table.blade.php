    <table class="table table-striped table-bordered zero-configuration3" id="tblUbicaciones-table">
        <thead>
       <tr class="gris_barra">
        <th>Dirección</th>
        <th>Estado</th>
        <th>Municipio</th>
        <th>Ubicación</th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblUbicaciones as $tblUbicaciones)
            <tr>
            <td><p style="">{{ $tblUbicaciones->modulo }}</p></td>
            <td><p style="">{{ $tblUbicaciones->estado }}</p></td>
            <td><p style="">{{ $tblUbicaciones->municipio }}</p></td>
            <td><p style="">{{ $tblUbicaciones->ubicacion }}</p></td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="usuariosx(1,{{ $tblUbicaciones->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_usuariox({{ $tblUbicaciones->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-24">delete_sweep</span></a>
                </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>



                