        <form method="post" action="{{ route('upload.informe')}} " class="form-horizontal" enctype='multipart/form-data'>
         {!! csrf_field() !!}

        <div class="row">
            <div class=" col-sm-4">
                <select class="form-control select2" id="familias" style="width: 100%" name="familias" required="required" onchange="baja_formato_catalogos()">
                    <option value="">Selecciona una opción</option>
                    <option value="1">Materiales</option>
                    <option value="2">Mano de obra</option>
                    <option value="3">Maq. y Eq. Rent.</option>
                    <option value="7">Maq. y Eq. Prop</option>
                    <option value="4">Comb. Lub. Mat.</option>
                    <option value="5">Subcontratos</option>
                    <option value="6">Varios</option>
                    <option value="8">Tipo Equipo</option>
                    <option value="9">Unidades</option>
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
                 <button title="Bajar Formato CSV" id="descargas" type="button" onclick="baja_formato_catalogos()" class="btn btn_azul pull-right"><i class="fa  fa-download"></i> Bajar Formato CSV </button>
            </div>
            <div class="form-group col-sm-2">
                 <button title="Subir CSV" type="submit" class="btn btn_gris pull-right"><i class="fa fa-upload"></i> Subir CSV </button>
            </div>
        </div>
        </form>

