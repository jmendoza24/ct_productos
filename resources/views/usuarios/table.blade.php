  <table class="table table-striped table-bordered  table_display7 basico" id="tbl_usuarios" >
  <thead>
    <tr class="gris">
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo de Usuario</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuarios)
        <tr>
            <td>{!! $usuarios->name !!}</td>
            <td>{!! $usuarios->email !!}</td>
            <td>
               @if($usuarios->id_tipo_usuario==0)
                  Administrador
               @elseif($usuarios->id_tipo_usuario==1)
                 Supervisor
               @elseif($usuarios->id_tipo_usuario==2)
                 Compras
               @elseif($usuarios->id_tipo_usuario==3)
                 Contratista
               @endif
              
            </td>
            <td style="text-align: center">
                {!! Form::open(['route' => ['usuarios.destroy', $usuarios->id], 'method' => 'delete','id'=>'form_emple']) !!}
                 <div class="btn-group" role="group" aria-label="Second Group">   
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a class="btn  btn_naranja" href="{!! route('usuarios.edit', ['id'=>encrypt($usuarios->id)]) !!}"><i class="fa fa-pencil"></i></a>
                          <a class="btn  btn_gris" href="#" onclick="borra_crf_usuarios({{ $usuarios->id }})"><i class="fa fa-trash"></i></a>
                      </div>                
                </div>
                {!! Form::close() !!}
            </td>
            
        </tr>
    @endforeach
    </tbody>
</table>




