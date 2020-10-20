<?php

namespace App\Http\Controllers;
use App\Models\tbl_vendedores;
use App\Models\tbl_fabricantes;
use App\Models\tbl_contactos_fabricantes;
use DB;

use App\Http\Requests\Createtbl_fabricantesRequest;
use App\Http\Requests\Updatetbl_fabricantesRequest;
use App\Repositories\tbl_fabricantesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_fabricantesController extends AppBaseController
{
    /** @var  tbl_fabricantesRepository */
    private $tblFabricantesRepository;

    public function __construct(tbl_fabricantesRepository $tblFabricantesRepo)
    {
        $this->tblFabricantesRepository = $tblFabricantesRepo;
    }

    /**
     * Display a listing of the tbl_fabricantes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblFabricantes = $this->tblFabricantesRepository->all();

        return view('tbl_fabricantes.index')
            ->with('tblFabricantes', $tblFabricantes);
    }

    /**
     * Show the form for creating a new tbl_fabricantes.
     *
     * @return Response
     */
    public function create(Request $request)
    {

        $tipo=$request['tipo'];
        $estados = new tbl_vendedores();
        $pais_sql = $estados->pais_sql();
          
        return view('tbl_fabricantes.fields',compact('tipo','pais_sql'));
    }

    /**
     * Store a newly created tbl_fabricantes in storage.
     *
     * @param Createtbl_fabricantesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
       
        $input = $request->all();
        $tblFabricantes = $this->tblFabricantesRepository->create($input);
    }

    /**
     * Display the specified tbl_fabricantes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblFabricantes = $this->tblFabricantesRepository->find($id);

        if (empty($tblFabricantes)) {
            Flash::error('Tbl Fabricantes not found');

            return redirect(route('tblFabricantes.index'));
        }

        return view('tbl_fabricantes.show')->with('tblFabricantes', $tblFabricantes);
    }

    /**
     * Show the form for editing the specified tbl_fabricantes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {


        $tblFabricantes = $this->tblFabricantesRepository->find($id);
        $estados = new tbl_vendedores();
        $pais_sql = $estados->pais_sql();
        $tblContactosFabricantes= tbl_contactos_fabricantes::where('id_fabricante',$id)->get();
        $tipo=1;   

        $id_cliente=$id;
        $idf=$id; 

        return view('tbl_fabricantes.edit',compact('idf','tblFabricantes','pais_sql','tipo','tblContactosFabricantes'));
  
    }

    /**
     * Update the specified tbl_fabricantes in storage.
     *
     * @param int $id
     * @param Updatetbl_fabricantesRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {   
        $id=$request['idf'];
        $tblFabricantes = $this->tblFabricantesRepository->find($id);
        $tblFabricantes = $this->tblFabricantesRepository->update($request->all(), $id);

    }

    /**
     * Remove the specified tbl_fabricantes from storage.
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
        DB::table('tbl_fabricantes')->delete($id);

    }


    public function actualiza_fabricantes()
    {

         $tblFabricantes = tbl_fabricantes::all();
         return view('tbl_fabricantes.table',compact('tblFabricantes'));

    }

    public function activa_fabricante(Request $request)
    {

        $estatus=tbl_fabricantes::where('id',$request['id'])->get();
        $estatus=$estatus[0];
        $activo=$estatus->activo;
        $id=$request['id'];

        $input = $request->all();

        if($activo==1){

                $input['activo']=0;
        }else{
                $input['activo']=1;
        }
            $tblFabricantes = $this->tblFabricantesRepository->find($id);
            $tblFabricantes = $this->tblFabricantesRepository->update($input, $id);


    
    }
}
