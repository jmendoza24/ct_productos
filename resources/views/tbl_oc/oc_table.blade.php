        <table class="table table-striped table-bordered zero-configuration6" id="tbl_oc-table3">
        <thead>
        <tr class="gris_barra">
        <th>ID OC.</th>   
        <th>Cliente</th>
        <th>Comentarios</th>
        <th>Total</th>
        <th>Fecha</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tblCotizaciones as $tblCotizaciones)
            @if($tblCotizaciones->estatus==1)
            <tr style="background-color: white">
                <td><p style="">{{ $tblCotizaciones->id }}</p></td>
                <td><p style="">@if($tblCotizaciones->id_tipo_cliente==1) {{ $tblCotizaciones->cliente_registrado }}  @elseif($tblCotizaciones->id_tipo_cliente==0)    @if(empty($tblCotizaciones->cliente)) <p style="color:rgb(255, 0, 16);"> Cotización incompleta </p>  @else   {{ $tblCotizaciones->cliente }}  @endif  @else <p style="color:rgb(255, 0, 16);"> Cotización incompleta </p> @endif <br>{{ $tblCotizaciones->correo }} &nbsp;&nbsp; {{ $tblCotizaciones->telefono }} </p></td>
                <td><textarea class="form-control" id="descripcion{{ $tblCotizaciones->id }}" onchange="guarda_comentarios_cotizacion({{ $tblCotizaciones->id }})">{{ $tblCotizaciones->descripcion }}</textarea></td>
                <td><p style="text-align: right"><p>${{ number_format($tblCotizaciones->totales,2) }}</p></td>
                <td><p style="width: 80px"><p>{{ $tblCotizaciones->created_at}}</p></td>
                <td>      
                    <div class='btn-group'>   
                        <a title="Convertir a Cot." onclick="convertir_cot({{ $tblCotizaciones->id }})" href="#" class='btn btn-link'><span class="texto_verde material-icons md-20">sync_alt</span></a> 
                        <a title="Borrar" onclick="borra_cotizacion({{ $tblCotizaciones->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                    </div>
                </td>            
            </tr>
            @endif

        @endforeach
        </tbody>
    </table>
