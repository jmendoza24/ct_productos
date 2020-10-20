<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_productosRequest;
use App\Http\Requests\Updatetbl_productosRequest;
use App\Repositories\tbl_productosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\tbl_categorias;
use App\Models\tbl_vendedores;
use App\Models\tbl_unidades;
use App\Models\tbl_fabricantes;
use App\Models\tbl_monedas;
use App\Models\tbl_productos;
use App\Models\tbl_subcategorias;
use App\Models\tbl_lista_precios;
use App\Models\tbl_color;

use DB;
use Illuminate\Support\Facades\Storage;



class tbl_productosController extends AppBaseController
{
    /** @var  tbl_productosRepository */
    private $tblProductosRepository;

    public function __construct(tbl_productosRepository $tblProductosRepo)
    {
        $this->tblProductosRepository = $tblProductosRepo;
    }

    /**
     * Display a listing of the tbl_productos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        
        $sql_prod = new tbl_productos();
        $tblProductos=$sql_prod->sql_prod();
        return view('tbl_productos.index',compact('tblProductos'));
    }

    /**
     * Show the form for creating a new tbl_productos.
     *
     * @return Response
     */

    public function create(Request $request)
    {   
        $tipo=$request['tipo'];
        $tblCategorias=tbl_categorias::all();
        $tblUnidades=tbl_unidades::all();
        $fabricantes = tbl_fabricantes::where('activo',1)->get();
        $sql_monedas=tbl_monedas::all();
        $estados = new tbl_vendedores();
        $sql_pais=$estados->pais_sql();
        $sql_color=tbl_color::all();


        return view('tbl_productos.fields',compact('sql_color','sql_monedas','fabricantes','tipo','tblCategorias','tblUnidades','sql_pais'));
    }

