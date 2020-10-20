<br><br><br>
<table class="table table-striped table-bordered zero-configuration" id="catalogos_tallas-table">
    <thead>
        <tr class="gris_barra">
            <th>Id</th>
            <th>Talla</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($tallas as $t)
        <tr>
            <td>{{$t->id}}</td>
            <td><span style="cursor: pointer;" onclick="ver_catalogo(1,{{$t->id}},2,0)" data-toggle="modal" data-target="#myModal">{{$t->talla}}</span></td>
            <td><span title="Borrar" onclick="elimina_catalogo(1,{{$t->id}},'catalogos_tallas')" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></span></td>
        </tr>
    @endforeach
    </tbody>
</table>



