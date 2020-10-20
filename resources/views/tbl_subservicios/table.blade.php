
    <h1 class="pull-right">
        <a  class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" onclick="crea_subservicio({{ $id_servicio }})"  href="#{{-- {!! route('tblVendedores.create') !!} --}}"> <span class="material-icons md-18">add</span> Subservicio</a>
    </h1>
    <table class="table table-striped table-bordered" >
    <thead>
       <tr class="gris_barra">
        <th>Subservicio</th>
        <th></th>
       </tr>
        </thead>
        <tbody>
        @foreach($tblSubservicios as $tblSubservicios)
            <tr>
            <td><input type="text" name="subservicio" id="subservicio{{ $tblSubservicios->id }}" class="form-control" onchange="edita_subservicio({{ $tblSubservicios->id }},{{ $tblSubservicios->id_servicio }})" value="{{ $tblSubservicios->subservicio }}"></td>
            <td class="text-center">   
                     <div class='btn-group text-center'>  
                        <a title="Borrar" onclick="borra_subservicio({{ $tblSubservicios->id }},{{ $tblSubservicios->id_servicio }})" href="#" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



