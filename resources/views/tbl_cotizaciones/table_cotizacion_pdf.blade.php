    <table   style="width: 100%;font-family: sans-serif;">
    
      
      <tr style="width: 100%,background-color: whitesmoke;color: #023761;font-size: 14px;" class="gris_barra" border="1">
        <td colspan="5">

                <img style="width: 240px;" class="rounded img-fluid" src=data:image/jpeg;base64,{{ base64_encode(Storage::get($empresa->logo)) }}>
                
            
        </td>
        <td style="text-align: right">    
            <table   style="width: 100%;font-family: sans-serif;">
                <tr style="width: 100%,background-color: whitesmoke;color: #023761;font-size: 14px;" class="gris_barra">
            
                    <th  style="text-align: left; background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">Cot.: {{ $actual->id }}</th>
                </tr>
                <tr style="width: 100%,background-color: whitesmoke;color: #023761;font-size: 14px;" class="gris_barra">
                    <th style="text-align: left; background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">{{ $actual->created_at->format('d-m-Y') }}</th>
                </tr>
                <tr style="width: 100%,background-color: whitesmoke;color: #023761;font-size: 14px;" class="gris_barra">
                    <th style="text-align: left; background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white">Tc: ${{ number_format($actual->tipo_cambio,2) }}</th>
                </tr>
            </table>
        </td>
       </tr>
      
       <tr style="width: 100%,background-color: whitesmoke;color: #023761;font-size: 14px;" class="gris_barra">
        <th colspan="2" style="text-align: left; background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white"> @if($actual->id_cliente==0) {{ $actual->cliente }}  @else    @if($actual->id_cliente==0)   @else &nbsp;&nbsp;{{ $sql_cliente->nombre }} @endif @endif  </th>
        <th colspan="2" style="text-align: left; background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white"> {{ $actual->correo }} </th>
        <th colspan="3" style="text-align: left; background-color: white;border-bottom-color:white;border-left-color:white;border-right-color:white;border-top-color:white"> {{ $actual->telefono }} </th>

      </tr>
      
</table>

