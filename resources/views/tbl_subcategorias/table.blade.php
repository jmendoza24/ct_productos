    <table class="table table-striped table-bordered zero-configuration15" id="tblSubcategorias-table">
        <thead>
        <tr class="gris_barra">
            <th>ID subcategoría</th>  
            <th>Sub categoría</th>
            <th>Categoría</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblSubcategorias as $tblSubcategorias)
            <tr style="background-color: white">
                <td><p>{{ $tblSubcategorias->idsc }}</p></td>
                <td><p>{{ $tblSubcategorias->sub_categoria }}</p></td>
                <td><p>{{ $tblSubcategorias->categoria }}</p></td>

                 <td class="text-center">   
                     <div class='btn-group text-center'>   
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="sub_categoría(1,{{ $tblSubcategorias->idsc }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_subcategoria({{ $tblSubcategorias->idsc }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

