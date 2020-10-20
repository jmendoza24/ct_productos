<div class="table-responsive">
    <table class="table" id="tblDetalleCotizacions-table">
        <thead>
            <tr>
                <th>Id Cotizacion</th>
        <th>Id Producto</th>
        <th>Id Lista</th>
        <th>Costo</th>
        <th>Descuento</th>
        <th>Cantidad</th>
        <th>Comentarios Adicionales</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblDetalleCotizacions as $tblDetalleCotizacion)
            <tr>
                <td>{{ $tblDetalleCotizacion->id_cotizacion }}</td>
            <td>{{ $tblDetalleCotizacion->id_producto }}</td>
            <td>{{ $tblDetalleCotizacion->id_lista }}</td>
            <td>{{ $tblDetalleCotizacion->costo }}</td>
            <td>{{ $tblDetalleCotizacion->descuento }}</td>
            <td>{{ $tblDetalleCotizacion->cantidad }}</td>
            <td>{{ $tblDetalleCotizacion->comentarios_adicionales }}</td>
                <td>
                    {!! Form::open(['route' => ['tblDetalleCotizacions.destroy', $tblDetalleCotizacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tblDetalleCotizacions.show', [$tblDetalleCotizacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tblDetalleCotizacions.edit', [$tblDetalleCotizacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
