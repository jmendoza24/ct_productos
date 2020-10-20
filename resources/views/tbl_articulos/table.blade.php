<div class="table-responsive">
    <table class="table" id="tblArticulos-table">
        <thead>
            <tr>
                <th>Id Modulo</th>
        <th>Articulo</th>
        <th>Contenido</th>
        <th>Fragmento</th>
        <th>Monto</th>
        <th>Id Moneda</th>
        <th>Activo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tblArticulos as $tblArticulos)
            <tr>
                <td>{{ $tblArticulos->id_modulo }}</td>
            <td>{{ $tblArticulos->articulo }}</td>
            <td>{{ $tblArticulos->contenido }}</td>
            <td>{{ $tblArticulos->fragmento }}</td>
            <td>{{ $tblArticulos->monto }}</td>
            <td>{{ $tblArticulos->id_moneda }}</td>
            <td>{{ $tblArticulos->activo }}</td>
                <td>
                    {!! Form::open(['route' => ['tblArticulos.destroy', $tblArticulos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tblArticulos.show', [$tblArticulos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tblArticulos.edit', [$tblArticulos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
