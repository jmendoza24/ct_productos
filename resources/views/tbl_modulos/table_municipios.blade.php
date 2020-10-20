    <table class="table table-striped table-bordered zero-configuration8" id="municipios-table">
        <thead>
        <tr class="gris_barra">  
                <th>ID Mun.</th>
                <th>Municipio</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sql_municipios as $sql_municipios)
            <tr style="background-color: white">
                <td><p style="width: 180px">{{ $sql_municipios->id }}</p></td>
                <td><p style="width: 180px">{{ $sql_municipios->municipio }}</p></td>
                <td><p style="width: 180px">{{ $sql_municipios->estado }}</p></td>

            </tr>
        @endforeach
        </tbody>
    </table>



