<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_lista_preciosRequest;
use App\Http\Requests\Updatetbl_lista_preciosRequest;
use App\Repositories\tbl_lista_preciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\tbl_lista_precios;
use App\Models\tbl_titulos_lista;
use App\Models\tbl_productos;
use Illuminate\Support\Facades\Storage;
use DB;

class tbl_lista_preciosController extends AppBaseController
{
    /** @var  tbl_lista_preciosRepository */
    private $tblListaPreciosRepository;

    public function __construct(tbl_lista_preciosRepository $tblListaPreciosRepo)
    {
        $this->tblListaPreciosRepository = $tblListaPreciosRepo;
    }

    /**
     * Display a listing of the tbl_lista_precios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tbl_lista_precios = new tbl_lista_precios();

      
             $tblListaPrecios = $tbl_lista_precios->sql_tbl_lista_precios();
             
             $titulos=tbl_titulos_lista::all();
             $titulos=$titulos[0]; 

        return view('tbl_lista_precios.index',compact('tblListaPrecios','titulos'));
    }

    public function masivos(Request $request)
    {
        $tbl_lista_precios = new tbl_lista_precios();
        $tblListaPrecios = $tbl_lista_precios->sql_tbl_lista_precios(); 
        $titulos=tbl_titulos_lista::all();
        $titulos=$titulos[0];

        return view('Masivos.index',compact('tblListaPrecios','titulos'));
    }

    public function baja_lista_precios(Request $request)
    {

        $tbl_lista_precios = new tbl_lista_precios();
        $tblListaPrecios = $tbl_lista_precios->sql_tbl_lista_precios(); 
        $titulos=tbl_titulos_lista::all();
        $titulos=$titulos[0];

        return view('tbl_lista_precios.baja_lista_precios',compact('tblListaPrecios','titulos'));
 

    }


    public function baja_productos(Request $request)
    {

        if($request['formatos']==1){

            $btn="<a title='Bajar Formato CSV'   href='#' onclick='baja_lista_precios()' class=' btn_azul pull-right'>
                  <i class='fa  fa-download'></i> Bajar Formato CSV </a>";

       }elseif ($request['formatos']==2) {
           
                  $btn="<a title='Bajar Formato CSV'   href='./formatos/subir_productos.csv' class=' btn_azul pull-right'>
                  <i class='fa  fa-download'></i> Bajar Formato CSV </a>";

       }

       return $btn;



    }

    public function subidas(Request $request)
    {

            $formatos=$request['formatos'];

            if($formatos==2){

                    
                    $file_img = $request->file('archivo');
                    $carga = new tbl_productos();
                    $i = 0;
                    $valida='';
                    $res = '';
                    $v="";
                    $csvFile = fopen($_FILES['archivo']['tmp_name'], 'r');
                    fgetcsv($csvFile);
                    while(($line = fgetcsv($csvFile)) !== FALSE){ 

                         if((int)$line[0]){ $valida=0;   } elseif ($line[0]==0) {  $valida=0;  } else{ $valida=1; $v='Columna 1'; break; }
                         if((int)$line[10]){ $valida=0;  } elseif ($line[10]==0) {  $valida=0;  } else{ $valida=1; $v='Columna 11'; break; }

                         if((int)$line[11]){ $valida=0;  } elseif ($line[11]==0) {  $valida=0;  } else{ $valida=1;  $v='Columna 12'; break; }
                         if((int)$line[13]){ $valida=0;  } elseif ($line[13]==0) {  $valida=0;  } else{ $valida=1; $v='Columna 14'; break; }

                         if((int)$line[15]){ $valida=0;  } elseif ($line[15]==0) {  $valida=0;  } else{ $valida=1; $v='Columna 16'; break; }

                         if((int)$line[18]){ $valida=0;  } elseif ($line[18]==0) {  $valida=0;  } else{ $valida=1; $v='Columna 19'; break; }
                         if((int)$line[19]){ $valida=0;  } elseif ($line[19]==0) {  $valida=0;  } else{ $valida=1; $v='Columna 20'; break; }

                         if((int)$line[21]){ $valida=0;  } elseif ($line[21]==0) {  $valida=0;  } else{ $valida=1; $v='Columna 22'; break; }
                         if((int)$line[22]){ $valida=0;  } elseif ($line[22]==0) {  $valida=0;  } else{ $valida=1; $v='Columna 23'; break; }



                    }  

                    if($valida==0){
                            
                            $file_img = $request->file('archivo');
                            $carga = new tbl_productos();
                            $i = 0;
                            $res = '';
                            $v="";
                            $csvFile = fopen($_FILES['archivo']['tmp_name'], 'r');
                            fgetcsv($csvFile);

                            while(($line = fgetcsv($csvFile)) !== FALSE){  
                             


                                $id_last = DB::table('tbl_productos')->insertGetId(
                                         array( 'nombre' => $line[2],
                                                'id_producto' => $line[1],
                                                'marca' => $line[4],
                                                'modelo' => $line[5],
                                                'sku' => $line[6], 
                                                'codigo_producto' => $line[3],
                                                'descripcion' => $line[7],
                                                'descripcion2' => $line[9],
                                                'unidades_paquete' => $line[14],
                                                'volumen' => $line[12],
                                                'id_unidad' => $line[13],
                                                'id_origen' => $line[15],
                                                'tiempo_entrega' => $line[17],
                                                'estatus' => $line[18],
                                                'activo' => $line[19],
                                                'id_subcategoria' => $line[11],
                                                'id_categoria' => $line[10],
                                                'id_fabricante' => $line[0],
                                                'codigo_barras' => $line[8],
                                                'presentacion' => $line[16],
                                                'pedido_minimo' => $line[20],
                                                'id_vende' => $line[21],
                                                'id_color' => $line[22],
                                                 
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


                          }

                        return redirect(route('masivos'));


                    }else{
                     
                      return "Este csv tiene errores porfavor checar la información ".$v;
                    }

            }else if($formatos==1){


                    
                    $file_img = $request->file('archivo');
                    $carga = new tbl_lista_precios();
                    $i = 0;
                    $valida='';
                    $res = '';
                    $res = '';
                    $v="";
                    $csvFile = fopen($_FILES['archivo']['tmp_name'], 'r');
                    fgetcsv($csvFile);
                    while(($line = fgetcsv($csvFile)) !== FALSE){ 

                         if((int)$line[0]){ $valida=0;  } else{ $valida=1; break; $v='Columna 1'; }

                         if((int)$line[1]){ $valida=0;  } else{ $valida=1; break; $v='Columna 2'; }

                         if(is_numeric($line[6])){ $valida=0;}else{ $valida=1; break; $v='Columna 6';}
                           
                         if(is_numeric($line[7])){ $valida=0;}else{ $valida=1; break; $v='Columna 7';}

                         if(is_numeric($line[8])){ $valida=0;}else{ $valida=1; break; $v='Columna 8';}

                         if(is_numeric($line[9])){ $valida=0;}else{ $valida=1; break; $v='Columna 9';}

                         if(is_numeric($line[10])){ $valida=0;}else{ $valida=1; break; $v='Columna 10';}


                    }  
                    if($valida==0){

                            $file_img = $request->file('archivo');

                            $carga = new tbl_lista_precios();
                            $i = 0;
                            $res = '';
                            $csvFile = fopen($_FILES['archivo']['tmp_name'], 'r');
                            fgetcsv($csvFile);

                            while(($line = fgetcsv($csvFile)) !== FALSE){  


                                DB::table('tbl_lista_precios') 
                                    ->where('id', $line[0])
                                    ->update([
                                            
                                                'id_producto' => $line[1],
                                                'lista1' => $line[5],
                                                'lista2' => $line[6],
                                                'lista3' => $line[7],
                                                'lista4' => $line[8],
                                                'lista5' => $line[9],      
                                            ]);

                          }

                        return redirect(route('masivos'));


                    }else{
                     
                      return "Este csv tiene errores porfavor checar la información ".$v;
                    }
                
            }


        

    }

    /**
     * Show the form for creating a new tbl_lista_precios.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_lista_precios.create');
    }

    /**
     * Store a newly created tbl_lista_precios in storage.
     *
     * @param Createtbl_lista_preciosRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $id_producto=$input['id_producto'];

        $input['lista1'] = str_replace('$', '', str_replace(',', '', $input['lista1']));
        $input['lista2'] = str_replace('$', '', str_replace(',', '', $input['lista2']));
        $input['lista3'] = str_replace('$', '', str_replace(',', '', $input['lista3']));
        $input['lista4'] = str_replace('$', '', str_replace(',', '', $input['lista4']));
        $input['lista5'] = str_replace('$', '', str_replace(',', '', $input['lista5']));



        $valida=tbl_lista_precios::where('id_producto',$input['id_producto'])->count();

                if($valida>=1){
                    
                    $valida2=tbl_lista_precios::where('id_producto',$input['id_producto'])->get();
                    $valida2=$valida2[0];
                    $id=$valida2->id;

                    $tblListaPrecios = $this->tblListaPreciosRepository->find($id);
                    $tblListaPrecios = $this->tblListaPreciosRepository->update($input, $id);

                    
                }else{

                    $tblListaPrecios = $this->tblListaPreciosRepository->create($input);

                       
                }

    }

    /**
     * Display the specified tbl_lista_precios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblListaPrecios = $this->tblListaPreciosRepository->find($id);

        if (empty($tblListaPrecios)) {
            Flash::error('Tbl Lista Precios not found');

            return redirect(route('tblListaPrecios.index'));
        }

        return view('tbl_lista_precios.show')->with('tblListaPrecios', $tblListaPrecios);
    }

    /**
     * Show the form for editing the specified tbl_lista_precios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblListaPrecios = $this->tblListaPreciosRepository->find($id);

        if (empty($tblListaPrecios)) {
            Flash::error('Tbl Lista Precios not found');

            return redirect(route('tblListaPrecios.index'));
        }

        return view('tbl_lista_precios.edit')->with('tblListaPrecios', $tblListaPrecios);
    }

    /**
     * Update the specified tbl_lista_precios in storage.
     *
     * @param int $id
     * @param Updatetbl_lista_preciosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetbl_lista_preciosRequest $request)
    {
        $tblListaPrecios = $this->tblListaPreciosRepository->find($id);
        
        $tblListaPrecios = $this->tblListaPreciosRepository->update($request->all(), $id);

  }

    /**
     * Remove the specified tbl_lista_precios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblListaPrecios = $this->tblListaPreciosRepository->find($id);

        if (empty($tblListaPrecios)) {
            Flash::error('Tbl Lista Precios not found');

            return redirect(route('tblListaPrecios.index'));
        }

        $this->tblListaPreciosRepository->delete($id);

        Flash::success('Tbl Lista Precios deleted successfully.');

        return redirect(route('tblListaPrecios.index'));
    }
}
