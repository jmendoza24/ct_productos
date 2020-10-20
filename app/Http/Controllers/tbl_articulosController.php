<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_articulosRequest;
use App\Http\Requests\Updatetbl_articulosRequest;
use App\Repositories\tbl_articulosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_articulosController extends AppBaseController
{
    /** @var  tbl_articulosRepository */
    private $tblArticulosRepository;

    public function __construct(tbl_articulosRepository $tblArticulosRepo)
    {
        $this->tblArticulosRepository = $tblArticulosRepo;
    }

    /**
     * Display a listing of the tbl_articulos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblArticulos = $this->tblArticulosRepository->all();

        return view('tbl_articulos.index')
            ->with('tblArticulos', $tblArticulos);
    }

    /**
     * Show the form for creating a new tbl_articulos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_articulos.create');
    }

    /**
     * Store a newly created tbl_articulos in storage.
     *
     * @param Createtbl_articulosRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_articulosRequest $request)
    {
        $input = $request->all();

        $tblArticulos = $this->tblArticulosRepository->create($input);

        Flash::success('Tbl Articulos saved successfully.');

        return redirect(route('tblArticulos.index'));
    }

    /**
     * Display the specified tbl_articulos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblArticulos = $this->tblArticulosRepository->find($id);

        if (empty($tblArticulos)) {
            Flash::error('Tbl Articulos not found');

            return redirect(route('tblArticulos.index'));
        }

        return view('tbl_articulos.show')->with('tblArticulos', $tblArticulos);
    }

    /**
     * Show the form for editing the specified tbl_articulos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblArticulos = $this->tblArticulosRepository->find($id);

        if (empty($tblArticulos)) {
            Flash::error('Tbl Articulos not found');

            return redirect(route('tblArticulos.index'));
        }

        return view('tbl_articulos.edit')->with('tblArticulos', $tblArticulos);
    }

    /**
     * Update the specified tbl_articulos in storage.
     *
     * @param int $id
     * @param Updatetbl_articulosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetbl_articulosRequest $request)
    {
        $tblArticulos = $this->tblArticulosRepository->find($id);

        if (empty($tblArticulos)) {
            Flash::error('Tbl Articulos not found');

            return redirect(route('tblArticulos.index'));
        }

        $tblArticulos = $this->tblArticulosRepository->update($request->all(), $id);

        Flash::success('Tbl Articulos updated successfully.');

        return redirect(route('tblArticulos.index'));
    }

    /**
     * Remove the specified tbl_articulos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblArticulos = $this->tblArticulosRepository->find($id);

        if (empty($tblArticulos)) {
            Flash::error('Tbl Articulos not found');

            return redirect(route('tblArticulos.index'));
        }

        $this->tblArticulosRepository->delete($id);

        Flash::success('Tbl Articulos deleted successfully.');

        return redirect(route('tblArticulos.index'));
    }
}
