    <table class="table table-striped table-bordered zero-configuration10" id="tblUnidades-table">
        <thead>
        <tr class="gris_barra">
            <th>ID Unidad</th>  
            <th>Unidad</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblUnidades as $tblUnidades)
            <tr style="background-color: white">
                <td><p>{{ $tblUnidades->id }}</p></td>
                <td><p>{{ $tblUnidades->unidad }}</p></td>
                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="unidad(1,{{ $tblUnidades->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_unidad({{ $tblUnidades->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
