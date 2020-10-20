<?php

namespace App\Http\Controllers;
use App\Models\tbl_productos;
use App\Models\tbl_cotizaciones;
use App\Models\tbl_clientes;
use App\Models\tbl_contactos_clientes; 
use App\Models\tbl_titulos_lista;
use App\Models\tbl_empresa;
use App\Models\tbl_detalle_cotizacion;
use Cookie;
use Cache;
use DB;
use App\Http\Requests\Createtbl_cotizacionesRequest;
use App\Http\Requests\Updatetbl_cotizacionesRequest;
use App\Repositories\tbl_cotizacionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_cotizacionesController extends AppBaseController
{
    /** @var  tbl_cotizacionesRepository */
    private $tblCotizacionesRepository;

    public function __construct(tbl_cotizacionesRepository $tblCotizacionesRepo)
    {
        $this->tblCotizacionesRepository = $tblCotizacionesRepo;
    }

    /**
     * Display a listing of the tbl_cotizaciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {


        $sql_cots = new tbl_cotizaciones();
       // $tblCotizaciones=$sql_cots->sql_cots();
        
        $tblCotizaciones= DB::select('call proceso_muestra_cotizaciones()');

        return view('tbl_cotizaciones.index',compact('tblCotizaciones'));
    }
    
    
    
    public function guarda_cotizacion_tc(Request $request){

        $id = $request['num_cot'];
        $tblCotizaciones = $this->tblCotizacionesRepository->find($id);
        $tblCotizaciones = $this->tblCotizacionesRepository->update($request->all(), $id);


    }
    /**
     * Show the form for creating a new tbl_cotizaciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_cotizaciones.create');
    }

    public function baja_reporte_xls(Request $request)
    {

         $reportes= DB::select('call proceso_reporteoc()');

         $lista=tbl_titulos_lista::all();
         $lista=$lista[0];

         return view('tbl_oc.baja_reporte_xls',compact('reportes','lista'));

    }

    public function ver_cot(Request $request)
    {
        


           $num_cot = $request['id_cotizacion'];

    
            $actual = tbl_cotizaciones::where('id',$num_cot)->get();
            $actual=$actual[0];
            $clientes = tbl_clientes::all();

            $tbl_titulos_listas=tbl_titulos_lista::all();
            $tbl_titulos_listas=$tbl_titulos_listas[0];
            if($actual->id_tipo_cliente==0){
                
                
                
                

 
                     if(empty($actual->id_cliente)){
                        $sql_cliente=0;
                    }else{
                        
                     $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                     $sql_cliente=$sql_cliente[0];
                    }
                    

                $sql_prod = new tbl_productos();
                $empresa=tbl_empresa::all();
                $empresa=$empresa[0];


                $sql_prod_cotizados = new tbl_detalle_cotizacion();
                $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                if($actual->lista==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($actual->lista==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($actual->lista==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($actual->lista==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }

                return view('tbl_cotizaciones.table_cotizacion2',compact('idl','lista','clientes','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot','sql_cliente'));



            }else{


                $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                $sql_cliente=$sql_cliente[0];
                $contactos=tbl_contactos_clientes::where('id_cliente',$actual->id_cliente)->get();
                if($sql_cliente->id_tipo_precio==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($sql_cliente->id_tipo_precio==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($sql_cliente->id_tipo_precio==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($sql_cliente->id_tipo_precio==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($sql_cliente->id_tipo_precio==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($sql_cliente->id_tipo_precio==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }


                $sql_prod = new tbl_productos();
                $empresa=tbl_empresa::all();
                $empresa=$empresa[0];

                $sql_prod_cotizados = new tbl_detalle_cotizacion();
                $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                return view('tbl_cotizaciones.table_cotizacion2',compact('idl','sql_cliente','tbl_titulos_listas','lista','cotizados','empresa','tblProductos','clientes','actual','contactos','num_cot'));


            }


         




    }

    /**
     * Store a newly created tbl_cotizaciones in storage.
     *
     * @param Createtbl_cotizacionesRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_cotizacionesRequest $request)
    {
        $input = $request->all();

        $tblCotizaciones = $this->tblCotizacionesRepository->create($input);

        Flash::success('Tbl Cotizaciones saved successfully.');

        return redirect(route('tblCotizaciones.index'));
    }

    /**
     * Display the specified tbl_cotizaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show(Request $request)
    {
        

        $sql_prod = new tbl_productos();
        $tblProductos=$sql_prod->sql_prod();
        
        return view('tbl_cotizaciones.show',compact('tblProductos'));
    }

    /**
     * Show the form for editing the specified tbl_cotizaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblCotizaciones = $this->tblCotizacionesRepository->find($id);

        if (empty($tblCotizaciones)) {
            Flash::error('Tbl Cotizaciones not found');

            return redirect(route('tblCotizaciones.index'));
        }

        return view('tbl_cotizaciones.edit')->with('tblCotizaciones', $tblCotizaciones);
    }

    /**
     * Update the specified tbl_cotizaciones in storage.
     *
     * @param int $id
     * @param Updatetbl_cotizacionesRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {

        $id=$request['id_cot'];
        $input=$request->all();

        $vowels = array("%", "_",);
        $input['descuento'] = str_replace($vowels, '', $input['descuento']);
    

        $tblCotizaciones = $this->tblCotizacionesRepository->find($id);
        $tblCotizaciones = $this->tblCotizacionesRepository->update($input, $id);

    }


    public function convertir_oc(Request $request)
    {

        $id=$request['id_cotizacion'];
        $request['estatus']=1;
        
        $tblCotizaciones = $this->tblCotizacionesRepository->find($id);

        $tblCotizaciones = $this->tblCotizacionesRepository->update($request->all(), $id);

    }


    public function convertir_cot(Request $request)
    {

        $id=$request['id_cotizacion'];
        $request['estatus']=0;
        
        $tblCotizaciones = $this->tblCotizacionesRepository->find($id);
        $tblCotizaciones = $this->tblCotizacionesRepository->update($request->all(), $id);

    }



    

    public function actualiza2(Request $request){


        $id=$request['id_cot'];
        $input=$request->all();
        $vowels = array("%", "_",);
        $input['anticipo'] = str_replace($vowels, '', $input['anticipo']);
        $input['flete'] = str_replace('$', '', str_replace(',', '', $input['flete']));

        $tblCotizaciones = $this->tblCotizacionesRepository->find($id);
        $tblCotizaciones = $this->tblCotizacionesRepository->update($input, $id);
    }

    /**
     * Remove the specified tbl_cotizaciones from storage.
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
        DB::table('tbl_cotizaciones')->delete($id);
    }

public function nueva_cot(Request $request)
    {
                         Cache::flush();



         if ($request->session()->has('num_cot')) {

           $num_cot = $request->session()->get('num_cot');

           
            $maxcotizacion=DB::table('tbl_cotizaciones')
                         ->selectraw('ifnull(max(id),0) as cotizacion_num') 
                         ->get();
            $maxcotizacion = $maxcotizacion[0];
            
        $clientes = tbl_clientes::all();
        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];
        
        $request->session()->put('num_cot',$maxcotizacion->cotizacion_num);
        $num_cot = $request->session()->get('num_cot');


        $actual = tbl_cotizaciones::where('id',$num_cot)->get();
        $actual=$actual[0];
            if($actual->id_tipo_cliente==0){



                $sql_prod = new tbl_productos();
                $empresa=tbl_empresa::all();
                $empresa=$empresa[0];

                // $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                // $sql_cliente=$sql_cliente[0];

                $sql_prod_cotizados = new tbl_detalle_cotizacion();
                $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                if($actual->lista==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($actual->lista==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($actual->lista==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($actual->lista==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }

                return view('tbl_cotizaciones.show',compact('idl','lista','clientes','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot'));



            }else{


                $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                $sql_cliente=$sql_cliente[0];
                $contactos=tbl_contactos_clientes::where('id_cliente',$actual->id_cliente)->get();
                if($sql_cliente->id_tipo_precio==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($sql_cliente->id_tipo_precio==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($sql_cliente->id_tipo_precio==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($sql_cliente->id_tipo_precio==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($sql_cliente->id_tipo_precio==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($sql_cliente->id_tipo_precio==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }


                $sql_prod = new tbl_productos();
                $empresa=tbl_empresa::all();
                $empresa=$empresa[0];

                $sql_prod_cotizados = new tbl_detalle_cotizacion();
                $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                return view('tbl_cotizaciones.show',compact('idl','sql_cliente','tbl_titulos_listas','lista','cotizados','empresa','tblProductos','clientes','actual','contactos','num_cot'));


            }


         }else{
            

            $maxcotizacion=DB::table('tbl_cotizaciones')
                         ->selectraw('ifnull(max(id),0)+1 as cotizacion_num') 
                         ->get();


            $maxcotizacion = $maxcotizacion[0];
            $request->session()->put('num_cot',$maxcotizacion->cotizacion_num);
            #insert into cotizacion ''' 
            $num_cot = $request->session()->get('num_cot');
            //session('num_cot'=>$session->cotizacion_num);

            $id_usuario=auth()->user()->id;

            $id = DB::table('tbl_cotizaciones')->insertGetId(
                array('estatus' => 0, 'id_usuario' => $id_usuario)
            );

           
         }

        

    }



      public function nueva_cotss(Request $request)
    {
            
            

       
                 $request->session()->forget('num_cot');
                 Cache::flush();

             


            $maxcotizacion=DB::table('tbl_cotizaciones')
                         ->selectraw('ifnull(max(id),0)+1 as cotizacion_num') 
                         ->get();


            $maxcotizacion = $maxcotizacion[0];
            $request->session()->put('num_cot',$maxcotizacion->cotizacion_num);
            #insert into cotizacion ''' 
            $num_cot = $request->session()->get('num_cot');

            //session('num_cot'=>$session->cotizacion_num);

            $id_usuario=auth()->user()->id;

            $now = new \DateTime();
            $now->format('d-m-Y H:i:s');

            $empresa=tbl_empresa::all();
            $empresa=$empresa[0];
            $tipo_cambio=$empresa->tipo_cambio;
            $condiciones=$empresa->condiciones;

            if(empty($tipo_cambio)){ $tipo_cambio=0; }
            if(empty($condiciones)){ $condiciones=""; }

                

            $id = DB::table('tbl_cotizaciones')->insertGetId(
                array('estatus' => 0, 'id_usuario' => $id_usuario, 'created_at' => $now,'tipo_cambio' => $tipo_cambio,'condiciones' => $condiciones)    
            );


                


    }


    public function guarda_comentarios_cotizacion(Request $request)
    {

        $id=$request['id_cotizacion'];

        $tblCotizaciones = $this->tblCotizacionesRepository->find($id);
        $tblCotizaciones = $this->tblCotizacionesRepository->update($request->all(), $id);
    }

    



    public function contacto(Request $request){

        $id_cliente=$request['id_cliente'];
        $contactos_clientes=tbl_contactos_clientes::where('id_cliente',$id_cliente)->get();

    
        $op = ' <option value="0">Selecciona una opción</option>';
        foreach ($contactos_clientes as $con ) {
            $op .="<option  value=".$con->id.">".$con->nombre;
        }

        return $op;
    }

    public function contacto2(Request $request){

        $id_cliente=$request['id_cliente'];
        $id_cotizacion=$request['id_cotizacion'];

        $cotizacion=tbl_cotizaciones::where('id',$id_cotizacion)->get();
        $cotizacion=$cotizacion[0];
        $contactos_clientes=tbl_contactos_clientes::where('id_cliente',$id_cliente)->get();
        $valida;
    
        $op = ' <option value="0">Selecciona una opción</option>';
        foreach ($contactos_clientes as $con ) {

            if($con->id==$cotizacion->id_contacto){ $valida="selected"; }else{ $valida=""; } 
            $op .="<option  value=".$con->id." ".$valida." >".$con->nombre;
        }

        return $op;
    }


    public function info_con(Request $request)
    {


        $input = $request->all();
        $id=$input['id_contacto'];

        if(empty($id)){

            $respuesta=array(
            'correo'=>'',
            'telefono'=>''
            );

        }else{

        $con=tbl_contactos_clientes::where('id',$id)->get();

        $con=$con[0];

        $correo=$con->correo;
        $telefono=$con->telefono;

         $respuesta=array(
          'correo'=>$correo,
          'telefono'=>$telefono
        );
       
        }

       
       return $respuesta;
       

    }
    

     public function cliente_descuento(Request $request)
    {
        

        $id=$request['id_cliente'];

        if(empty($id)){

             $respuesta=array(
                  'descuento'=>00.00,
                  'lista'=>''
                );
        }else{

        $con=tbl_clientes::where('id',$id)->get();
        $con=$con[0];

        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];
        if($con->id_tipo_precio==0){ $lista=$tbl_titulos_listas->titulo1; }elseif($con->id_tipo_precio==1){ $lista=$tbl_titulos_listas->titulo1;  }elseif($con->id_tipo_precio==2){ $lista=$tbl_titulos_listas->titulo2; }elseif($con->id_tipo_precio==3){ $lista=$tbl_titulos_listas->titulo3; }elseif($con->id_tipo_precio==4){ $lista=$tbl_titulos_listas->titulo4; }elseif($con->id_tipo_precio==5){ $lista=$tbl_titulos_listas->titulo5; }else{  $lista=$tbl_titulos_listas->titulo1;   }

        if(empty($con->descuento)){

              $respuesta=array(
                  'descuento'=>00.00,
                  'lista'=>$lista
                );
                      

        }else{

             $respuesta=array(
                  'descuento'=>$con->descuento,
                  'lista'=>$lista
                );
        }  

       }   
         
        return $respuesta;

    }

    public function oc(Request $request)
    {

        $sql_cots = new tbl_cotizaciones();        
        $tblCotizaciones= DB::select('call proceso_muestra_cotizaciones()');

        return view('tbl_oc.index',compact('tblCotizaciones'));
    }
    
    
    
    public function revives(Request $request)
    {
        Cache::flush();

         if ($request->session()->has('num_cot')) {

           $num_cot = $request->session()->get('num_cot');

    
            $actual = tbl_cotizaciones::where('id',$num_cot)->get();
            $actual=$actual[0];
            $clientes = tbl_clientes::all();

            $tbl_titulos_listas=tbl_titulos_lista::all();
               $tbl_titulos_listas=$tbl_titulos_listas[0];
            if($actual->id_tipo_cliente==0){
                
                
                
                

 
                     if(empty($actual->id_cliente)){
                        $sql_cliente=0;
                    }else{
                        
                     $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                     $sql_cliente=$sql_cliente[0];
                    }
                    

                $sql_prod = new tbl_productos();
                $empresa=tbl_empresa::all();
                $empresa=$empresa[0];


                $sql_prod_cotizados = new tbl_detalle_cotizacion();
                $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                if($actual->lista==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($actual->lista==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($actual->lista==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($actual->lista==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }

                return view('tbl_cotizaciones.show',compact('idl','lista','clientes','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot','sql_cliente'));



            }else{


                $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                $sql_cliente=$sql_cliente[0];
                $contactos=tbl_contactos_clientes::where('id_cliente',$actual->id_cliente)->get();
                if($sql_cliente->id_tipo_precio==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($sql_cliente->id_tipo_precio==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($sql_cliente->id_tipo_precio==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($sql_cliente->id_tipo_precio==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($sql_cliente->id_tipo_precio==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($sql_cliente->id_tipo_precio==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }


                $sql_prod = new tbl_productos();
                $empresa=tbl_empresa::all();
                $empresa=$empresa[0];

                $sql_prod_cotizados = new tbl_detalle_cotizacion();
                $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                return view('tbl_cotizaciones.show',compact('idl','sql_cliente','tbl_titulos_listas','lista','cotizados','empresa','tblProductos','clientes','actual','contactos','num_cot'));


            }


         }else{
            

            $maxcotizacion=DB::table('tbl_cotizaciones')
                         ->selectraw('ifnull(max(id),0)+1 as cotizacion_num') 
                         ->get();


            $maxcotizacion = $maxcotizacion[0];
            $request->session()->put('num_cot',$maxcotizacion->cotizacion_num);
            #insert into cotizacion ''' 
            $num_cot = $request->session()->get('num_cot');
            //session('num_cot'=>$session->cotizacion_num);

            $id_usuario=auth()->user()->id;

            $id = DB::table('tbl_cotizaciones')->insertGetId(
                array('estatus' => 0, 'id_usuario' => $id_usuario)
            );

           
         }

        

    }
    
    
    
    


    public function revive(Request $request)
    {

        $input = $request->all();
        $id=$input['id'];

        $request->session()->put('num_cot',$request->id);

        return 1;


    }

    public function actualiza_cotizaciones(Request $request)
    {


        $sql_cots = new tbl_cotizaciones();
       // $tblCotizaciones=$sql_cots->sql_cots();
                  $tblCotizaciones= DB::select('call proceso_muestra_cotizaciones()');

        return view('tbl_cotizaciones.table',compact('tblCotizaciones'));
    }


    public function guarda(Request $request){
        
        $request->session()->forget('num_cot');
        return 1;

    }

   
}
