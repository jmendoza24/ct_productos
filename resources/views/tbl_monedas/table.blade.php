    <table class="table table-striped table-bordered zero-configuration13" id="tblMonedas-table">
        <thead>
        <tr class="gris_barra">
            <th>ID Moneda</th>  
            <th>Moneda</th> 
            <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblMonedas as $tblMonedas)
            <tr style="background-color: white">
                <td><p>{{ $tblMonedas->id }}</p></td>
                <td><p>{{ $tblMonedas->moneda }}</p></td>
                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="moneda(1,{{ $tblMonedas->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_moneda({{ $tblMonedas->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

