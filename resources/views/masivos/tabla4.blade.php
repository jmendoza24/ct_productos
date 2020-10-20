<div class="row">
    <div class=" col-sm-6">
        <table class="table table-striped table-bordered " >
          <thead>
            <tr class="gris">
               <th>ID DB</th>
               <th>Estado</th>
               <th>Abrev</th> 
            </tr>
            </thead>
            <tbody>
            @foreach($estado as $estado)
                <tr>
                    <td>{!! $estado->id !!}</td>
                    <td>{!! $estado->estado !!}</td>
                    <td>{!! $estado->Abrev !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class=" col-sm-6">
         <table class="table table-striped table-bordered " >
              <thead>
                <tr class="gris">
                   <th>ID DB</th>
                   <th>Unidad</th> 
                   <th>Abrev</th>
                </tr>
                </thead>
                <tbody>
                @foreach($unidades as $unidades)
                    <tr>
                        <td>{!! $unidades->id !!}</td>
                        <td>{!! $unidades->descripcion !!}</td>
                        <td>{!! $unidades->abrev !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
  </div><br><br>
<div class="row">
    <div class=" col-sm-6">
        <table class="table table-striped table-bordered"  >
            <thead>
                <tr class="gris">
                    <th>ID DB</th>
                    <th>Tipo Equipo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoEquipos as $tipoEquipo)
                <tr>
                    <td>{!! $tipoEquipo->id !!}</td>
                    <td>{!! $tipoEquipo->nombre !!}</td>           
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class=" col-sm-6">
        <table class="table table-striped table-bordered"  >
            <thead>
                <tr class="gris">
                    <th>ID DB</th>
                    <th>Tipo Cliente</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tipoClientes as $tipoCliente)
                <tr>
                    <td>{!! $tipoCliente->id !!}</td>
                    <td>{!! $tipoCliente->nombre !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
 </div><br><br>  
<div class="row">  
    <div class=" col-sm-6">
         <table class="table table-striped table-bordered " >
              <thead>
                <tr class="gris">
                    <th>ID DB</th>
                     <th>Tipo Empleado</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tipoEmpleados as $tipoEmpleado)
                    <tr>
                        <td>{!! $tipoEmpleado->id !!}</td>
                        <td>{!! $tipoEmpleado->tipo_empleado !!}</td> 
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    <div class=" col-sm-6">
         <table class="table table-striped table-bordered " >
              <thead>
                <tr class="gris">
                        <th>ID DB</th>
                        <th>Tipo Proveedor</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tipoProveedors as $tipoProveedor)
                    <tr >
                        <td>{!! $tipoProveedor->id !!}</td>
                        <td>{!! $tipoProveedor->tipo_proveedor !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</div>
<br><br>
<div class="row"> 
     <div class=" col-sm-6">
         <table class="table table-striped table-bordered " >
              <thead>
                <tr class="gris">
                        <th>ID DB</th>
                        <th>Tipo Pago</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Diario</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Semanal</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Catorcenal</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mensual</td>
                    </tr>
                </tbody>
            </table>
     </div>
</div>


 


 

 


