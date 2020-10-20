<div class="col-md-6">
    <span class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="ver_catalogo(2,0,1,0)">Agregar</span>
    <br><br><br>
     <table class="table table-bordered table-stripped zero-configuration">
         <thead>
             <tr>
                 <th>Categoria</th>
                 <th></th>
             </tr>
         </thead> 
         <tbody>
             @foreach($categorias as $c)
             @if($c->nivel==0)
                <tr>
                    <td><span data-toggle="modal" style="cursor: pointer;" data-target="#myModal" onclick="ver_catalogo(2,{{$c->id}},2,0)">{{$c->categorias}}</span></td>
                    <td><span title="Borrar" onclick="elimina_catalogo(2,{{$c->id}},'catalogos_tallas')" class='btn btn-link'><span class="texto_gris material-icons md-20">delete_sweep</span></span></td>
                </tr>
                @endif
             @endforeach
         </tbody>
     </table>
 </div>
 <div class="col-md-6">
    <span class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="ver_catalogo(3,0,1,0)">Agregar</span>
    <br><br><br>
     <table class="table table-bordered table-stripped zero-configuration">
         <thead>
             <tr>
                 <th>Categoria 2</th>
                 <th></th>
             </tr>
         </thead>
     </table>
 </div>
 <div class="col-md-6">
    <span class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="ver_catalogo(4,0,1,0)">Agregar</span>
    <br><br><br>
     <table class="table table-bordered table-stripped zero-configuration">
         <thead>
             <tr>
                 <th>Categoria 3</th>
                 <th></th>
             </tr>
         </thead>
     </table>
 </div>
 <div class="col-md-6">
    <span class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="ver_catalogo(5,0,1,0)">Agregar</span>
    <br><br><br>
     <table class="table table-bordered table-stripped zero-configuration">
         <thead>
             <tr>
                 <th>Categoria 4</th>
                 <th></th>
             </tr>
         </thead>
     </table>
 </div>
