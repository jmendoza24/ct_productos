<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_tipo_precioRequest;
use App\Http\Requests\Updatetbl_tipo_precioRequest;
use App\Repositories\tbl_tipo_precioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_tipo_precioController extends AppBaseController
{
    /** @var  tbl_tipo_precioRepository */
    private $tblTipoPrecioRepository;

    public function __construct(tbl_tipo_precioRepository $tblTipoPrecioRepo)
    {
        $this->tblTipoPrecioRepository = $tblTipoPrecioRepo;
    }

    /**
     * Display a listing of the tbl_tipo_precio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblTipoPrecios = $this->tblTipoPrecioRepository->all();

        return view('tbl_tipo_precios.index')
            ->with('tblTipoPrecios', $tblTipoPrecios);
    }

    /**
     * Show the form for creating a new tbl_tipo_precio.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_tipo_precios.create');
    }

    /**
     * Store a newly created tbl_tipo_precio in storage.
     *
     * @param Createtbl_tipo_precioRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_tipo_precioRequest $request)
    {
        $input = $request->all();

        $tblTipoPrecio = $this->tblTipoPrecioRepository->create($input);

        Flash::success('Tbl Tipo Precio saved successfully.');

        return redirect(route('tblTipoPrecios.index'));
    }

    /**
     * Display the specified tbl_tipo_precio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblTipoPrecio = $this->tblTipoPrecioRepository->find($id);

        if (empty($tblTipoPrecio)) {
            Flash::error('Tbl Tipo Precio not found');

            return redirect(route('tblTipoPrecios.index'));
        }

        return view('tbl_tipo_precios.show')->with('tblTipoPrecio', $tblTipoPrecio);
    }

    /**
     * Show the form for editing the specified tbl_tipo_precio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblTipoPrecio = $this->tblTipoPrecioRepository->find($id);

        if (empty($tblTipoPrecio)) {
            Flash::error('Tbl Tipo Precio not found');

            return redirect(route('tblTipoPrecios.index'));
        }

        return view('tbl_tipo_precios.edit')->with('tblTipoPrecio', $tblTipoPrecio);
    }

    /**
     * Update the specified tbl_tipo_precio in storage.
     *
     * @param int $id
     * @param Updatetbl_tipo_precioRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetbl_tipo_precioRequest $request)
    {
        $tblTipoPrecio = $this->tblTipoPrecioRepository->find($id);

        if (empty($tblTipoPrecio)) {
            Flash::error('Tbl Tipo Precio not found');

            return redirect(route('tblTipoPrecios.index'));
        }

        $tblTipoPrecio = $this->tblTipoPrecioRepository->update($request->all(), $id);

        Flash::success('Tbl Tipo Precio updated successfully.');

        return redirect(route('tblTipoPrecios.index'));
    }

    /**
     * Remove the specified tbl_tipo_precio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblTipoPrecio = $this->tblTipoPrecioRepository->find($id);

        if (empty($tblTipoPrecio)) {
            Flash::error('Tbl Tipo Precio not found');

            return redirect(route('tblTipoPrecios.index'));
        }

        $this->tblTipoPrecioRepository->delete($id);

        Flash::success('Tbl Tipo Precio deleted successfully.');

        return redirect(route('tblTipoPrecios.index'));
    }
}
