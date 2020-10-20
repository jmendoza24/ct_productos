<?php

namespace App\Http\Controllers;
use App\Models\tbl_contactos_clientes;
use DB;
use App\Http\Requests\Createtbl_contactos_clientesRequest;
use App\Http\Requests\Updatetbl_contactos_clientesRequest;
use App\Repositories\tbl_contactos_clientesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_contactos_clientesController extends AppBaseController
{
    /** @var  tbl_contactos_clientesRepository */
    private $tblContactosClientesRepository;

    public function __construct(tbl_contactos_clientesRepository $tblContactosClientesRepo)
    {
        $this->tblContactosClientesRepository = $tblContactosClientesRepo;
    }

    /**
     * Display a listing of the tbl_contactos_clientes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblContactosClientes = $this->tblContactosClientesRepository->all();
        return view('tbl_contactos_clientes.index',compact('tblContactosClientes'));
    }

    /**
     * Show the form for creating a new tbl_contactos_clientes.
     *
     * @return Response
     */
    public function create(Request $request)
    {    

         $tipo=$request['tipo'];
         return view('tbl_contactos_clientes.fields',compact('tipo'));

    }

    /**
     * Store a newly created tbl_contactos_clientes in storage.
     *
     * @param Createtbl_contactos_clientesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        $valida=tbl_contactos_clientes::where('correo',$input['correo'])->count();
        // $tblContactosClientes=tbl_contactos_clientes::where('id_cliente',$id_cliente)->get();

        if($valida>=1){
            return 1;
        }else{
             $tblContactosClientes = $this->tblContactosClientesRepository->create($input);
            return 0;   
        }

    }

    /**
     * Display the specified tbl_contactos_clientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblContactosClientes = $this->tblContactosClientesRepository->find($id);

        if (empty($tblContactosClientes)) {
            Flash::error('Tbl Contactos Clientes not found');

            return redirect(route('tblContactosClientes.index'));
        }

        return view('tbl_contactos_clientes.show')->with('tblContactosClientes', $tblContactosClientes);
    }

    /**
     * Show the form for editing the specified tbl_contactos_clientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {   

        $id=$request['id'];
        $tblContactosClientes = $this->tblContactosClientesRepository->find($id);
        $tipo=$request['tipo'];

        return view('tbl_contactos_clientes.fields',compact('tblContactosClientes','tipo'));
    }

    /**
     * Update the specified tbl_contactos_clientes in storage.
     *
     * @param int $id
     * @param Updatetbl_contactos_clientesRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        

        $id=$request['idcon'];

        $valida_correo=tbl_contactos_clientes::where('correo',$request['correo'])->count();
        if($valida_correo>=1){

            $valida=tbl_contactos_clientes::where('correo',$request['correo'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

               $tblContactosClientes = $this->tblContactosClientesRepository->find($id);
               $tblContactosClientes = $this->tblContactosClientesRepository->update($request->all(), $id);

                return 0;

            }else{

                return 1;
            }

        }else{
            $tblContactosClientes = $this->tblContactosClientesRepository->find($id);
            $tblContactosClientes = $this->tblContactosClientesRepository->update($request->all(), $id);

            return 0;

        }

    }

    /**
     * Remove the specified tbl_contactos_clientes from storage.
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
        DB::table('tbl_contactos_clientes')->delete($id);

    }

    public function actualiza_contactos_clientes(Request $request)
    {

         $id_cliente=$request['id_cliente'];

         $tblContactosClientes=tbl_contactos_clientes::where('id_cliente',$id_cliente)->get();
         return view('tbl_contactos_clientes.table',compact('tblContactosClientes'));



    }
}
