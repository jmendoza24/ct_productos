    <table class="table table-striped table-bordered zero-configuration" id="tblModulos-table">
        <thead>
       <tr class="gris_barra">
        <th>ID dirección</th>
        <th>Dirección</th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblModulos as $tblModulos)
            <tr>
            <td><p style="">{{ $tblModulos->id }}</p></td>
            <td><p style="">{{ $tblModulos->modulo }}</p></td>
            </tr>
        @endforeach
        </tbody>
    </table>



