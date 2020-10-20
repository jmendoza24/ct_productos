
    <table class="table table-striped table-bordered zero-configuration16" id="tblFabricantes-table">
        <thead>
        <tr class="gris_barra">
        <th>ID Fabricante</th>    
        <th>Nombre fabricante</th>
        <th>Razón social</th>    
        <th>Teléfono</th>
      
        </tr>
        </thead>
        <tbody>
        @foreach($tblFabricantes as $tblFabricantes)
            <tr style="background-color: white">
            <td><p style="">{{ $tblFabricantes->id }}</p></td>
            <td><p style="">{{ $tblFabricantes->nombre }}</p></td>
            <td><p style="">{{ $tblFabricantes->razon }}</p></td>
            <td><p style="">{{ $tblFabricantes->tel1 }}</p></td>
            </tr>
        @endforeach
        </tbody>
    </table>
