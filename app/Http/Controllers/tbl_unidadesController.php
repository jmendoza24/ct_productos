<?php

namespace App\Http\Controllers;
use App\Models\tbl_unidades;

use App\Http\Requests\Createtbl_unidadesRequest;
use App\Http\Requests\Updatetbl_unidadesRequest;
use App\Repositories\tbl_unidadesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class tbl_unidadesController extends AppBaseController
{
    /** @var  tbl_unidadesRepository */
    private $tblUnidadesRepository;

    public function __construct(tbl_unidadesRepository $tblUnidadesRepo)
    {
        $this->tblUnidadesRepository = $tblUnidadesRepo;
    }

    /**
     * Display a listing of the tbl_unidades.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblUnidades = $this->tblUnidadesRepository->all();

        return view('tbl_unidades.index')
            ->with('tblUnidades', $tblUnidades);
    }

    /**
     * Show the form for creating a new tbl_unidades.
     *
     * @return Response
     */
    public function create(Request $request)
    {

        $tipo=$request['tipo'];
        return view('tbl_unidades.fields',compact('tipo'));
    }  

    /**
     * Store a newly created tbl_unidades in storage.
     *
     * @param Createtbl_unidadesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
    

        $input = $request->all();

        $valida=tbl_unidades::where('unidad',$input['unidad'])->count();


        if($valida>=1){
            return 1;
        }else{
             $tblUnidades = $this->tblUnidadesRepository->create($input);
            return 0;   
        }

    }

    /**
     * Display the specified tbl_unidades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblUnidades = $this->tblUnidadesRepository->find($id);

        if (empty($tblUnidades)) {
            Flash::error('Tbl Unidades not found');

            return redirect(route('tblUnidades.index'));
        }

        return view('tbl_unidades.show')->with('tblUnidades', $tblUnidades);
    }

    /**
     * Show the form for editing the specified tbl_unidades.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {

        $id=$request['id'];
        $tipo=$request['tipo'];

        $tblUnidades = $this->tblUnidadesRepository->find($id);
        return view('tbl_unidades.fields',compact('tblUnidades','tipo'));

    }

    /**
     * Update the specified tbl_unidades in storage.
     *
     * @param int $id
     * @param Updatetbl_unidadesRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $id=$request['idun'];
        $valida_correo=tbl_unidades::where('unidad',$request['unidad'])->count();

        if($valida_correo>=1){

            $valida=tbl_unidades::where('unidad',$request['unidad'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

                $tblUnidades = $this->tblUnidadesRepository->find($id);
                $tblUnidades = $this->tblUnidadesRepository->update($request->all(), $id);

                return 0;

            }else{

                return 1;
            }

        }else{

            $tblUnidades = $this->tblUnidadesRepository->find($id);
            $tblUnidades = $this->tblUnidadesRepository->update($request->all(), $id);

            return 0;

        }
    }

    /**
     * Remove the specified tbl_unidades from storage.
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
        DB::table('tbl_unidades')->delete($id);

    }

    public function actualiza_unidades(Request $request)
    {


         $tblUnidades = $this->tblUnidadesRepository->all();
         return view('tbl_unidades.table',compact('tblUnidades'));


    }
}
