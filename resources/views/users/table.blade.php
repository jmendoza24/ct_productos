    <table class="table table-striped table-bordered zero-configuration6" id="users-table">
        <thead>
        <tr class="gris_barra">
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th></th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr style="background-color: white">
            <td><p style="">{{ $users->name }}</p></td>
            <td><p style="">{{ $users->email }}</p></td>
            <td><p style="">@if($users->id_tipo_usuario==2) Vendedor @else Administrador @endif</p></td>
            <td>
                <div class='btn-group'>   
                    <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="usuarios(1,{{ $users->id }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Borrar" onclick="borra_usuario({{ $users->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-24">delete_sweep</span></a>
                </div>
            </td>
            <td>
                <div class="togglebutton">
                        <label>
                          <input  onchange="activa_usuario({{ $users->id }})" type="checkbox" {{ ($users->activo==1) ? 'checked' : '' }}>
                          <span class="toggle "></span>
                        </label>
                    </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>



