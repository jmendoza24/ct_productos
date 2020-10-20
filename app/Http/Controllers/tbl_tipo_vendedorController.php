<?php

namespace App\Http\Controllers;
use App\Models\tbl_tipo_vendedor;
use DB;

use App\Http\Requests\Createtbl_tipo_vendedorRequest;
use App\Http\Requests\Updatetbl_tipo_vendedorRequest;
use App\Repositories\tbl_tipo_vendedorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_tipo_vendedorController extends AppBaseController
{
    /** @var  tbl_tipo_vendedorRepository */
    private $tblTipoVendedorRepository;

    public function __construct(tbl_tipo_vendedorRepository $tblTipoVendedorRepo)
    {
        $this->tblTipoVendedorRepository = $tblTipoVendedorRepo;
    }

    /**
     * Display a listing of the tbl_tipo_vendedor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblTipoVendedors = $this->tblTipoVendedorRepository->all();

        return view('tbl_tipo_vendedors.index')
            ->with('tblTipoVendedors', $tblTipoVendedors);
    }

    /**
     * Show the form for creating a new tbl_tipo_vendedor.
     *
     * @return Response
     */
    public function create(Request $request)
    {

        $tipo=$request['tipo'];
        return view('tbl_tipo_vendedors.fields',compact('tipo'));
    }

    /**
     * Store a newly created tbl_tipo_vendedor in storage.
     *
     * @param Createtbl_tipo_vendedorRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();

        $valida=tbl_tipo_vendedor::where('tipo_vendedor',$input['tipo_vendedor'])->count();


        if($valida>=1){
            return 1;
        }else{
            $tblTipoVendedor = $this->tblTipoVendedorRepository->create($input);
            return 0;   
        }
    }

    /**
     * Display the specified tbl_tipo_vendedor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblTipoVendedor = $this->tblTipoVendedorRepository->find($id);

        if (empty($tblTipoVendedor)) {
            Flash::error('Tbl Tipo Vendedor not found');

            return redirect(route('tblTipoVendedors.index'));
        }

        return view('tbl_tipo_vendedors.show')->with('tblTipoVendedor', $tblTipoVendedor);
    }

    /**
     * Show the form for editing the specified tbl_tipo_vendedor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {   

        $id=$request['id'];
        $tipo=$request['tipo'];

        $tblTipoVendedor = $this->tblTipoVendedorRepository->find($id);

        return view('tbl_tipo_vendedors.fields',compact('tipo','tblTipoVendedor'));
    }

    /**
     * Update the specified tbl_tipo_vendedor in storage.
     *
     * @param int $id
     * @param Updatetbl_tipo_vendedorRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
       


        $id=$request['idtv'];
        $valida_correo=tbl_tipo_vendedor::where('tipo_vendedor',$request['tipo_vendedor'])->count();

        if($valida_correo>=1){

            $valida=tbl_tipo_vendedor::where('tipo_vendedor',$request['tipo_vendedor'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

                $tblTipoVendedor = $this->tblTipoVendedorRepository->find($id);
                $tblTipoVendedor = $this->tblTipoVendedorRepository->update($request->all(), $id);


                return 0;

            }else{

                return 1;
            }

        }else{

             $tblTipoVendedor = $this->tblTipoVendedorRepository->find($id);
             $tblTipoVendedor = $this->tblTipoVendedorRepository->update($request->all(), $id);

            return 0;

        }

    }

    /**
     * Remove the specified tbl_tipo_vendedor from storage.
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
        DB::table('tbl_tipo_vendedors')->delete($id);

    }


    public function actualiza_tipo_vendedores(Request $request)
    {

        $tblTipoVendedors = $this->tblTipoVendedorRepository->all();
         return view('tbl_tipo_vendedors.table',compact('tblTipoVendedors'));


    }
}
