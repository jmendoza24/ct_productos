<?php

namespace App\Http\Controllers;
use App\Models\tbl_cotizaciones;
use App\Models\tbl_clientes;
use App\Models\tbl_contactos_clientes; 
use App\Models\tbl_titulos_lista;
use App\Models\tbl_empresa;
use App\Models\tbl_detalle_cotizacion;
use App\Models\tbl_productos;


use App\Http\Requests\Createtbl_detalle_cotizacionRequest;
use App\Http\Requests\Updatetbl_detalle_cotizacionRequest;
use App\Repositories\tbl_detalle_cotizacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use PDF;
use View;
use Mail;

class tbl_detalle_cotizacionController extends AppBaseController
{
    /** @var  tbl_detalle_cotizacionRepository */
    private $tblDetalleCotizacionRepository;

    public function __construct(tbl_detalle_cotizacionRepository $tblDetalleCotizacionRepo)
    {
        $this->tblDetalleCotizacionRepository = $tblDetalleCotizacionRepo;
    }

    /**
     * Display a listing of the tbl_detalle_cotizacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblDetalleCotizacions = $this->tblDetalleCotizacionRepository->all();

        return view('tbl_detalle_cotizacions.index')
            ->with('tblDetalleCotizacions', $tblDetalleCotizacions);
    }

    /**
     * Show the form for creating a new tbl_detalle_cotizacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_detalle_cotizacions.create');
    }

    /**
     * Store a newly created tbl_detalle_cotizacion in storage.
     *
     * @param Createtbl_detalle_cotizacionRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $valida=tbl_detalle_cotizacion::where([['id_cotizacion',$request['id_cotizacion']],['id_producto',$request['id_producto']]])->count();
        
        if($valida>=1){

            $sql_consulta=tbl_detalle_cotizacion::where([['id_cotizacion',$request['id_cotizacion']],['id_producto',$request['id_producto']]])->get();
            $sql_consulta=$sql_consulta[0];
            $id=$sql_consulta->id;

            DB::table('tbl_detalle_cotizacions')->delete($id);

        }else{

            $input = $request->all();
            $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->create($input);
        }

    }

    /**
     * Display the specified tbl_detalle_cotizacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->find($id);

        if (empty($tblDetalleCotizacion)) {
            Flash::error('Tbl Detalle Cotizacion not found');

            return redirect(route('tblDetalleCotizacions.index'));
        }

        return view('tbl_detalle_cotizacions.show')->with('tblDetalleCotizacion', $tblDetalleCotizacion);
    }

    /**
     * Show the form for editing the specified tbl_detalle_cotizacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->find($id);

        if (empty($tblDetalleCotizacion)) {
            Flash::error('Tbl Detalle Cotizacion not found');

            return redirect(route('tblDetalleCotizacions.index'));
        }

        return view('tbl_detalle_cotizacions.edit')->with('tblDetalleCotizacion', $tblDetalleCotizacion);
    }

    /**
     * Update the specified tbl_detalle_cotizacion in storage.
     *
     * @param int $id
     * @param Updatetbl_detalle_cotizacionRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {

        $id=$request['id_cotizacion'];

        $vowels = array("%", "_",);
        $request['descuento'] = str_replace($vowels, '', $request['descuento']);
        $request['costo'] = str_replace('$', '', str_replace(',', '', $request['costo']));

        $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->find($id);
        $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->update($request->all(), $id);

    }

    public function guarda_detalles(Request $request)
    {

        $id=$request['id_dt'];

        $vowels = array("%", "_",);
        $request['descuento'] = str_replace($vowels, '', $request['descuento']);
        $request['costo'] = str_replace('$', '', str_replace(',', '', $request['costo']));

        $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->find($id);
        $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->update($request->all(), $id);

    }


    

    /**
     * Remove the specified tbl_detalle_cotizacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->find($id);

        if (empty($tblDetalleCotizacion)) {
            Flash::error('Tbl Detalle Cotizacion not found');

            return redirect(route('tblDetalleCotizacions.index'));
        }

        $this->tblDetalleCotizacionRepository->delete($id);

        Flash::success('Tbl Detalle Cotizacion deleted successfully.');

        return redirect(route('tblDetalleCotizacions.index'));
    }


    public function actualiza_cotizacion(Request $request)
    {

        $num_cot = $request->session()->get('num_cot');

        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];

        $actual = tbl_cotizaciones::where('id',$num_cot)->get();
        $actual=$actual[0];
        $clientes=tbl_clientes::all();


                if($actual->id_tipo_cliente==0){



                    $sql_prod = new tbl_productos();
                    $empresa=tbl_empresa::all();
                    $empresa=$empresa[0];
                    if(empty($actual->id_cliente)){
                        $sql_cliente=0;
                    }else{
                        
                     $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                     $sql_cliente=$sql_cliente[0];
                    }
                    
                    $sql_prod_cotizados = new tbl_detalle_cotizacion();
                    $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                    $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                    if($actual->lista==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($actual->lista==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($actual->lista==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($actual->lista==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }

                    return view('tbl_cotizaciones.table_cotizacion',compact('sql_cliente','idl','lista','clientes','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot'));



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
                    return view('tbl_cotizaciones.table_cotizacion',compact('idl','sql_cliente','tbl_titulos_listas','lista','cotizados','empresa','tblProductos','clientes','actual','contactos','num_cot'));


                }

            // }
        }

    public function limpia_detalle(Request $request)
    {

        $num_cot = $request->session()->get('num_cot');

        DB::table('tbl_detalle_cotizacions')->where('id_cotizacion',$num_cot)->delete();


    }


    public function actualiza_tabla_cotizados(Request $request)
    {

                $num_cot=$request['id_cotizacion'];

                $actual = tbl_cotizaciones::where('id',$num_cot)->get();
                $actual=$actual[0];
                $sql_prod_cotizados = new tbl_detalle_cotizacion();
                $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);


                if($actual->id_tipo_cliente==0){
                        
                                   return view('tbl_productos.table_cotizados',compact('tblProductos','num_cot','actual'));


                }else{


                    $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                    $sql_cliente=$sql_cliente[0];

                                    return view('tbl_productos.table_cotizados',compact('tblProductos','num_cot','sql_cliente','actual'));

                }



    }

    public function muestra_filas_detalles(Request $request)
    {

                $id_dt=$request['id_dt'];
                $datos=tbl_detalle_cotizacion::where('id',$id_dt)->get();
                $datos=$datos[0];

                $costo=$datos->costo;
                $descuento=$datos->descuento;
                $cantidad=$datos->cantidad;

                $fila_costo=($costo*$cantidad)-(($costo*$cantidad)*($datos->descuento/100));
                $request['tot_fila']=$fila_costo;

                $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->find($id_dt);
                $tblDetalleCotizacion = $this->tblDetalleCotizacionRepository->update($request->all(), $id_dt);

                return $fila_costo;
    }

    public function actualiza_totales(Request $request)
    {

                $num_cot=$request['id_cotizacion'];
                $sql_tot = new tbl_detalle_cotizacion();
               // $totales=$sql_tot->sql_totales($num_cot);
                $totales= DB::select('call proceso_actualiza_totales(?)',[$num_cot]);


                $totales=$totales[0];

                $tot_filas=$totales->tot_filas;
                $desas=$totales->desas;
                $flets=$totales->flets;
                $iva=$totales->iva;
                $ant=$totales->ant;
                $total=$totales->total;

                 $respuesta=array(
                    'tot_filas'=>$tot_filas,
                    'desas'=>$desas,
                    'flets'=>$flets,
                    'iva'=>$iva,
                    'ant'=>$ant,
                    'total'=>$total,
                    );

                return $respuesta;
    }


    public function baja_cotiza_xls(Request $request)
    {



        $num_cot=$request['id_cotizacion'];

        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];

        $actual = tbl_cotizaciones::where('id',$num_cot)->get();
        $actual=$actual[0];
        $clientes=tbl_clientes::all();


                if($actual->id_tipo_cliente==0){



                    $sql_prod = new tbl_productos();
                    $empresa=tbl_empresa::all();
                    $empresa=$empresa[0];

                     
                     if(empty($actual->id_cliente)){
                        $sql_cliente=0;
                    }else{
                        
                     $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                     $sql_cliente=$sql_cliente[0];
                    }
                    
                    
                    $sql_prod_cotizados = new tbl_detalle_cotizacion();
                    $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                    $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                    if($actual->lista==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($actual->lista==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($actual->lista==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($actual->lista==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }

                    return view('tbl_cotizaciones.table_cotizacion_xls',compact('sql_cliente','idl','lista','clientes','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot'));



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
                    return view('tbl_cotizaciones.table_cotizacion_xls',compact('idl','sql_cliente','tbl_titulos_listas','lista','cotizados','empresa','tblProductos','clientes','actual','contactos','num_cot'));


                }


    }

    public function baja_cotiza_pdf(Request $request)
    {





        $num_cot=$request['id_cotizacion'];

        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];

        $actual = tbl_cotizaciones::where('id',$num_cot)->get();
        $actual=$actual[0];
        $clientes=tbl_clientes::all(); 


                if($actual->id_tipo_cliente==0){



                    $sql_prod = new tbl_productos();
                    $empresa=tbl_empresa::all();
                    $empresa=$empresa[0];

                     
                     if(empty($actual->id_cliente)){
                        $sql_cliente=0;
                    }else{
                        
                     $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                     $sql_cliente=$sql_cliente[0];
                    }
                    
                    $sql_prod_cotizados = new tbl_detalle_cotizacion();
                    $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                    $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                    if($actual->lista==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($actual->lista==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($actual->lista==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($actual->lista==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }

                   #return  view('tbl_cotizaciones.table_cotizacion_pdf',compact('sql_cliente','idl','lista','clientes','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot'));
                    
			        
			        
			        $pdf  =  \App::make('dompdf.wrapper');
                    $view =  View::make('tbl_cotizaciones.table_cotizacion_pdf',compact('sql_cliente','idl','lista','clientes','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot'))->render();
                    $pdf->loadHTML($view);
                    $pdf->stream();
                    return $pdf->download('Cotizacion.pdf');
                    


                    //$pdf = \PDF::setOptions(['isRemoteEnabled' => true])->loadView('tbl_cotizaciones.table_cotizacion_pdf',compact('sql_cliente','idl','lista','clientes','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot'));
                    #dd($pdf);
                    //return $pdf->download('Cotizacion.pdf');



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
                    
			        $pdf  =  \App::make('dompdf.wrapper');
                    $view =  View::make('tbl_cotizaciones.table_cotizacion_pdf',compact('idl','sql_cliente','tbl_titulos_listas','lista','cotizados','empresa','tblProductos','clientes','actual','contactos','num_cot'))->render();
                    $pdf->loadHTML($view);
                    $pdf->stream();
                    return $pdf->download('Cotizacion.pdf');

                }

 
       



    }



    public function envia_cotiza_pdf(Request $request)
    {

        
        $num_cot=$request['id_cotizacion'];

        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];

        $actual = tbl_cotizaciones::where('id',$num_cot)->get();
        $actual=$actual[0];
        $clientes=tbl_clientes::all();
        $vista='tbl_cotizaciones.table_cotizacion_pdf';
        $vista_t="tbl_cotizaciones.table_cot_envio";
        
        if(empty($actual->correo)){
          
          return redirect()->back()->with('success', 'Asignar un correo a esta cotización');


        }else{
            
            
                if($actual->id_tipo_cliente==0){



                    $sql_prod = new tbl_productos();
                    $empresa=tbl_empresa::all();
                    $empresa=$empresa[0];
                    $idl="";
                     
                     if(empty($actual->id_cliente)){
                        $sql_cliente=0;
                    }else{
                        
                     $sql_cliente=tbl_clientes::where('id',$actual->id_cliente)->get();
                     $sql_cliente=$sql_cliente[0];
                    }
                    
                    
                    $sql_prod_cotizados = new tbl_detalle_cotizacion();
                    $tblProductos=$sql_prod_cotizados->sql_prod_cotizados($num_cot);
                    $cotizados=$sql_prod_cotizados->sql_prod_cotizados_tabla($num_cot);
                    if($actual->lista==0){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==1){ $lista=$tbl_titulos_listas->titulo1; $idl=1; }elseif($actual->lista==2){ $lista=$tbl_titulos_listas->titulo2; $idl=2; }elseif($actual->lista==3){ $lista=$tbl_titulos_listas->titulo3; $idl=3; }elseif($actual->lista==4){ $lista=$tbl_titulos_listas->titulo4; $idl=4; }elseif($actual->lista==5){ $lista=$tbl_titulos_listas->titulo5; $idl=5;}else{  $lista=$tbl_titulos_listas->titulo1; $idl=1;  }


                    $data = array(

                    'idl'=>$idl,
                    'tbl_titulos_listas'=>$tbl_titulos_listas,
                    'lista'=>$lista,
                    'cotizados'=>$cotizados,
                    'empresa'=>$empresa,
                    'tblProductos'=>$tblProductos,
                    'actual'=>$actual,
                    'num_cot'=>$num_cot,
                                     
                 );
         



                     Mail::send($vista_t, $data, function($msj) use ($sql_cliente,$vista,$idl,$tbl_titulos_listas,$lista,$cotizados,$empresa,$tblProductos,$actual,$num_cot) {
                            
                        $pdf = \PDF::loadView($vista,compact('sql_cliente','idl','lista','tbl_titulos_listas','cotizados','empresa','tblProductos','actual','num_cot'));
                        $msj->from('ventas@fluxmetals.info');
                        $msj->sender('ventas@fluxmetals.info');
                        $msj->subject('Cotizacion');
                        $msj->to($actual->correo);  
                                            
                        $msj->attachData($pdf->output(), 'cotizacion.pdf');

                     }); 


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

                    $data = array(

                    'idl'=>$idl,
                    'sql_cliente'=>$sql_cliente,
                    'tbl_titulos_listas'=>$tbl_titulos_listas,
                    'lista'=>$lista,
                    'cotizados'=>$cotizados,
                    'empresa'=>$empresa,
                    'tblProductos'=>$tblProductos,
                    'clientes'=>$clientes,
                    'actual'=>$actual,
                    'contactos'=>$contactos,
                    'num_cot'=>$num_cot,
                                     
                 );
                    



                     Mail::send($vista_t, $data, function($msj) use ($vista,$idl,$tbl_titulos_listas,$lista,$cotizados,$empresa,$tblProductos,$actual,$num_cot,$sql_cliente,$clientes,$contactos) {
                        
                    $pdf = \PDF::loadView($vista,compact('idl','sql_cliente','tbl_titulos_listas','lista','cotizados','empresa','tblProductos','clientes','actual','contactos','num_cot'));
                    $msj->from('ventas@fluxmetals.info');
                    $msj->sender('ventas@fluxmetals.info');
                    $msj->subject('Cotizacion');
                    $msj->to($actual->correo);  
                                        
                    $msj->attachData($pdf->output(), 'cotizacion.pdf');


                }); 
                }    

                      return redirect()->back()->with('success', 'Cotización enviada');

        }



    }
    
}