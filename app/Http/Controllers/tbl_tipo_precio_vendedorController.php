<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_tipo_precio_vendedorRequest;
use App\Http\Requests\Updatetbl_tipo_precio_vendedorRequest;
use App\Repositories\tbl_tipo_precio_vendedorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_tipo_precio_vendedorController extends AppBaseController
{
    /** @var  tbl_tipo_precio_vendedorRepository */
    private $tblTipoPrecioVendedorRepository;

    public function __construct(tbl_tipo_precio_vendedorRepository $tblTipoPrecioVendedorRepo)
    {
        $this->tblTipoPrecioVendedorRepository = $tblTipoPrecioVendedorRepo;
    }

    /**
     * Display a listing of the tbl_tipo_precio_vendedor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblTipoPrecioVendedors = $this->tblTipoPrecioVendedorRepository->all();

        return view('tbl_tipo_precio_vendedors.index')
            ->with('tblTipoPrecioVendedors', $tblTipoPrecioVendedors);
    }

    /**
     * Show the form for creating a new tbl_tipo_precio_vendedor.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_tipo_precio_vendedors.create');
    }

    /**
     * Store a newly created tbl_tipo_precio_vendedor in storage.
     *
     * @param Createtbl_tipo_precio_vendedorRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_tipo_precio_vendedorRequest $request)
    {
        $input = $request->all();

        $tblTipoPrecioVendedor = $this->tblTipoPrecioVendedorRepository->create($input);

        Flash::success('Tbl Tipo Precio Vendedor saved successfully.');

        return redirect(route('tblTipoPrecioVendedors.index'));
    }

    /**
     * Display the specified tbl_tipo_precio_vendedor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblTipoPrecioVendedor = $this->tblTipoPrecioVendedorRepository->find($id);

        if (empty($tblTipoPrecioVendedor)) {
            Flash::error('Tbl Tipo Precio Vendedor not found');

            return redirect(route('tblTipoPrecioVendedors.index'));
        }

        return view('tbl_tipo_precio_vendedors.show')->with('tblTipoPrecioVendedor', $tblTipoPrecioVendedor);
    }

    /**
     * Show the form for editing the specified tbl_tipo_precio_vendedor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblTipoPrecioVendedor = $this->tblTipoPrecioVendedorRepository->find($id);

        if (empty($tblTipoPrecioVendedor)) {
            Flash::error('Tbl Tipo Precio Vendedor not found');

            return redirect(route('tblTipoPrecioVendedors.index'));
        }

        return view('tbl_tipo_precio_vendedors.edit')->with('tblTipoPrecioVendedor', $tblTipoPrecioVendedor);
    }

    /**
     * Update the specified tbl_tipo_precio_vendedor in storage.
     *
     * @param int $id
     * @param Updatetbl_tipo_precio_vendedorRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetbl_tipo_precio_vendedorRequest $request)
    {
        $tblTipoPrecioVendedor = $this->tblTipoPrecioVendedorRepository->find($id);

        if (empty($tblTipoPrecioVendedor)) {
            Flash::error('Tbl Tipo Precio Vendedor not found');

            return redirect(route('tblTipoPrecioVendedors.index'));
        }

        $tblTipoPrecioVendedor = $this->tblTipoPrecioVendedorRepository->update($request->all(), $id);

        Flash::success('Tbl Tipo Precio Vendedor updated successfully.');

        return redirect(route('tblTipoPrecioVendedors.index'));
    }

    /**
     * Remove the specified tbl_tipo_precio_vendedor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblTipoPrecioVendedor = $this->tblTipoPrecioVendedorRepository->find($id);

        if (empty($tblTipoPrecioVendedor)) {
            Flash::error('Tbl Tipo Precio Vendedor not found');

            return redirect(route('tblTipoPrecioVendedors.index'));
        }

        $this->tblTipoPrecioVendedorRepository->delete($id);

        Flash::success('Tbl Tipo Precio Vendedor deleted successfully.');

        return redirect(route('tblTipoPrecioVendedors.index'));
    }
}
