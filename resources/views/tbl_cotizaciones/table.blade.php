        <table class="table table-striped table-bordered zero-configuration6" id="tblCotizaciones-table2">
        <thead>
        <tr class="gris_barra">
        <th>ID COT.</th>   
        <th>Cliente</th>
        <th>Comentarios</th>
        <th>Total</th>
        <th>Fecha</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tblCotizaciones as $tblCotizaciones) 
        @if($tblCotizaciones->estatus==0)

            <tr style="background-color: white">
                <td><p style=""><a href="#" class="texto_azul" data-toggle="modal" data-target="#myModal2" onclick="ver_cot({{ $tblCotizaciones->id }})">{{ $tblCotizaciones->id }}</a></p></td>
                <td><p style="">@if($tblCotizaciones->id_tipo_cliente==1) {{ $tblCotizaciones->cliente_registrado }}  @elseif($tblCotizaciones->id_tipo_cliente==0)    @if(empty($tblCotizaciones->cliente)) <p style="color:rgb(255, 0, 16);"> Cotización incompleta </p>  @else   {{ $tblCotizaciones->cliente }}  @endif  @else <p style="color:rgb(255, 0, 16);"> Cotización incompleta </p> @endif <br>{{ $tblCotizaciones->correo }} &nbsp;&nbsp; {{ $tblCotizaciones->telefono }} </p></td>
                <td><textarea class="form-control" id="descripcion{{ $tblCotizaciones->id }}" onchange="guarda_comentarios_cotizacion({{ $tblCotizaciones->id }})">{{ $tblCotizaciones->descripcion }}</textarea></td>
                <td><p style="text-align: right"><p>${{ number_format($tblCotizaciones->totales,2) }}</p></td>
                <td><p style="width: 80px"><p>{{ $tblCotizaciones->created_at}}</p></td>
                <td>
                <div class='btn-group'>   
                    <a title="Editar"  href="#" onclick="revive({{ $tblCotizaciones->id }})" class="btn btn-link" ><span class="texto_azul material-icons md-20">create</span></a>
                    <a title="Convertir OC" onclick="convertir_oc({{ $tblCotizaciones->id }})" href="#" class='btn btn-link'><span class="texto_verde material-icons md-20">done_outline</span></a> 
                    <a title="Borrar" onclick="borra_cotizacion({{ $tblCotizaciones->id }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a> 
                </div>
            </td>
            
            </tr>
        @endif      

        @endforeach
        </tbody>
    </table>
