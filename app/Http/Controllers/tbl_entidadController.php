<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_entidadRequest;
use App\Http\Requests\Updatetbl_entidadRequest;
use App\Repositories\tbl_entidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;
use App\Models\tbl_modulos;
use Illuminate\Support\Facades\Storage;

class tbl_entidadController extends AppBaseController
{
    /** @var  tbl_entidadRepository */
    private $tblEntidadRepository;

    public function __construct(tbl_entidadRepository $tblEntidadRepo)
    {
        $this->tblEntidadRepository = $tblEntidadRepo;
    }

    /**
     * Display a listing of the tbl_entidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblEntidads = $this->tblEntidadRepository->all();
        $tblEntidads=$tblEntidads[0];
        $estados = new tbl_modulos();
        $sql_estados = $estados->estados();

        if(empty($tblEntidads->id_estado)){

            $valida=0;
            return view('tbl_entidads.index',compact('tblEntidads','sql_estados','valida'));

        }else{
                $valida=1;
                $id_estado=$tblEntidads->id_estado;
                $estados = new tbl_modulos();
                $sql_municipios = $estados->municipios($id_estado);
                return view('tbl_entidads.index',compact('tblEntidads','sql_estados','sql_municipios','valida'));

     
        }

        
      //  $sql_municipios = $estados->municipios_sql();
       


    }

    /**
     * Show the form for creating a new tbl_entidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_entidads.create');
    }


        public function sube_logo(Request $request)
    {


        $arreglo = $request->all();
        $id=1;
   
        if(empty($arreglo['logo'])){
            
            unset($arreglo['logo']);
        }else{
           
           //$path = $request->file('foto')->store('');
           $file = $request->file('logo');
         
           $nombre = $file->getClientOriginalName();
           \Storage::disk('')->put($nombre,\File::get($file));
           $arreglo['logo']=$nombre;
         
        }

        $tblEntidad = $this->tblEntidadRepository->find($id);
        $tblEntidad = $this->tblEntidadRepository->update($arreglo, $id);


    }

    /**
     * Store a newly created tbl_entidad in storage.
     *
     * @param Createtbl_entidadRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_entidadRequest $request)
    {
        $input = $request->all();

        $tblEntidad = $this->tblEntidadRepository->create($input);

        Flash::success('Tbl Entidad saved successfully.');

        return redirect(route('tblEntidads.index'));
    }

    /**
     * Display the specified tbl_entidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblEntidad = $this->tblEntidadRepository->find($id);

        return view('tbl_entidads.show')->with('tblEntidad', $tblEntidad);
    }

    /**
     * Show the form for editing the specified tbl_entidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblEntidad = $this->tblEntidadRepository->find($id);
     
        

        return view('tbl_entidads.edit')->with('tblEntidad', $tblEntidad);
    }

    /**
     * Update the specified tbl_entidad in storage.
     *
     * @param int $id
     * @param Updatetbl_entidadRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {   
        $id=1;
        $tblEntidad = $this->tblEntidadRepository->find($id);
        $tblEntidad = $this->tblEntidadRepository->update($request->all(), $id);

    }

    public function bs_municipio(Request $request)
    {   
        
        $id_estado=$request['id_estado'];
        $estados = new tbl_modulos();
        $sql_municipios = $estados->municipios($id_estado);
     

    
        $op = ' <option value="0">Selecciona una opción</option>';
        foreach ($sql_municipios as $con ) {
            $op .="<option  value=".$con->id.">".$con->municipio;
        }

        return $op;
       
    }


    /**
     * Remove the specified tbl_entidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblEntidad = $this->tblEntidadRepository->find($id);

        if (empty($tblEntidad)) {
            Flash::error('Tbl Entidad not found');

            return redirect(route('tblEntidads.index'));
        }

        $this->tblEntidadRepository->delete($id);

        Flash::success('Tbl Entidad deleted successfully.');

        return redirect(route('tblEntidads.index'));
    }
}
