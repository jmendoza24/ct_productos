    <table class="table table-striped table-bordered zero-configuration7" id="estados-table">
        <thead>
        <tr class="gris_barra">  
                <th>ID Edo.</th>
                <th>Estado</th>
                <th>Clave</th>
                <th>Abrev</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sql_estados as $sql_estados)
            <tr style="background-color: white">
                <td><p style="width: 180px">{{ $sql_estados->id }}</p></td>
                <td><p style="width: 180px">{{ $sql_estados->estado }}</p></td>
                <td><p style="width: 180px">{{ $sql_estados->clave }}</p></td>
                <td><p style="width: 180px">{{ $sql_estados->Abrev }}</p></td>  
            </tr>
        @endforeach
        </tbody>
    </table>



