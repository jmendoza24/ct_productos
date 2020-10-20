    <table class="table table-striped table-bordered zero-configuration19" id="tblColors-table">
        <thead>
        <tr class="gris_barra">
            <th>ID Color</th>  
            <th>Color</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblColors as $tblColor)
            <tr style="background-color: white">
                <td><p>{{ $tblColor->id }}</p></td>
                <td><p>{{ $tblColor->color }}</p></td>
                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="colores(1,{{ $tblColor->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_color({{ $tblColor->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

