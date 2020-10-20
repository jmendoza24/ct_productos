    <table class="table table-striped table-bordered zero-configuration6" id="tblCostosServicios-table">
        <thead>
       <tr class="gris_barra">
        <th>Direcci贸n</th>
        <th>Servicio</th>
        <th>Subservicio</th>
        <th>Monto</th>
        <th>Moneda</th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblCostosServicios as $tblCostosServicios)
            <tr>
            <td><p style="width: 100px">Registro civil</p></td>
            <td><p style="width: 250px">{{ $tblCostosServicios->servicio }}</p></td>
            <td><p style="width: 200px">
                @if(empty($tblCostosServicios->subservicio)) 
                    Sin subservicio
                @else 
                    {{ $tblCostosServicios->subservicio }}
                @endif
                </p>
            </td>

            <td><p style="text-align: right">${{ number_format($tblCostosServicios->monto,2) }}</p></td>
            <td><p>@if($tblCostosServicios->moneda==1) pesos @else umas @endif</p></td>
            <td class="text-center">   
                     <div class='btn-group text-center'>  
                        <a title="Editar" data-toggle="modal" data-target="#myModal" onclick="costo_servicio(1,{{ $tblCostosServicios->id }},1,{{ $tblCostosServicios->id_servicio }})" href="#" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                        <a title="Borrar" onclick="borra_costo_servicio({{ $tblCostosServicios->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



