<form method="post" action="{{ route('upload.informe2')}} " class="form-horizontal" enctype='multipart/form-data'>
 {!! csrf_field() !!}

<div class="row">
    <div class=" col-sm-4">
        <select class="form-control select2" onchange="baja_formato_partidas()" id="cotizaciones" style="width: 100%" name="cotizaciones" required="required">
            <option value="">Selecciona una cotización</option>
            @if(!empty($registrados))
              @foreach($registrados as $tipo)
                 <option 
                      value="{{ $tipo->id }}" 
                   >{{ $tipo->nom_cot }}</option>
              @endforeach   
              @endif

              @if(!empty($nuevos))
              @foreach($nuevos as $tipo)
                 <option 
                      value="{{ $tipo->id }}" 
                   >{{ $tipo->nom_cot }}</option>
              @endforeach   
              @endif
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
         <button title="Bajar Formato CSV" type="button" onclick="baja_formato_partidas()" id="descargas2" class="btn btn_azul pull-right"><i class="fa  fa-download"></i> Bajar Formato CSV </button>
    </div>
    <div class="form-group col-sm-2">
         <button title="Subir CSV" type="submit" class="btn btn_gris pull-right"><i class="fa fa-upload"></i> Subir CSV </button>
    </div>
</div>
</form>


