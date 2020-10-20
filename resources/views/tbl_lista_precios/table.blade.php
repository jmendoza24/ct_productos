    <table class="table table-striped table-bordered zero-configuration18" id="tblListaPrecios-table">
        <thead>
        <tr class="gris_barra">
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Producto ID" disabled="disabled"></th>
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Producto" disabled="disabled"></th>
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Categoría" disabled="disabled"></th>    
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Subcategoría" disabled="disabled"></th>  
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul" value="Moneda" disabled="disabled"></th>    
        <th><input style="font-size: 15px;font-weight: bold; width: 140px;"type="text" class="form-control texto_azul"name="titulo1" id="titulo1" value="{{ $titulos->titulo1 }}" onchange="guarda_titulo()"></th>
        <th><input style="font-size: 15px;font-weight: bold;width: 140px" type="text" class="form-control texto_azul" name="titulo2" id="titulo2" value="{{ $titulos->titulo2 }}" onchange="guarda_titulo()"></th>
        <th><input style="font-size: 15px;font-weight: bold;width: 140px" type="text" class="form-control texto_azul" name="titulo3" id="titulo3" value="{{ $titulos->titulo3 }}" onchange="guarda_titulo()"></th>
        <th><input style="font-size: 15px;font-weight: bold;width: 140px" type="text" class="form-control texto_azul" name="titulo4" id="titulo4" value="{{ $titulos->titulo4 }}" onchange="guarda_titulo()"></th>
        <th><input style="font-size: 15px;font-weight: bold;width: 140px" type="text" class="form-control texto_azul" name="titulo5" id="titulo5" value="{{ $titulos->titulo5 }}" onchange="guarda_titulo()"></th>

        </tr>
        
        <tbody>
        @foreach($tblListaPrecios as $tblListaPrecios) 
            <tr style="background-color: white">
            <td><p style="">{{ $tblListaPrecios->idp }}</p></td>
            <td><p style="">{{ $tblListaPrecios->nombre }}</p></td>

            <td><p style="">{{ $tblListaPrecios->categoria }}</p></td>
            <td><p style="">{{ $tblListaPrecios->sub_categoria }}</p></td>
            <td>
                <p style="">
                    @if($tblListaPrecios->id_vende==0) MX @elseif($tblListaPrecios->id_vende==1) US @else Desconocido @endif
                </p>
            </td>
            <td><p style=""><input type="text" class="form-control currency" name="lista1" id="lista1{{ $tblListaPrecios->pid }}" value="{{ $tblListaPrecios->lista1 }}" onchange="guarda_costo({{ $tblListaPrecios->pid }})"></p></td>
            <td><p style=""><input type="text" class="form-control currency" name="lista2" id="lista2{{ $tblListaPrecios->pid }}" value="{{ $tblListaPrecios->lista2 }}" onchange="guarda_costo({{ $tblListaPrecios->pid }})"></p></td>
            <td><p style=""><input type="text" class="form-control currency" name="lista3" id="lista3{{ $tblListaPrecios->pid }}" value="{{ $tblListaPrecios->lista3 }}" onchange="guarda_costo({{ $tblListaPrecios->pid }})"></p></td>
            <td><p style=""><input type="text" class="form-control currency" name="lista4" id="lista4{{ $tblListaPrecios->pid }}" value="{{ $tblListaPrecios->lista4 }}" onchange="guarda_costo({{ $tblListaPrecios->pid }})"></p></td>
            <td><p style=""><input type="text" class="form-control currency" name="lista5" id="lista5{{ $tblListaPrecios->pid }}" value="{{ $tblListaPrecios->lista5 }}" onchange="guarda_costo({{ $tblListaPrecios->pid }})"></p></td>
            
            
            
            </tr>
        @endforeach
        </tbody>
    </table>