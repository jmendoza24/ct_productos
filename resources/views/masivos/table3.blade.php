<form method="post" action="{{ route('upload.informe3')}} " class="form-horizontal" enctype='multipart/form-data'>
 {!! csrf_field() !!}

<div class="row">
    <div class=" col-sm-4">
        <select class="form-control select2" id="sistema" onchange="baja_formato_sistema()" style="width: 100%" name="sistema" required="required" >
            <option value="">Selecciona una opción</option>
            <option value="1">Proveedores</option>
            <option value="2">Clientes</option>
            <option value="3">Empleados</option>
            <option value="4">Maq. Y Eq. Propio</option>
        </select>
    </div>
</div><br>
<div class="row">
    <div class=" col-sm-4">
        <input type="file" onchange="validarFile_csv(this)"  accept="application/csv" class="form-control" id="archivo" name="archivo" required="">
    </div>
</div>
<div class="row">    
    <div class="form-group col-sm-10">
         <button title="Bajar Formato CSV" onclick="baja_formato_sistema()" id="descargas3" type="button"  class="btn btn_azul pull-right"><i class="fa  fa-download"></i> Bajar Formato CSV </button>
    </div>
    <div class="form-group col-sm-2">
         <button title="Subir CSV" type="submit" class="btn btn_gris pull-right"><i class="fa fa-upload"></i> Subir CSV </button>
    </div>
</div>
</form>


