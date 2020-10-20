@php
header("Pragma: public");
header("Expires: 0");
$filename = "reporte.xls"; 
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
@endphp 
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />

<br>
<table class="table table-striped table-bordered"  style=" width: 100%">
    <thead>

        <tr class="gris_barra">
        <th>ID OC</th>
        <th>Nombre Cotización</th>
        <th>Cliente</th>
        <th>Fecha</th>
        <th>TC</th>
        <th>Lista autorizada</th>
        <th>ID Producto</th>
        <th>Categoría</th>
        <th>Subcategoría</th>
        <th>Cantidad</th>
        <th>Precio unit USD</th>
        <th>Precio unit MXN</th>
        <th>Descuento</th>
        <th>Total MXN</th>
        <th>Subtotal cot</th>
        <th>Descuento</th>
        <th>IVA</th>
        <th>Total Cot</th>
        <th>Anticipo</th>
        <th>Flete</th>

      </tr>
    </thead>
    <tbody>
        @foreach($reportes as $reportes)
        <tr>
            <td>{!! $reportes->id_oc !!}</td>
            <td>{!! $reportes->nombre_cotizacion !!}</td>
            @if($reportes->id_tipo_cliente==0)
                        <td>{!! $reportes->cliente !!}</td>
            @else
                        <td>{!! $reportes->nombre !!}</td>
            @endif
            <td>{!! $reportes->fecha_cot !!}</td>
            <td style="text-align: right">${{ number_format($reportes->tipo_cambio,2) }}</td>
            <td>
              

                @if($reportes->lpc==1)
                      {{ $lista->titulo1 }}
                    @elseif($reportes->lpc==2)
                      {{ $lista->titulo2 }}
                    @elseif($reportes->lpc==3)
                      {{ $lista->titulo3 }}
                    @elseif($reportes->lpc==4)
                      {{ $lista->titulo4 }}
                    @elseif($reportes->lpc==5)
                      {{ $lista->titulo5 }}
                    @endif

            </td>
            <td>{!! $reportes->id_producto !!}</td>
            <td>{!! $reportes->categoria !!}</td>
            <td>{!! $reportes->sub_categoria !!}</td>
            <td>{!! $reportes->cantidad !!}</td>


            @if($reportes->id_vende==1)


                @if($reportes->lpc==1)
                        <td style="text-align: right">${!! number_format($reportes->lista1*$reportes->tipo_cambio,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista1*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2) !!}</td>

                    @elseif($reportes->lpc==2)
                        <td style="text-align: right">${!! number_format($reportes->lista2*$reportes->tipo_cambio,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista2*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2) !!}</td>

                    @elseif($reportes->lpc==3)
                        <td style="text-align: right">${!! number_format($reportes->lista3*$reportes->tipo_cambio,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista3*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2) !!}</td>

                    @elseif($reportes->lpc==4)
                        <td style="text-align: right">${!! number_format($reportes->lista4*$reportes->tipo_cambio,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista4*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2) !!}</td>

                    @elseif($reportes->lpc==5)
                        <td style="text-align: right">${!! number_format($reportes->lista5*$reportes->tipo_cambio,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista5*$reportes->tipo_cambio*$reportes->dcdescuento)/100 ,2) !!}</td>

                    @endif
            @else
                                    <td style="text-align: right">${!! number_format(0,2) !!}</td>

            @endif



            @if($reportes->id_vende==0)
                    @if($reportes->lpc==1) 
                        <td style="text-align: right">${!! number_format($reportes->lista1,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista1*$reportes->dcdescuento)/100 ,2) !!}</td>


                    @elseif($reportes->lpc==2)
                        <td style="text-align: right">${!! number_format($reportes->lista2,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista2*$reportes->dcdescuento)/100 ,2) !!}</td>


                    @elseif($reportes->lpc==3)
                        <td style="text-align: right">${!! number_format($reportes->lista3,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista3*$reportes->dcdescuento)/100 ,2) !!}</td>


                    @elseif($reportes->lpc==4)
                        <td style="text-align: right">${!! number_format($reportes->lista4,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista4*$reportes->dcdescuento)/100 ,2) !!}</td>


                    @elseif($reportes->lpc==5)
                        <td style="text-align: right">${!! number_format($reportes->lista5,2) !!}</td>
                        <td style="text-align: right">${!! number_format( ($reportes->lista5*$reportes->dcdescuento)/100 ,2) !!}</td>


                    @endif
            @else
                <td style="text-align: right">${!! number_format(0,2) !!}</td>


            @endif 

            <td style="text-align: right">${!! number_format($reportes->tot_fila,2) !!}</td>
            <td style="text-align: right">${!! number_format($reportes->tot_filas,2) !!}</td>
            <td style="text-align: right">${!! number_format(($reportes->tot_filas*$reportes->descuento_aplicado)/100,2) !!}</td>
            <td style="text-align: right">${!! number_format((($reportes->tot_filas*$reportes->iva)/100),2) !!}</td>
            <td style="text-align: right">${!! number_format($reportes->totales,2) !!}</td>
            <td style="text-align: right">${!! number_format($reportes->anticipo,2) !!}</td>
            <td style="text-align: right">${!! number_format($reportes->flete,2) !!}</td>


        </tr>
    @endforeach
  
    </tbody>
  </table>
