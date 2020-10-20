<div class="table-responsive">
    <table class="table" id="tblTipoPrecios-table">
        <thead>
            <tr>
                <th>Id Producto</th>
        <th>Id Cliente</th>
        <th>Costo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblTipoPrecios as $tblTipoPrecio)
            <tr>
            <td>{{ $tblTipoPrecio->id_producto }}</td>
            <td>{{ $tblTipoPrecio->id_cliente }}</td>
            <td>{{ $tblTipoPrecio->costo }}</td>
                <td>
                    {!! Form::open(['route' => ['tblTipoPrecios.destroy', $tblTipoPrecio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tblTipoPrecios.show', [$tblTipoPrecio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tblTipoPrecios.edit', [$tblTipoPrecio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
