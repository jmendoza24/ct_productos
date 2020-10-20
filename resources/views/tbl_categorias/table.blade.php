    <table class="table table-striped table-bordered zero-configuration14" id="tblCategorias-table">
        <thead>
        <tr class="gris_barra">
            <th>ID categoría</th>  
            <th>Categoría</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblCategorias as $tblCategorias)
            <tr style="background-color: white">
                <td><p>{{ $tblCategorias->id }}</p></td>
                <td><p>{{ $tblCategorias->categoria }}</p></td>
                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="categoria(1,{{ $tblCategorias->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_categoria({{ $tblCategorias->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

