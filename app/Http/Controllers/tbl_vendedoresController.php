<?php

namespace App\Http\Controllers;
use App\Models\tbl_vendedores;
use App\Models\tbl_tipo_vendedor;

use App\Http\Requests\Createtbl_vendedoresRequest;
use App\Http\Requests\Updatetbl_vendedoresRequest;
use App\Repositories\tbl_vendedoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
class tbl_vendedoresController extends AppBaseController
{
    /** @var  tbl_vendedoresRepository */
    private $tblVendedoresRepository;

    public function __construct(tbl_vendedoresRepository $tblVendedoresRepo)
    {
        $this->tblVendedoresRepository = $tblVendedoresRepo;
    }

    /**
     * Display a listing of the tbl_vendedores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
         $tblVendedores = $this->tblVendedoresRepository->all();
         return view('tbl_vendedores.index',compact('tblVendedores'));

    }



    /**
     * Show the form for creating a new tbl_vendedores.
     *
     * @return Response
     */
    public function create(Request $request)
    {   
        $tipo=$request['tipo'];
        $estados = new tbl_vendedores();
        $sql_estados = $estados->estados();  
        $tbl_tipo_vendedor=tbl_tipo_vendedor::all();


        return view('tbl_vendedores.fields',compact('tipo','sql_estados','tbl_tipo_vendedor'));
    }



    /**
     * Store a newly created tbl_vendedores in storage.
     *
     * @param Createtbl_vendedoresRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $valida=tbl_vendedores::where('correo',$input['correo'])->count();

        if($valida>=1){
            return 1;
        }else{
            $tblVendedores = $this->tblVendedoresRepository->create($input); 
            return 0;   
        }

    }

    public function actualiza_vendedores(Request $request){

         $tblVendedores = $this->tblVendedoresRepository->all();
         return view('tbl_vendedores.table',compact('tblVendedores'));


    }

    /**
     * Display the specified tbl_vendedores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblVendedores = $this->tblVendedoresRepository->find($id);
        return view('tbl_vendedores.show')->with('tblVendedores', $tblVendedores);
    }

    /**
     * Show the form for editing the specified tbl_vendedores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {
        
        $id=$request['id'];
        $tipo=$request['tipo'];
        $estados = new tbl_vendedores();
        $sql_estados = $estados->estados();
        $datos=tbl_vendedores::where('id',$id)->get();
        $datos=$datos[0];
        $id_edo=$datos->id_estado;
        $municipios=$estados->municipios_editados($id_edo);  
        $tbl_tipo_vendedor=tbl_tipo_vendedor::all();
 

        $tblVendedores = $this->tblVendedoresRepository->find($id);
        return view('tbl_vendedores.fields',compact('tipo','tblVendedores','sql_estados','municipios','tbl_tipo_vendedor'));
    }

    /**
     * Update the specified tbl_vendedores in storage.
     *
     * @param int $id
     * @param Updatetbl_vendedoresRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {   
        $id=$request['idv'];
        $valida_correo=tbl_vendedores::where('correo',$request['correo'])->count();

        if($valida_correo>=1){

            $valida=tbl_vendedores::where('correo',$request['correo'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

                $tblVendedores = $this->tblVendedoresRepository->find($id);
                $tblVendedores = $this->tblVendedoresRepository->update($request->all(), $id);

                return 0;

            }else{

                return 1;
            }

        }else{

            $tblVendedores = $this->tblVendedoresRepository->find($id);
            $tblVendedores = $this->tblVendedoresRepository->update($request->all(), $id);

            return 0;

        }
        
    }

    /**
     * Remove the specified tbl_vendedores from storage.
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
        DB::table('tbl_vendedores')->delete($id);


    }

    public function bs_municipio(Request $request)
    {


        $municipios = new tbl_vendedores();
        $sql_municipios = $municipios->municipios($request);  


        $op = ' <option value="0">Selecciona una opción</option>';
        foreach ($sql_municipios as $con ) {
            $op .="<option  value=".$con->id.">".$con->municipio;
        }
        
        return $op;

    }

    public function activa_vendedor(Request $request)
    {

        $estatus=tbl_vendedores::where('id',$request['id'])->get();
        $estatus=$estatus[0];
        $activo=$estatus->activo;
        $id=$request['id'];

        $input = $request->all();

        if($activo==1){

                $input['activo']=0;
        }else{
                $input['activo']=1;
        }

            $tblVendedores = $this->tblVendedoresRepository->find($id);
            $tblVendedores = $this->tblVendedoresRepository->update($input, $id);

    }
}
