<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_modulosRequest;
use App\Http\Requests\Updatetbl_modulosRequest;
use App\Repositories\tbl_modulosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\tbl_modulos;
use App\Models\tbl_unidades;


class tbl_modulosController extends AppBaseController
{
    /** @var  tbl_modulosRepository */
    private $tblModulosRepository;

    public function __construct(tbl_modulosRepository $tblModulosRepo)
    {
        $this->tblModulosRepository = $tblModulosRepo;
    }

    /**
     * Display a listing of the tbl_modulos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblModulos = $this->tblModulosRepository->all();
        $estados = new tbl_modulos();
        $tblUnidades=tbl_unidades::all();
        $sql_estados = $estados->estados();
        $tblUbicaciones = $estados->ubicaciones();
        $sql_municipios = $estados->municipios_sql();
       
        return view('tbl_modulos.index',compact('tblModulos','sql_estados','sql_municipios','tblUnidades','tblUbicaciones'));
    }

    /**
     * Show the form for creating a new tbl_modulos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_modulos.create');
    }

    /**
     * Store a newly created tbl_modulos in storage.
     *
     * @param Createtbl_modulosRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_modulosRequest $request)
    {
        $input = $request->all();

        $tblModulos = $this->tblModulosRepository->create($input);

        Flash::success('Tbl Modulos saved successfully.');

        return redirect(route('tblModulos.index'));
    }

    /**
     * Display the specified tbl_modulos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblModulos = $this->tblModulosRepository->find($id);

        if (empty($tblModulos)) {
            Flash::error('Tbl Modulos not found');

            return redirect(route('tblModulos.index'));
        }

        return view('tbl_modulos.show')->with('tblModulos', $tblModulos);
    }

    /**
     * Show the form for editing the specified tbl_modulos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblModulos = $this->tblModulosRepository->find($id);

        if (empty($tblModulos)) {
            Flash::error('Tbl Modulos not found');

            return redirect(route('tblModulos.index'));
        }

        return view('tbl_modulos.edit')->with('tblModulos', $tblModulos);
    }

    /**
     * Update the specified tbl_modulos in storage.
     *
     * @param int $id
     * @param Updatetbl_modulosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetbl_modulosRequest $request)
    {
        $tblModulos = $this->tblModulosRepository->find($id);

        if (empty($tblModulos)) {
            Flash::error('Tbl Modulos not found');

            return redirect(route('tblModulos.index'));
        }

        $tblModulos = $this->tblModulosRepository->update($request->all(), $id);

        Flash::success('Tbl Modulos updated successfully.');

        return redirect(route('tblModulos.index'));
    }

    /**
     * Remove the specified tbl_modulos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblModulos = $this->tblModulosRepository->find($id);

        if (empty($tblModulos)) {
            Flash::error('Tbl Modulos not found');

            return redirect(route('tblModulos.index'));
        }

        $this->tblModulosRepository->delete($id);

        Flash::success('Tbl Modulos deleted successfully.');

        return redirect(route('tblModulos.index'));
    }
}
