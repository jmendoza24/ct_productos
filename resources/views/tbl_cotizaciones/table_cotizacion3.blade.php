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
        <tr class="gris_barra">
        <th>Foto</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio unit. USD</th>
        <th>Precio unit. MXN</th>
        <th>Descuento</th>
        <th>Total MXN</th>
        <th></th>
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
            <td>
             <div class="img-container" style="width: 100px;">

               @if(empty($cotizados->foto1))
                @else
                        <img class="rounded img-fluid" src=data:image/jpeg;base64,{{ base64_encode(Storage::get($cotizados->foto1)) }}>
                    </div>    
                @endif 
            </div>
            </td>    
            <td><p style="width: 100px">{{ $cotizados->nombre }}</p></td>
            <td><p style="width: 240px">{{ $cotizados->descripcion }}</p></td>
            <td>
              <p style="width: 100px">
                  @if(empty($cotizados->cantidad))
                         <input style="background-color:whitesmoke" type="text"  id="cantidad{{ $cotizados->id_dt }}" value="0" class="form-control decimal-inputmask" disabled="disabled">

                  @else
                        <input style="background-color:whitesmoke" type="text"  id="cantidad{{ $cotizados->id_dt }}" value="{{ $cotizados->cantidad }}" class="form-control decimal-inputmask" disabled="disabled">
                  @endif
                </p>
            </td>
            <td>
                <p style="width: 100px"> 
                  @if($cotizados->id_vende==1)

                                @if($idl==1)
                                       <input type="text"  style="background-color:whitesmoke" id="costous{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista1 }}">

                                @elseif($idl==2)
                                       <input type="text"  style="background-color:whitesmoke" id="costous{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista2 }}">

                                @elseif($idl==3)
                                       <input type="text"  style="background-color:whitesmoke" id="costous{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista3 }}">

                                @elseif($idl==4)
                                       <input type="text"  style="background-color:whitesmoke" id="costous{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista4 }}">
                                
                                @elseif($idl==5)

                                       <input type="text"  style="background-color:whitesmoke" id="costous{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista5 }}">

                                @endif


                            @else

                                        <input type="text"  style="background-color:whitesmoke" id="costous{{ $cotizados->id_dt }}" class="form-control currency" value="00.00" disabled="disabled" >

                            @endif


                </p>
            </td>
            
              <td>
                <p style="width: 100px">
                            @if(empty($cotizados->id_vende) || $cotizados->id_vende==0)

                                @if($idl==1)
                                    <input type="text" style="background-color:whitesmoke"  id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista1 }}">

                                @elseif($idl==2)
                                    <input type="text"  style="background-color:whitesmoke" id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista2 }}">

                                @elseif($idl==3)
                                    <input type="text"  style="background-color:whitesmoke" id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista3 }}">

                                @elseif($idl==4)
                                     <input type="text"  style="background-color:whitesmoke" id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista4 }}">
                                
                                @elseif($idl==5)
                                      <input type="text"  id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista5 }}">

                                @endif


                            @else

                                    @if($idl==1)
                                        <input type="text"  style="background-color:whitesmoke" id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista1*$actual->tipo_cambio }}">

                                    @elseif($idl==2)
                                        <input type="text"  style="background-color:whitesmoke" id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista2*$actual->tipo_cambio }}">

                                    @elseif($idl==3)
                                        <input type="text"  style="background-color:whitesmoke" id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista3*$actual->tipo_cambio }}">

                                    @elseif($idl==4)
                                         <input type="text"  style="background-color:whitesmoke" id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista4*$actual->tipo_cambio }}">
                                    
                                    @elseif($idl==5)
                                          <input type="text"  style="background-color:whitesmoke" id="costomx{{ $cotizados->id_dt }}" class="form-control currency" disabled="disabled" value="{{ $cotizados->lista5*$actual->tipo_cambio }}">

                                    @endif
                            @endif

                </p>
            </td>
            
            <td>
              <p style="width: 100px">
                    @if(empty($cotizados->descuento))
                          <input type="text" style="background-color:whitesmoke;text-align: right"  value="00.00" id="descuentos{{ $cotizados->id_dt }}" class="form-control percentage-mask" disabled="disabled">

                    @else
                          <input type="text" style="background-color:whitesmoke;text-align: right" value="{{ $cotizados->descuento }}"  id="descuentos{{ $cotizados->id_dt }}" class="form-control percentage-mask" disabled="disabled">

                    @endif

                </p> 
            </td>
            <td><input type="text" name="" style="background-color:whitesmoke" id="tot{{ $cotizados->id_dt }}"  value="{{ ($cotizados->costo*$cotizados->cantidad)-(($cotizados->costo*$cotizados->cantidad)*($cotizados->descuento/100)) }}" disabled="disabled" class="form-control currency"></td>
            <td>
              <div class='btn-group'>   
                </div>
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
                <td  colspan="5" class="gris_barra" style="text-align: left;"></td>
                <td  class="gris_barra" style="text-align: right;"><strong>Sub Total:</strong></td>
                <td  class="gris_barra" style="text-align: right;"><strong></strong> </td>
                <td  class="gris_barra" style="text-align: right;background-color:whitesmoke "><input style="background-color:whitesmoke" type="text" name="sub_tot" id="sub_tot" class="form-control currency" disabled="disabled" value="{{ $sub_total }}" ></td>
                <td  class="gris_barra" style="text-align: right;"><strong></strong> </td>

              </tr>
              
              
              
              
              
              
              
              
              <tr style="width: 100%"  style="color: gray; background-color: white" >

                <td colspan="6" style="text-align: right;background-color: white;color: #023761;font-size: 14px"><strong>Descuento:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                         <select style="text-align: right;text-align-last: right;width: 100%" class="form-control" id="descuento_aplicado" name="descuento_aplicado" disabled="disabled">
                          @if($actual->descuento=='00.00')
                                <option value="0" {{ ($actual->descuento_aplicado==0) ? 'selected' : '' }}>00.00%</option>

                          @else
                                <option value="0" {{ ($actual->descuento_aplicado==0) ? 'selected' : '' }}>00.00%</option>
                                <option value="{{ $actual->descuento }}" {{ ($actual->descuento==$actual->descuento_aplicado) ? 'selected' : ''  }} >{{ $actual->descuento }}%</option>
                     
                          @endif
                         </select> 
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: "><input style="background-color:whitesmoke;width: 130px;text-align: right;" type="text" id="con_descuento" class="form-control currency" value="$ {{$con_descuento }}" disabled="disabled"></td>
                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
              
              
              
            <tr style="width: 100%"  style="color: gray; background-color: white" >
                <td colspan="2" style="text-align: right;background-color: white"><strong>Comentarios:</strong></td> 
                <td colspan="3" style="text-align: right;background-color: white"><textarea  style="height: 200px" class="form-control" disabled="disabled"  id="comentarios_encot">{{ $actual->comentarios }}</textarea></td> 


                <td colspan="1" style="text-align: right;background-color: white;color: #023761;font-size: 14px"><strong>I.V.A:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                         <select style="text-align: right;text-align-last: right;width: 100%" class="form-control" id="iva" name="iva" disabled="disabled">
                           <option value="0"  {{ ($actual->iva==0) ? 'selected' : '' }}>00.00%</option>
                           <option value="8"  {{ ($actual->iva==8) ? 'selected' : '' }}>08.00%</option>
                           <option value="16" {{ ($actual->iva==16) ? 'selected' : '' }}>16.00%</option>
                         </select> 
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: "><input style="background-color:whitesmoke;width: 130px;text-align: right;" type="text" id="ivas" class="form-control currency" value="{{ $iva }}" disabled="disabled"></td>
                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
              
              
             <tr style="width: 100%"  style="color: gray;" >
                <td colspan="2" style="text-align: right;background-color: white"><strong>Condiciones:</strong></td> 
                <td colspan="3" style="text-align: right;background-color: white"><textarea  style="height: 200px" class="form-control" disabled="disabled" id="condiciones_encot">{{ $actual->condiciones }}</textarea></td> 

                <td colspan="1" style="background-color: whitesmoke;text-align:right;color: #023761;font-size: 14px"><strong>Total:</strong></td> 
                <td  style="background-color: whitesmoke;text-align: "><strong> </strong> </td>
                <td  style="background-color: whitesmoke;text-align: right; "><input style="background-color:whitesmoke;width: 130px;text-align: right;" type="text" id="totales" class="form-control currency" value="{{ $con_iva }}" disabled="disabled"></td>
                <td  style="background-color: whitesmoke;text-align: right; "></td>
              </tr>
              
              <tr style="width: 100%"  style="color: gray; background-color: white" >
                <td colspan="2" style="background-color: white;text-align:right"><strong>Flete estimado:</strong></td> 
                <td colspan="3" style="background-color: white;text-align: "> 
                    @if(empty($actual->flete))
                       <input type="text" name="flete" style="background-color:whitesmoke;width: 100px;" id="flete" class="form-control currency" value="0" disabled="disabled"> 
                    @else
                        <input type="text" name="flete" style="background-color:whitesmoke;width: 100px;" id="flete" class="form-control currency" value="{{ $actual->flete }}" disabled="disabled"> 
                    @endif
                </td>
                
                <td colspan="1" style="text-align: right;background-color: white"><strong>Anticipo:</strong></td> 
                <td  style="width: 130px;background-color: white">
                   <div class="col-md-6"> 
                        <div class="form-group row" style="width: 100px;">
                          @if(empty($actual->anticipo))
                           <input type="text" style="background-color:whitesmoke;text-align: left;text-align: right;text-align-last: right;" name="anticipo" id="anticipo" class="form-control percentage-mask" value="00.00" disabled="disabled">
                          @else
                             <input type="text" style="background-color:whitesmoke;text-align: left;text-align: right;text-align-last: right;" name="anticipo" id="anticipo" class="form-control percentage-mask" value="{{ $actual->anticipo }}" disabled="disabled">
                          @endif
                        </div>
                  </div> 
                </td>
                <td  style="background-color: white;text-align: "><input style="background-color:whitesmoke;width: 130px;text-align: right;" type="text" id="ant" value="{{ $anticipo }}" class="form-control currency" disabled="disabled" ></td>

                <td  style="background-color: white;text-align: "><strong> </strong> </td>
              </tr>
    </tbody>
  </table>
