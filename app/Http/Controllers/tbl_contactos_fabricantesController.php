<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_contactos_fabricantesRequest;
use App\Http\Requests\Updatetbl_contactos_fabricantesRequest;
use App\Repositories\tbl_contactos_fabricantesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use DB;

use Response;
use App\Models\tbl_contactos_fabricantes;

class tbl_contactos_fabricantesController extends AppBaseController
{
    /** @var  tbl_contactos_fabricantesRepository */
    private $tblContactosFabricantesRepository;

    public function __construct(tbl_contactos_fabricantesRepository $tblContactosFabricantesRepo)
    {
        $this->tblContactosFabricantesRepository = $tblContactosFabricantesRepo;
    }

    /**
     * Display a listing of the tbl_contactos_fabricantes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblContactosFabricantes = $this->tblContactosFabricantesRepository->all();

        return view('tbl_contactos_fabricantes.index')
            ->with('tblContactosFabricantes', $tblContactosFabricantes);
    }

    /**
     * Show the form for creating a new tbl_contactos_fabricantes.
     *
     * @return Response
     */
    public function create(Request $request)
    {

         $tipo=$request['tipo'];
         return view('tbl_contactos_fabricantes.fields',compact('tipo'));
    }

    /**
     * Store a newly created tbl_contactos_fabricantes in storage.
     *
     * @param Createtbl_contactos_fabricantesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $valida=tbl_contactos_fabricantes::where('correo',$input['correo'])->count();
        // $tblContactosClientes=tbl_contactos_clientes::where('id_cliente',$id_cliente)->get();

        if($valida>=1){
            return 1;
        }else{
              $tblContactosFabricantes = $this->tblContactosFabricantesRepository->create($input);
            return 0;   
        }
    }

    /**
     * Display the specified tbl_contactos_fabricantes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblContactosFabricantes = $this->tblContactosFabricantesRepository->find($id);

        if (empty($tblContactosFabricantes)) {
            Flash::error('Tbl Contactos Fabricantes not found');

            return redirect(route('tblContactosFabricantes.index'));
        }

        return view('tbl_contactos_fabricantes.show')->with('tblContactosFabricantes', $tblContactosFabricantes);
    }

    /**
     * Show the form for editing the specified tbl_contactos_fabricantes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {

        $id=$request['id'];
        $tblContactosFabricantes = $this->tblContactosFabricantesRepository->find($id);
        $tipo=$request['tipo'];

        return view('tbl_contactos_fabricantes.fields',compact('tblContactosFabricantes','tipo'));
    }

    /**
     * Update the specified tbl_contactos_fabricantes in storage.
     *
     * @param int $id
     * @param Updatetbl_contactos_fabricantesRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        

        $id=$request['idconf'];

        $valida_correo=tbl_contactos_fabricantes::where('correo',$request['correo'])->count();
        if($valida_correo>=1){

            $valida=tbl_contactos_fabricantes::where('correo',$request['correo'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

               $tblContactosFabricantes = $this->tblContactosFabricantesRepository->find($id);
               $tblContactosFabricantes = $this->tblContactosFabricantesRepository->update($request->all(), $id);

                return 0;

            }else{

                return 1;
            }

        }else{

            $tblContactosFabricantes = $this->tblContactosFabricantesRepository->find($id);
            $tblContactosFabricantes = $this->tblContactosFabricantesRepository->update($request->all(), $id);

            return 0;

        }
    }

    /**
     * Remove the specified tbl_contactos_fabricantes from storage.
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
        DB::table('tbl_contactos_fabricantes')->delete($id);

    }

    public function actualiza_contactos_fabricantes(Request $request)
    {

         $id_fabricante=$request['id_fabricante'];

         $tblContactosFabricantes=tbl_contactos_fabricantes::where('id_fabricante',$id_fabricante)->get();
         return view('tbl_contactos_fabricantes.table',compact('tblContactosFabricantes'));



    }
}
