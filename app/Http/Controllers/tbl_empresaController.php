<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_empresaRequest;
use App\Http\Requests\Updatetbl_empresaRequest;
use App\Repositories\tbl_empresaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Storage;

class tbl_empresaController extends AppBaseController
{
    /** @var  tbl_empresaRepository */
    private $tblEmpresaRepository;

    public function __construct(tbl_empresaRepository $tblEmpresaRepo)
    {
        $this->tblEmpresaRepository = $tblEmpresaRepo;
    }

    /**
     * Display a listing of the tbl_empresa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $id=1;
        $tblEmpresas = $this->tblEmpresaRepository->find($id);
        return view('tbl_empresas.index',compact('tblEmpresas'));
    }

    /**
     * Show the form for creating a new tbl_empresa.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_empresas.create');
    }

    /**
     * Store a newly created tbl_empresa in storage.
     *
     * @param Createtbl_empresaRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_empresaRequest $request)
    {
        $input = $request->all();

        $tblEmpresa = $this->tblEmpresaRepository->create($input);

        Flash::success('Tbl Empresa saved successfully.');

        return redirect(route('tblEmpresas.index'));
    }

    /**
     * Display the specified tbl_empresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblEmpresa = $this->tblEmpresaRepository->find($id);

        if (empty($tblEmpresa)) {
            Flash::error('Tbl Empresa not found');

            return redirect(route('tblEmpresas.index'));
        }

        return view('tbl_empresas.show')->with('tblEmpresa', $tblEmpresa);
    }

    /**
     * Show the form for editing the specified tbl_empresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblEmpresa = $this->tblEmpresaRepository->find($id);

        if (empty($tblEmpresa)) {
            Flash::error('Tbl Empresa not found');

            return redirect(route('tblEmpresas.index'));
        }

        return view('tbl_empresas.edit')->with('tblEmpresa', $tblEmpresa);
    }

    /**
     * Update the specified tbl_empresa in storage.
     *
     * @param int $id
     * @param Updatetbl_empresaRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $id=1;    
        $request['tipo_cambio'] = str_replace('$', '', str_replace(',', '', $request['tipo_cambio']));
        $tblEmpresa = $this->tblEmpresaRepository->find($id);
        $tblEmpresa = $this->tblEmpresaRepository->update($request->all(), $id);

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

        $tblEmpresa = $this->tblEmpresaRepository->find($id);
        $tblEmpresa = $this->tblEmpresaRepository->update($arreglo, $id);


    }

    /**
     * Remove the specified tbl_empresa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblEmpresa = $this->tblEmpresaRepository->find($id);

        if (empty($tblEmpresa)) {
            Flash::error('Tbl Empresa not found');

            return redirect(route('tblEmpresas.index'));
        }

        $this->tblEmpresaRepository->delete($id);

        Flash::success('Tbl Empresa deleted successfully.');

        return redirect(route('tblEmpresas.index'));
    }
}