    /**
     * Store a newly created tbl_productos in storage.
     *
     * @param Createtbl_productosRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $valida=tbl_productos::where('id_producto',$input['id_producto'])->count();

        if($valida>=1){
            return 1;
        }else{
         
         //   $tblProductos = $this->tblProductosRepository->create($input);


            $id_last = DB::table('tbl_productos')->insertGetId(
                     array( 'nombre' => $input['nombre'],
                            'id_producto' => $input['id_producto'],
                            'marca' => $input['marca'],
                            'modelo' => $input['modelo'],
                            'sku' => $input['sku'],
                            'codigo_producto' => $input['codigo_producto'],
                            'descripcion' => $input['descripcion'],
                            'descripcion2' => $input['descripcion2'],
                            'unidades_paquete' => $input['unidades_paquete'],
                            'volumen' => $input['volumen'],
                            'id_unidad' => $input['id_unidad'],
                            'id_origen' => $input['id_origen'],
                            'tiempo_entrega' => $input['tiempo_entrega'],
                            'activo' => 1,
                            'id_subcategoria' => $input['id_subcategoria'],
                            'id_categoria' => $input['id_categoria'],
                            'id_fabricante' => $input['id_fabricante'],
                            'codigo_barras' => $input['codigo_barras'],
                            'presentacion' => $input['presentacion'],
                            'pedido_minimo' => $input['pedido_minimo'],
                            'id_vende' => $input['id_vende'],
                            'id_color' => $input['id_color'],
                            'estatus' => $input['estatus'],
                            )
            );
             

              
                $valida=tbl_lista_precios::where('id_producto',$id_last)->count();

                if($valida>=1){
                    
                    
                }else{

                    $idlp = DB::table('tbl_lista_precios')->insertGetId(
                     array( 'id_producto' => $id_last,
                            'lista1' => 0,
                            'lista2' => 0,
                            'lista3' => 0,
                            'lista4' => 0
                                    )
                    );

                       
                }






            return 0;   
        }

    }

    /**
     * Display the specified tbl_productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblProductos = $this->tblProductosRepository->find($id);

        if (empty($tblProductos)) {
            Flash::error('Tbl Productos not found');

            return redirect(route('tblProductos.index'));
        }

        return view('tbl_productos.show')->with('tblProductos', $tblProductos);
    }

    /**
     * Show the form for editing the specified tbl_productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        
        $tblProductos = $this->tblProductosRepository->find($id);
        $tblCategorias=tbl_categorias::all();
        $tblUnidades=tbl_unidades::all();
        $fabricantes = tbl_fabricantes::where('activo',1)->get();
        $sql_monedas=tbl_monedas::all();
        $estados = new tbl_vendedores();
        $sql_pais=$estados->pais_sql();
        $tipo=1;
        $idp=$id; 
        $sql_color=tbl_color::all();

        $sub_cat=tbl_subcategorias::where('id_categoria',$tblProductos->id_categoria)->get();

        return view('tbl_productos.edit',compact('sql_color','sub_cat','idp','tipo','tblProductos','tblCategorias','tblUnidades','fabricantes','sql_pais'));
    }



    /**
     * Update the specified tbl_productos in storage.
     *
     * @param int $id
     * @param Updatetbl_productosRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        $id=$request['idp']; 
                 $valida_correo=tbl_productos::where('id_producto',$request['id_producto'])->count();

                if($valida_correo>=1){

                    $valida=tbl_productos::where('id_producto',$request['id_producto'])->get();
                    $valida=$valida[0];
                    $id_valida=$valida['id'];

                    if($id_valida==$id){

                        $tblProductos = $this->tblProductosRepository->find($id);
                        $tblProductos = $this->tblProductosRepository->update($request->all(), $id);

                        return 0;

                    }else{

                        return 1;
                    }

                }else{

                        $tblClientes = $this->tblProductosRepository->find($id);
                        $tblClientes = $this->tblProductosRepository->update($request->all(), $id);

                    return 0;

                }
        
    }


    public function sube_fotos_productos(Request $request)
    {


        $arreglo = $request->all();
        $idf=$arreglo['idform'];
        $id=$arreglo['idp'];

        if($idf==1){

            if(empty($arreglo['foto1'])){
            
                unset($arreglo['foto1']);
            }else{
               
               //$path = $request->file('foto')->store('');
               $file = $request->file('foto1');
             
               $nombre = $file->getClientOriginalName();
               \Storage::disk('')->put($nombre,\File::get($file));
               $arreglo['foto1']=$nombre;
             
            }

        }else if($idf==2){

            if(empty($arreglo['foto2'])){
            
                unset($arreglo['foto2']);
            }else{
               
               //$path = $request->file('foto')->store('');
               $file = $request->file('foto2');
             
               $nombre = $file->getClientOriginalName();
               \Storage::disk('')->put($nombre,\File::get($file));
               $arreglo['foto2']=$nombre;
             
            }

        }else if($idf==3){

            if(empty($arreglo['foto3'])){
            
                unset($arreglo['foto3']);
            }else{
               
               //$path = $request->file('foto')->store('');
               $file = $request->file('foto3');
             
               $nombre = $file->getClientOriginalName();
               \Storage::disk('')->put($nombre,\File::get($file));
               $arreglo['foto3']=$nombre;
             
            }

        }else if($idf==4){

            if(empty($arreglo['foto4'])){
            
                unset($arreglo['foto4']);
            }else{
               
               //$path = $request->file('foto')->store('');
               $file = $request->file('foto4');
             
               $nombre = $file->getClientOriginalName();
               \Storage::disk('')->put($nombre,\File::get($file));
               $arreglo['foto4']=$nombre;
             
            }

        }else if($idf==5){

            if(empty($arreglo['foto5'])){
            
                unset($arreglo['foto5']);
            }else{
               
               //$path = $request->file('foto')->store('');
               $file = $request->file('foto5');
             
               $nombre = $file->getClientOriginalName();
               \Storage::disk('')->put($nombre,\File::get($file));
               $arreglo['foto5']=$nombre;
             
            }

        }else{

        }
        
        

        $tblClientes = $this->tblProductosRepository->find($id);
        $tblClientes = $this->tblProductosRepository->update($arreglo, $id);


    }



    public function bs_subcategoria(Request $request)
    {


       $sub_cat=tbl_subcategorias::where('id_categoria',$request['id_categoria'])->get();

        $op = ' <option value="0">Sin subcategoría</option>';
        foreach ($sub_cat as $con ) {
            $op .="<option  value=".$con->id.">".$con->sub_categoria;
        }
        
        return $op;

    }

    /**
     * Remove the specified tbl_productos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
      
       $id=$request['id'];
        DB::table('tbl_productos')->delete($id);

    }


    public function actualiza_productos(Request $request)
    {

        $sql_prod = new tbl_productos();
        $tblProductos=$sql_prod->sql_prod();

         return view('tbl_productos.table',compact('tblProductos'));


    }


    public function activa_producto(Request $request)
    {

        $estatus=tbl_productos::where('id',$request['id'])->get();
        $estatus=$estatus[0];
        $activo=$estatus->activo;
        $id=$request['id'];

        $input = $request->all();

        if($activo==1){

                $input['activo']=0;
        }else{
                $input['activo']=1;
        }
        
        $tblProductos = $this->tblProductosRepository->find($id);
        $tblProductos = $this->tblProductosRepository->update($input, $id);


    
    }
}
