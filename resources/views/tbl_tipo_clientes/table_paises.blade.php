    <table class="table table-striped table-bordered zero-configuration9" id="paises-table">
        <thead>
        <tr class="gris_barra">  
                <th>ID País.</th>
                <th>País</th>
                <th>Clave</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sql_pais as $sql_pais)
            <tr style="background-color: white">
                <td><p style="width: 180px">{{ $sql_pais->id }}</p></td>
                <td><p style="width: 180px">{{ $sql_pais->Pais }}</p></td>
                <td><p style="width: 180px">{{ $sql_pais->Codigo }}</p></td>
            </tr>
        @endforeach
        </tbody>
    </table>



