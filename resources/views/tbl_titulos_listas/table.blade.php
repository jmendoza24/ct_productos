<div class="table-responsive">
    <table class="table" id="tblTitulosListas-table">
        <thead>
            <tr>
                <th>Titulo1</th>
        <th>Titulo2</th>
        <th>Titulo3</th>
        <th>Titulo4</th>
        <th>Titulo5</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblTitulosListas as $tblTitulosLista)
            <tr>
                <td>{{ $tblTitulosLista->titulo1 }}</td>
            <td>{{ $tblTitulosLista->titulo2 }}</td>
            <td>{{ $tblTitulosLista->titulo3 }}</td>
            <td>{{ $tblTitulosLista->titulo4 }}</td>
            <td>{{ $tblTitulosLista->titulo5 }}</td>
                <td>
                    {!! Form::open(['route' => ['tblTitulosListas.destroy', $tblTitulosLista->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tblTitulosListas.show', [$tblTitulosLista->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tblTitulosListas.edit', [$tblTitulosLista->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
