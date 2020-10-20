<?php

namespace App\Http\Controllers;
use App\Models\tbl_monedas;
use DB;

use App\Http\Requests\Createtbl_monedasRequest;
use App\Http\Requests\Updatetbl_monedasRequest;
use App\Repositories\tbl_monedasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_monedasController extends AppBaseController
{
    /** @var  tbl_monedasRepository */
    private $tblMonedasRepository;

    public function __construct(tbl_monedasRepository $tblMonedasRepo)
    {
        $this->tblMonedasRepository = $tblMonedasRepo;
    }

    /**
     * Display a listing of the tbl_monedas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblMonedas = $this->tblMonedasRepository->all();

        return view('tbl_monedas.index')
            ->with('tblMonedas', $tblMonedas);
    }

    /**
     * Show the form for creating a new tbl_monedas.
     *
     * @return Response
     */
    public function create(Request $request)
    {

        $tipo=$request['tipo'];
        return view('tbl_monedas.fields',compact('tipo')); 
    }

    /**
     * Store a newly created tbl_monedas in storage.
     *
     * @param Createtbl_monedasRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {


        $input = $request->all();
        $valida=tbl_monedas::where('moneda',$request['moneda'])->count();


        if($valida>=1){
            return 1; 
        }else{
            $tblMonedas = $this->tblMonedasRepository->create($input);
            return 0;   
        }
    }

    /**
     * Display the specified tbl_monedas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblMonedas = $this->tblMonedasRepository->find($id);

        if (empty($tblMonedas)) {
            Flash::error('Tbl Monedas not found');

            return redirect(route('tblMonedas.index'));
        }

        return view('tbl_monedas.show')->with('tblMonedas', $tblMonedas);
    }

    /**
     * Show the form for editing the specified tbl_monedas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {

        $id=$request['id'];
        $tipo=$request['tipo'];

        $tblMonedas = $this->tblMonedasRepository->find($id);
        return view('tbl_monedas.fields',compact('tblMonedas','tipo'));
    }

    /**
     * Update the specified tbl_monedas in storage.
     *
     * @param int $id
     * @param Updatetbl_monedasRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $id=$request['idm'];

        $valida_correo=tbl_monedas::where('moneda',$request['moneda'])->count();

        if($valida_correo>=1){

            $valida=tbl_monedas::where('moneda',$request['moneda'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

                $tblMonedas = $this->tblMonedasRepository->find($id);
                $tblMonedas = $this->tblMonedasRepository->update($request->all(), $id);

                return 0;

            }else{

                return 1;
            }

        }else{

            $tblMonedas = $this->tblMonedasRepository->find($id);
            $tblMonedas = $this->tblMonedasRepository->update($request->all(), $id);

            return 0;

        }
    }

    /**
     * Remove the specified tbl_monedas from storage.
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
        DB::table('tbl_monedas')->delete($id);

    }



    public function actualiza_monedas(Request $request)
    {

        $tblMonedas = $this->tblMonedasRepository->all();
         return view('tbl_monedas.table',compact('tblMonedas'));


    }
}
