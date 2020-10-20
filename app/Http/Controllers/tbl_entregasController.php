<?php

namespace App\Http\Controllers;
use App\Models\tbl_vendedores;
use App\Models\tbl_entregas;
use DB;
use App\Http\Requests\Createtbl_entregasRequest;
use App\Http\Requests\Updatetbl_entregasRequest;
use App\Repositories\tbl_entregasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_entregasController extends AppBaseController
{
    /** @var  tbl_entregasRepository */
    private $tblEntregasRepository;

    public function __construct(tbl_entregasRepository $tblEntregasRepo)
    {
        $this->tblEntregasRepository = $tblEntregasRepo;
    }

    /**
     * Display a listing of the tbl_entregas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblEntregas = $this->tblEntregasRepository->all();

        return view('tbl_entregas.index',compact('tblEntregas'));
    }

    /**
     * Show the form for creating a new tbl_entregas.
     *
     * @return Response
     */
    public function create(Request $request)
    {
         $tipo=$request['tipo'];
         $estados = new tbl_vendedores();
         $sql_estados = $estados->estados();   

         return view('tbl_entregas.fields',compact('tipo','sql_estados'));

    }

    /**
     * Store a newly created tbl_entregas in storage.
     *
     * @param Createtbl_entregasRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_entregasRequest $request)
    {
            $input = $request->all();

            $tblEntregas = $this->tblEntregasRepository->create($input);
            return 0;   
    }

    /**
     * Display the specified tbl_entregas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblEntregas = $this->tblEntregasRepository->find($id);

        if (empty($tblEntregas)) {
            Flash::error('Tbl Entregas not found');

            return redirect(route('tblEntregas.index'));
        }

        return view('tbl_entregas.show')->with('tblEntregas', $tblEntregas);
    }

    /**
     * Show the form for editing the specified tbl_entregas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {
        
        $id=$request['id'];
        $tblEntregas = $this->tblEntregasRepository->find($id);
        $tipo=$request['tipo'];
        $estados = new tbl_vendedores();
        $sql_estados = $estados->estados();

        $datos=tbl_entregas::where('id',$id)->get();
        $datos=$datos[0];
        $id_edo=$datos->id_estado;
        $municipios=$estados->municipios_editados($id_edo);   
   


        return view('tbl_entregas.fields',compact('tblEntregas','tipo','sql_estados','municipios'));

    }

    /**
     * Update the specified tbl_entregas in storage.
     *
     * @param int $id
     * @param Updatetbl_entregasRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $id=$request['ide'];
        $tblEntregas = $this->tblEntregasRepository->find($id);
        $tblEntregas = $this->tblEntregasRepository->update($request->all(), $id);
        return 0;   


    }

    /**
     * Remove the specified tbl_entregas from storage.
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
        DB::table('tbl_entregas')->delete($id);


   }


     public function actualiza_entregas_clientes(Request $request)
    {

         $id_cliente=$request['id_cliente'];

         $consulta = new tbl_entregas();
         $tblEntregas = $consulta->entregas($id_cliente);   

         return view('tbl_entregas.table',compact('tblEntregas'));



    }
}
