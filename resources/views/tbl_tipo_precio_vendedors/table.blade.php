<div class="table-responsive">
    <table class="table" id="tblTipoPrecioVendedors-table">
        <thead>
            <tr>
                <th>Id Producto</th>
        <th>Id Vendedor</th>
        <th>Costo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblTipoPrecioVendedors as $tblTipoPrecioVendedor)
            <tr>
                <td>{{ $tblTipoPrecioVendedor->id_producto }}</td>
            <td>{{ $tblTipoPrecioVendedor->id_vendedor }}</td>
            <td>{{ $tblTipoPrecioVendedor->costo }}</td>
                <td>
                    {!! Form::open(['route' => ['tblTipoPrecioVendedors.destroy', $tblTipoPrecioVendedor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tblTipoPrecioVendedors.show', [$tblTipoPrecioVendedor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tblTipoPrecioVendedors.edit', [$tblTipoPrecioVendedor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
