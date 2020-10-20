
@php
header("Pragma: public");
header("Expires: 0");
$filename = "Lista_de_precios.xls"; 
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
@endphp
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />

    <table class="table table-striped table-bordered zero-configuration18" id="tblListaPrecios-table">
        <thead>
        <tr class="gris_barra">
        <th>ID DB producto</th>	
        <th>ID producto</th>
        <th>Producto</th>
        <th>Categoría</th>
        <th>Subcategoría</th>   
        <th>Moneda</th> 
        <th>{{ $titulos->titulo1 }}</th>
        <th>{{ $titulos->titulo2 }}</th>
        <th>{{ $titulos->titulo3 }}</th>
        <th>{{ $titulos->titulo4 }}</th>
        <th>{{ $titulos->titulo5 }}</th>
        
        </tr>
        
        <tbody>
        @foreach($tblListaPrecios as $tblListaPrecios)
            <tr style="background-color: white">
           	<td><p style="">{{ $tblListaPrecios->lpid }}</p></td>
            <td><p style="">{{ $tblListaPrecios->pid }}</p></td>
            <td><p style="">{{ $tblListaPrecios->nombre }}</p></td>
            <td><p style="">{{ $tblListaPrecios->categoria }}</p></td>
            <td><p style="">{{ $tblListaPrecios->sub_categoria }}</p></td>
            <td>
                <p style="">
                    @if($tblListaPrecios->id_vende==0) MX @elseif($tblListaPrecios->id_vende==1) US @else Desconocido @endif
                </p>
            </td>
            <td><p style="">{{ $tblListaPrecios->lista1 }}</p></td>
            <td><p style="">{{ $tblListaPrecios->lista2 }}</p></td>
            <td><p style="">{{ $tblListaPrecios->lista3 }}</p></td>
            <td><p style="">{{ $tblListaPrecios->lista4 }}</p></td>
            <td><p style="">{{ $tblListaPrecios->lista5 }}</p></td>
            

            </tr>
        @endforeach
        </tbody>
    </table>