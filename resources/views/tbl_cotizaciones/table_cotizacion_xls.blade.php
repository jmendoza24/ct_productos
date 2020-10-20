@php
header("Pragma: public");
header("Expires: 0");
$filename = "Cotizacion.xls"; 
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
@endphp 
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />

<br>
<table class="table table-striped table-bordered"  style=" width: 100%">
    <thead>
       <tr style="width: 100%" class="gris_barra">
        <th colspan="3" style="background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">Cliente:  @if($actual->id_cliente==0)  &nbsp;&nbsp;{{ $actual->cliente }}  @else    @if($actual->id_cliente==0)   @else &nbsp;&nbsp;{{ $sql_cliente->nombre }} @endif @endif</th>
        <th colspan="3" style="background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">Nombre cotización: &nbsp;&nbsp;{{ $actual->nombre }}</th>
        <th colspan="3" style="background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">Lista autorizada:  &nbsp;&nbsp;   {{ $lista }}</th>
      </tr>
      <tr style="width: 100%" class="gris_barra">
        <th colspan="3" style="background-color: white;border-left-color:white;border-right-color:white">Correo: &nbsp;&nbsp;{{ $actual->correo }}</th>
        <th colspan="3" style="background-color: white;border-left-color:white;border-right-color:white">Teléfono: &nbsp;&nbsp;{{ $actual->telefono }}</th>
        <th colspan="3" style="background-color: white;border-left-color:white;border-right-color:white">Tc: ${{ number_format($actual->tipo_cambio,2) }}</th>

      </tr> 
      <input type="hidden" name="idl" id="idl" value="{{ $idl }}">     
        <tr class="gris_barra">
        <th>Producto</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio unit. USD</th>
        <th>Precio unit. MXN</th>
        <th>Descuento</th>
        <th>Total MXN</th>
      </tr>
    </thead>
    <tbody>
      @php($total=0)
      @php($sub_total=0)
      @php($con_descuento=0)
      @php($con_iva=0)
      @php($iva=0)
      @php($anticipo=0) 
       @foreach($cotizados as $cotizados)
            <tr style="background-color: white">
              
            <td><p style="width: 100px">{{ $cotizados->nombre }}</p></td>
            <td><p style="width: 240px">{{ $cotizados->descripcion }}</p></td>
            <td>
              <p style="width: 100px">
                  @if(empty($cotizados->cantidad))
                        {{ number_format(0,2) }}
                  @else
                        {{ $cotizados->cantidad }}
                  @endif
                </p>
            </td>
            <td>
                <p style="width: 100px"> 
                  @if($cotizados->id_vende==1)

                                @if($idl==1)
                                               ${{ number_format($cotizados->lista1,2) }} 
                                @elseif($idl==2)
                                               ${{ number_format($cotizados->lista2,2) }} 

                                @elseif($idl==3)
                                               ${{ number_format($cotizados->lista3,2) }} 

                                @elseif($idl==4)
                                               ${{ number_format($cotizados->lista4,2) }} 
                                
                                @elseif($idl==5)

                                               ${{ number_format($cotizados->lista5,2) }} 

                                @endif


                            @else

                                               ${{ number_format(0,2) }} 

                            @endif


                </p>
            </td>
            
              <td>
                <p style="width: 100px">
                            @if(empty($cotizados->id_vende) || $cotizados->id_vende==0)

                                @if($idl==1)
                                               ${{ number_format($cotizados->lista1,2) }} 

                                @elseif($idl==2)
                                               ${{ number_format($cotizados->lista2,2) }} 

                                @elseif($idl==3)
                                               ${{ number_format($cotizados->lista3,2) }} 

                                @elseif($idl==4)
                                               ${{ number_format($cotizados->lista4,2) }} 
                                
                                @elseif($idl==5)
                                               ${{ number_format($cotizados->lista5,2) }} 

                                @endif


                            @else

                                    @if($idl==1)
                                                ${{ number_format($cotizados->lista1*$actual->tipo_cambio,2) }}
                                    @elseif($idl==2)
                                                ${{ number_format($cotizados->lista2*$actual->tipo_cambio,2) }}

                                    @elseif($idl==3)
                                                ${{ number_format($cotizados->lista3*$actual->tipo_cambio,2) }}

                                    @elseif($idl==4)
                                                ${{ number_format($cotizados->lista4*$actual->tipo_cambio,2) }}
                                    
                                    @elseif($idl==5)
                                                ${{ number_format($cotizados->lista5*$actual->tipo_cambio,2) }}

                                    @endif
                            @endif

                </p>
            </td>
            
            <td>
              <p style="width: 100px">
                    @if(empty($cotizados->descuento))
                                0%
                    @else
                                {{ $cotizados->descuento }}%
                    @endif

                </p> 
            </td>
            <td>
                     ${{ number_format(($cotizados->costo*$cotizados->cantidad)-(($cotizados->costo*$cotizados->cantidad)*($cotizados->descuento/100)),0) }}
            </td>
            
        </tr>
            @php($total=($cotizados->costo*$cotizados->cantidad)-(($cotizados->costo*$cotizados->cantidad)*($cotizados->descuento/100)))
            @php($sub_total+=$total)
          @endforeach
          @php($con_descuento=($sub_total*($actual->descuento_aplicado/100)))
          @php($iva=((($sub_total-$con_descuento)+$actual->flete)*($actual->iva/100)))
          @php($con_iva=$sub_total-$con_descuento+$iva +$actual->flete)
          @php($anticipo= $con_iva*($actual->anticipo/100))
           <tr style="width: 100%" class="gris_barra" style="color: gray" >
                <td  colspan="6" class="gris_barra" style="text-align: left;"></td>
                <td  class="gris_barra" style="text-align: right;"><strong>Sub Total:</strong></td> 
                <td  class="gris_barra" style="text-align: right;">${{ number_format($sub_total,2) }}</td>
                <td  class="gris_barra" style="text-align: right;"><strong></strong> </td>

              </tr>
            
              <tr style="width: 100%"  style="color: gray; background-color: white" >
                <td colspan="6" style="text-align: right;background-color: white"><strong>Descuento autorizado:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                         {{ $actual->descuento_aplicado }}% 
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: "><input style="width: 130px;text-align: right;" type="text" id="con_descuento" class="form-control currency" value="$ {{$con_descuento }}" disabled="disabled"></td>
                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
              <tr style="width: 100%"  style="color: gray;" >
                <td colspan="6" style="background-color: white;text-align:right"><strong>Flete estimado:</strong></td> 
                
                <td  style="background-color: white;text-align: right; "></td>
                <td  style="background-color: white;text-align: ">
                    @if(empty($actual->flete))
                    ${{ number_format(0,2) }}
                    @else
                    ${{ number_format($actual->flete,2) }}
                    @endif
                </td>
                <td  style="background-color: white;text-align: right; "></td>
              </tr>
            <tr style="width: 100%"  style="color: gray; background-color: white" >
                <td colspan="6" style="text-align: right;background-color: white"><strong>I.V.A:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                         {{ $actual->iva }}% 
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: ">${{ number_format($iva,2) }}</td>
                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
              
              
             <tr style="width: 100%"  style="color: gray;" >
                <td colspan="6" style="background-color: white;text-align:right"><strong>Total:</strong></td> 
                <td  style="background-color: white;text-align: "><strong> </strong> </td>
                <td  style="background-color: white;text-align: right; ">${{ number_format($con_iva,2) }}</td>
                <td  style="background-color: white;text-align: right; "></td>
              </tr>
              <tr style="width: 100%"  style="color: gray; background-color: white" >
                <td colspan="6" style="text-align: right;background-color: white"><strong>Anticipo:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                          @if(empty($actual->anticipo))
                                    00.00%
                          @else
                                    {{ $actual->anticipo }}%
                          @endif
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: "><input style="width: 130px;text-align: right;" type="text" id="ant" value="{{ $anticipo }}" class="form-control currency" disabled="disabled" ></td>
                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
              <tr style="width: 100%"  style="background-color: white;color: gray" >
                <td colspan="6" style="background-color: white;text-align: right;"><strong>Comentarios:</strong></td> 
                <td colspan="3" style="background-color: white;text-align: ">
                    {{ $actual->comentarios }}
                </td>
              </tr> 
              <tr style="width: 100%"  style="background-color: white;color: gray" >
                <td colspan="6" style="background-color: white;text-align: right;"><strong>Condiciones:</strong></td> 
                <td colspan="3" style="background-color: white;text-align: ">
                    {{ $actual->condiciones }}
                </td>

              </tr>   
    
 
    </tbody>
  </table>
