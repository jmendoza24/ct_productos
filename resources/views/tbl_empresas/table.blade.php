<div class="table-responsive">
    <table class="table" id="tblEmpresas-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Nombre Contacto</th>
        <th>Correo</th>
        <th>Celular</th>
        <th>Face</th>
        <th>Insta</th>
        <th>Web</th>
        <th>Logo</th>
        <th>Condiciones</th>
        <th>Tipo Cambio</th>
        <th>Rfc</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblEmpresas as $tblEmpresa)
            <tr>
                <td>{{ $tblEmpresa->nombre }}</td>
            <td>{{ $tblEmpresa->direccion }}</td>
            <td>{{ $tblEmpresa->telefono }}</td>
            <td>{{ $tblEmpresa->nombre_contacto }}</td>
            <td>{{ $tblEmpresa->correo }}</td>
            <td>{{ $tblEmpresa->celular }}</td>
            <td>{{ $tblEmpresa->face }}</td>
            <td>{{ $tblEmpresa->insta }}</td>
            <td>{{ $tblEmpresa->web }}</td>
            <td>{{ $tblEmpresa->logo }}</td>
            <td>{{ $tblEmpresa->condiciones }}</td>
            <td>{{ $tblEmpresa->tipo_cambio }}</td>
            <td>{{ $tblEmpresa->rfc }}</td>
                <td>
                    {!! Form::open(['route' => ['tblEmpresas.destroy', $tblEmpresa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tblEmpresas.show', [$tblEmpresa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tblEmpresas.edit', [$tblEmpresa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
