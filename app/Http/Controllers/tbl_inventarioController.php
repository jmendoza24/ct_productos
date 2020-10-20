<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_inventarioRequest;
use App\Http\Requests\Updatetbl_inventarioRequest;
use App\Repositories\tbl_inventarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\tbl_inventario;

class tbl_inventarioController extends AppBaseController
{
    /** @var  tbl_inventarioRepository */
    private $tblInventarioRepository;

    public function __construct(tbl_inventarioRepository $tblInventarioRepo)
    {
        $this->tblInventarioRepository = $tblInventarioRepo;
    }

    /**
     * Display a listing of the tbl_inventario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $inventario = new tbl_inventario();
        $tblInventarios = $inventario->sql_inventario();

        return view('tbl_inventarios.index',compact('tblInventarios'));
    }

    /**
     * Show the form for creating a new tbl_inventario.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_inventarios.create');
    }

    /**
     * Store a newly created tbl_inventario in storage.
     *
     * @param Createtbl_inventarioRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_inventarioRequest $request)
    {
        $input = $request->all();

        $tblInventario = $this->tblInventarioRepository->create($input);

        Flash::success('Tbl Inventario saved successfully.');

        return redirect(route('tblInventarios.index'));
    }

    /**
     * Display the specified tbl_inventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblInventario = $this->tblInventarioRepository->find($id);

        if (empty($tblInventario)) {
            Flash::error('Tbl Inventario not found');

            return redirect(route('tblInventarios.index'));
        }

        return view('tbl_inventarios.show')->with('tblInventario', $tblInventario);
    }

    /**
     * Show the form for editing the specified tbl_inventario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblInventario = $this->tblInventarioRepository->find($id);

        if (empty($tblInventario)) {
            Flash::error('Tbl Inventario not found');

            return redirect(route('tblInventarios.index'));
        }

        return view('tbl_inventarios.edit')->with('tblInventario', $tblInventario);
    }

    /**
     * Update the specified tbl_inventario in storage.
     *
     * @param int $id
     * @param Updatetbl_inventarioRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetbl_inventarioRequest $request)
    {
        $tblInventario = $this->tblInventarioRepository->find($id);

        if (empty($tblInventario)) {
            Flash::error('Tbl Inventario not found');

            return redirect(route('tblInventarios.index'));
        }

        $tblInventario = $this->tblInventarioRepository->update($request->all(), $id);

        Flash::success('Tbl Inventario updated successfully.');

        return redirect(route('tblInventarios.index'));
    }

    /**
     * Remove the specified tbl_inventario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblInventario = $this->tblInventarioRepository->find($id);

        if (empty($tblInventario)) {
            Flash::error('Tbl Inventario not found');

            return redirect(route('tblInventarios.index'));
        }

        $this->tblInventarioRepository->delete($id);

        Flash::success('Tbl Inventario deleted successfully.');

        return redirect(route('tblInventarios.index'));
    }
}