<table   style="width: 100%; border-collapse: collapse; font-family: sans-serif;" border="0">
    <thead>
    
        <tr class="gris_barra" style="background-color: whitesmoke;color: #023761;font-size: 14px;width: 100%">
        <th>Foto</th>
        <th >Producto</th>
        <th>Descripción</th>
        <th>Ctd.</th>
        <th>$/Unit. <br>USD</th>
        <th>$/Unit. <br>MXN</th> 
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
            <tr style="background-color: white;font-size: 12px">
            <td>
             <div class="img-container">
                @if(!empty($cotizados->foto1))
                 <img src="https://www.tpmonterrey.cotiza.tech/storage/{{ $cotizados->foto1 }}" style="width: 100px;">
                @else
                Sin fotos
                @endif 
    


                </div>    
                
            </div>
            </td>
            <td><p style="width: 80px">{{ $cotizados->nombre }}</p></td>
            <td><p style="width: 205px">{{ $cotizados->descripcion }}</p></td>
            <td style="text-align: center">
              <p style="width: 60px">
                  @if(empty($cotizados->cantidad))
                        {{ number_format(0,2) }}
                  @else
                        {{ $cotizados->cantidad }}
                  @endif
                </p>
            </td>
            <td style="text-align: right">
                <p style="width: 70px"> 
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
            
              <td style="text-align: right">
                <p style="width: 70px">
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
            
            <td style="text-align: right;">
                     ${{ number_format(($cotizados->costo*$cotizados->cantidad)-(($cotizados->costo*$cotizados->cantidad)*($cotizados->descuento/100)),2) }}
            </td>
            
        </tr>

            @php($total=($cotizados->costo*$cotizados->cantidad)-(($cotizados->costo*$cotizados->cantidad)*($cotizados->descuento/100)))
            @php($sub_total+=$total)
          @endforeach
          @php($con_descuento=($sub_total*($actual->descuento_aplicado/100)))
          @php($iva=((($sub_total-$con_descuento)+$actual->flete)*($actual->iva/100)))
          @php($con_iva=$sub_total-$con_descuento+$iva +$actual->flete)
          @php($anticipo= $con_iva*($actual->anticipo/100))
           
           <tr style="width: 100%" style="background-color: whitesmoke;color: #023761;font-size: 14px;" >
                <td   style="background-color: white;text-align: right;background-color: whitesmoke;">
                <td  colspan="4" style="text-align: right;background-color: whitesmoke;color: #023761;font-size: 14px;"><strong>Sub Total:</strong></td> 
                <td  style="text-align: left;background-color: whitesmoke;color: #023761;font-size: 14px;"></td>
                <td  style="text-align: right;background-color: whitesmoke;color: #023761;font-size: 14px;text-align: right;">${{ number_format($sub_total,2) }}</td>
           </tr>

              
              @if(empty($actual->descuento_aplicado) || $actual->descuento_aplicado==0 || $actual->descuento_aplicado==0.00)
              @else


              <tr style="width: 100%"  style="color: gray;font-family:san-serif; border: 2px solid color;" >
                <td  style="color: #023761;font-size: 14px;background-color: white;text-align:right"><strong>Descuento:</strong></td> 
                <td colspan="3" style="color: #023761;font-size: 14px;background-color: white;text-align: right;"> </td>
                <td  style="color: #023761;font-size: 14px;border-style: hidden;border-bottom-color:#262c65;border-top-color:#262c65;border-left-color:#262c65;border-right-color:#262c65;background-color: #262c65;color:white;text-align: right;"></td>
                <td  style="color: #023761;font-size: 14px;border-style: hidden;border-bottom-color:#262c65;border-top-color:#262c65;border-left-color:#262c65;border-right-color:#262c65;background-color: #262c65;color:white;text-align: right;"><p> {{ $actual->descuento_aplicado }}%</p></td>
                <td  style="color: #023761;font-size: 14px;border-style: hidden;border-bottom-color:#262c65;border-top-color:#262c65;border-left-color:#262c65;border-right-color:#262c65;background-color: #262c65;color:white;text-align: right;"><p>${{ number_format($con_descuento,2) }}</p></td>
              </tr>
              
              @endif


              <tr style="width: 100%"  style="" >
                <td  style="color: #023761;font-size: 14px;text-align:right"></td> 
                <td colspan="3" style="font-size: 12px;"></td>
                <td  style="text-align: right;color: #023761;"><strong><p style="font-size: 14px;">I.V.A:</p></strong></td>
                <td  style="text-align: right;font-size: 12px;"><p>{{ $actual->iva }}% </p></td>
                <td  style="text-align: right;font-size: 12px;"><p>${{ number_format($iva,2) }}</p></td>
              </tr>


              <tr style="width: 100%"  style="color: #023761;font-size: 14px;color: gray;font-family:san-serif; border: 2px solid color;" >
                <td  style="color: #023761;font-size: 14px;background-color: white;text-align:right"></td> 
                <td colspan="3" style="font-size: 14px;background-color: white;"></td>
                
                <td  style="text-align: right; color: #023761;background-color: whitesmoke;"><strong><p style="font-size: 14px;">Total:</p></strong></td>
                <td  style="text-align: right;background-color: whitesmoke;"></td>
                <td  style="text-align: right;font-size: 12px;background-color: whitesmoke;"><p>${{ number_format($con_iva,2) }}</p></p></td>
            </tr>
            
            
            
            
              <tr style="width: 100%"  style="" >
                  
                  
                  
                    <td  style=""><strong><p style="font-size: 14px;color: #023761;text-align:right">Flete:</p></strong></td>
                    <td  style="text-align: right;font-size: 12px;"></td>
                    <td  style="text-align: right;font-size: 12px;">
                        @if(empty($actual->flete))
                        <p>${{ number_format(0,2) }}</p>
                        @else
                        <p>${{ number_format($actual->flete,2) }}</p>
                        @endif
                    </td>
                    <td  style=""><strong><p style="font-size: 14px;color: #023761;text-align:right"></p></strong></td>
                    <td  style=""><strong><p style="font-size: 14px;color: #023761;text-align:right">Anticipo:</p></strong></td>
                    <td  style="text-align: right;font-size: 12px;">
                  @if(empty($actual->anticipo))
                           <p> 00.00%</p>
                  @else
                            <p>{{ $actual->anticipo }}%</p>
                  @endif
                </td>
                <td  style="text-align: right;font-size: 12px;">
                    <p>${{ number_format($anticipo,2) }}</p>
                </td>
            </tr>
            
              <tr style="width: 100%"  style="" >
                <td  style="color: #023761;font-size: 14px;text-align:right"><strong>Comentarios: &nbsp;</strong></td> 
                <td colspan="6" style="font-size: 12px;"><p>{{ $actual->comentarios }}</td>

              </tr>
              
              <tr style="width: 100%"  style="color: #023761;font-size: 14px;color: gray;font-family:san-serif; border: 2px solid color;" >
                <td  style="color: #023761;font-size: 14px;background-color: white;text-align:right"><strong>Condiciones: &nbsp;</strong></td> 
                <td colspan="6" style="font-size: 12px;background-color: white;"><p>{{ $actual->condiciones }}</td>
            </tr>


    </tbody>
  </table>
