<?php

namespace App\Http\Controllers;
use App\Models\tbl_vendedores;
use App\Models\tbl_clientes;
use App\Models\tbl_tipo_cliente;
use App\Models\tbl_entregas;
use App\Models\tbl_titulos_lista;
use App\Models\tbl_contactos_clientes;
use App\Http\Requests\Createtbl_clientesRequest;
use App\Http\Requests\Updatetbl_clientesRequest;
use App\Repositories\tbl_clientesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class tbl_clientesController extends AppBaseController
{
    /** @var  tbl_clientesRepository */
    private $tblClientesRepository;

    public function __construct(tbl_clientesRepository $tblClientesRepo)
    {
        $this->tblClientesRepository = $tblClientesRepo;
    }

    /**
     * Display a listing of the tbl_clientes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {   


        $clientes = new tbl_clientes();
        $tblClientes = $clientes->clientes();

        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];

        return view('tbl_clientes.index',compact('tblClientes','tbl_titulos_listas'));
    }

    /** 
     * Show the form for creating a new tbl_clientes.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $tipo=$request['tipo'];
        $estados = new tbl_vendedores();
        $sql_estados = $estados->estados();
        $vendedores=tbl_vendedores::where('activo',1)->get();
        $tipo_clientes=tbl_tipo_cliente::all(); 
        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];
        return view('tbl_clientes.fields',compact('tbl_titulos_listas','tipo','sql_estados','vendedores','tipo_clientes'));
    }

    /**
     * Store a newly created tbl_clientes in storage.
     *
     * @param Createtbl_clientesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $vowels = array("%", "_",);
        $input['descuento'] = str_replace($vowels, '', $input['descuento']);

        if($input['tipo_persona']==0){

                $valida=tbl_clientes::where('correo',$input['correo'])->count();

                if($valida>=1){
                    return 1;
                }else{
                    $tblClientes = $this->tblClientesRepository->create($input);
                    return 0;   
                }

        }else{

                    $tblClientes = $this->tblClientesRepository->create($input);
                    return 0;
        }

        
    }

    /**
     * Display the specified tbl_clientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblClientes = $this->tblClientesRepository->find($id);

        if (empty($tblClientes)) {
            Flash::error('Tbl Clientes not found');

            return redirect(route('tblClientes.index'));
        }

        return view('tbl_clientes.show')->with('tblClientes', $tblClientes);
    }

    /**
     * Show the form for editing the specified tbl_clientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblClientes = $this->tblClientesRepository->find($id);
        $estados = new tbl_vendedores();
        $sql_estados = $estados->estados();
        $vendedores=tbl_vendedores::where('activo',1)->get();
        $tipo=1;   

        $datos=tbl_clientes::where('id',$id)->get();
        $datos=$datos[0];
        $id_edo=$datos->id_estado;
        $municipios=$estados->municipios_editados($id_edo);   
        $tipo_clientes=tbl_tipo_cliente::all();  
        $tblContactosClientes=tbl_contactos_clientes::where('id_cliente',$id)->get();

        $id_cliente=$id;
        $consulta = new tbl_entregas();
        $tblEntregas = $consulta->entregas($id_cliente);   

        $tbl_titulos_listas=tbl_titulos_lista::all();
        $tbl_titulos_listas=$tbl_titulos_listas[0];
        $idcc=$id; 

        return view('tbl_clientes.edit',compact('tbl_titulos_listas','tblEntregas','idcc','tblContactosClientes','tblClientes','vendedores','tipo','sql_estados','municipios','tipo_clientes'));
    }

    /**
     * Update the specified tbl_clientes in storage.
     *
     * @param int $id
     * @param Updatetbl_clientesRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        $id=$request['idc']; 


        $vowels = array("%", "_",);
        $request['descuento'] = str_replace($vowels, '', $request['descuento']);

        if($request['tipo_persona']==0){


                 $valida_correo=tbl_clientes::where('correo',$request['correo'])->count();

                if($valida_correo>=1){

                    $valida=tbl_clientes::where('correo',$request['correo'])->get();
                    $valida=$valida[0];
                    $id_valida=$valida['id'];

                    if($id_valida==$id){

                        $tblClientes = $this->tblClientesRepository->find($id);
                        $tblClientes = $this->tblClientesRepository->update($request->all(), $id);

                        return 0;

                    }else{

                        return 1;
                    }

                }else{

                    $tblClientes = $this->tblClientesRepository->find($id);
                    $tblClientes = $this->tblClientesRepository->update($request->all(), $id);

                    return 0;

                }

        }else{


                    $tblClientes = $this->tblClientesRepository->find($id);
                    $tblClientes = $this->tblClientesRepository->update($request->all(), $id);

                    return 0;
        }


        
        


        
    }

    /**
     * Remove the specified tbl_clientes from storage.
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
        DB::table('tbl_clientes')->delete($id);


    }

    public function actualiza_clientes(Request $request)
    {

         $clientes = new tbl_clientes();
         $tblClientes = $clientes->clientes();
         $tbl_titulos_listas=tbl_titulos_lista::all();
         $tbl_titulos_listas=$tbl_titulos_listas[0];


         return view('tbl_clientes.table',compact('tblClientes','tbl_titulos_listas'));


    }

    public function activa_cliente(Request $request)
    {

        $estatus=tbl_clientes::where('id',$request['id'])->get();
        $estatus=$estatus[0];
        $activo=$estatus->activo;
        $id=$request['id'];

        $input = $request->all();

        if($activo==1){

                $input['activo']=0;
        }else{
                $input['activo']=1;
        }

            $tblClientes = $this->tblClientesRepository->find($id);
            $tblClientes = $this->tblClientesRepository->update($input, $id);

    
    }
}
