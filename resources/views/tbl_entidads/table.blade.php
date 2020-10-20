<div class="table-responsive">
    <table class="table" id="tblEntidads-table">
        <thead>
            <tr>
                <th>Nombre</th>
        <th>Rfc</th>
        <th>Telefono</th>
        <th>Director</th>
        <th>Correo</th>
        <th>Telefono2</th>
        <th>Direccion</th>
        <th>Logo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblEntidads as $tblEntidad)
            <tr>
                <td>{{ $tblEntidad->nombre }}</td>
            <td>{{ $tblEntidad->rfc }}</td>
            <td>{{ $tblEntidad->telefono }}</td>
            <td>{{ $tblEntidad->director }}</td>
            <td>{{ $tblEntidad->correo }}</td>
            <td>{{ $tblEntidad->telefono2 }}</td>
            <td>{{ $tblEntidad->direccion }}</td>
            <td>{{ $tblEntidad->logo }}</td>
                <td>
                    {!! Form::open(['route' => ['tblEntidads.destroy', $tblEntidad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tblEntidads.show', [$tblEntidad->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tblEntidads.edit', [$tblEntidad->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
