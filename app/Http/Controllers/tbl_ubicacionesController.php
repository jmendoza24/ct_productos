<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_ubicacionesRequest;
use App\Http\Requests\Updatetbl_ubicacionesRequest;
use App\Repositories\tbl_ubicacionesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_ubicacionesController extends AppBaseController
{
    /** @var  tbl_ubicacionesRepository */
    private $tblUbicacionesRepository;

    public function __construct(tbl_ubicacionesRepository $tblUbicacionesRepo)
    {
        $this->tblUbicacionesRepository = $tblUbicacionesRepo;
    }

    /**
     * Display a listing of the tbl_ubicaciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblUbicaciones = $this->tblUbicacionesRepository->all();

        return view('tbl_ubicaciones.index')
            ->with('tblUbicaciones', $tblUbicaciones);
    }

    /**
     * Show the form for creating a new tbl_ubicaciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_ubicaciones.create');
    }

    /**
     * Store a newly created tbl_ubicaciones in storage.
     *
     * @param Createtbl_ubicacionesRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_ubicacionesRequest $request)
    {
        $input = $request->all();

        $tblUbicaciones = $this->tblUbicacionesRepository->create($input);

        Flash::success('Tbl Ubicaciones saved successfully.');

        return redirect(route('tblUbicaciones.index'));
    }

    /**
     * Display the specified tbl_ubicaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblUbicaciones = $this->tblUbicacionesRepository->find($id);

        if (empty($tblUbicaciones)) {
            Flash::error('Tbl Ubicaciones not found');

            return redirect(route('tblUbicaciones.index'));
        }

        return view('tbl_ubicaciones.show')->with('tblUbicaciones', $tblUbicaciones);
    }

    /**
     * Show the form for editing the specified tbl_ubicaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblUbicaciones = $this->tblUbicacionesRepository->find($id);

        if (empty($tblUbicaciones)) {
            Flash::error('Tbl Ubicaciones not found');

            return redirect(route('tblUbicaciones.index'));
        }

        return view('tbl_ubicaciones.edit')->with('tblUbicaciones', $tblUbicaciones);
    }

    /**
     * Update the specified tbl_ubicaciones in storage.
     *
     * @param int $id
     * @param Updatetbl_ubicacionesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetbl_ubicacionesRequest $request)
    {
        $tblUbicaciones = $this->tblUbicacionesRepository->find($id);

        if (empty($tblUbicaciones)) {
            Flash::error('Tbl Ubicaciones not found');

            return redirect(route('tblUbicaciones.index'));
        }

        $tblUbicaciones = $this->tblUbicacionesRepository->update($request->all(), $id);

        Flash::success('Tbl Ubicaciones updated successfully.');

        return redirect(route('tblUbicaciones.index'));
    }

    /**
     * Remove the specified tbl_ubicaciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblUbicaciones = $this->tblUbicacionesRepository->find($id);

        if (empty($tblUbicaciones)) {
            Flash::error('Tbl Ubicaciones not found');

            return redirect(route('tblUbicaciones.index'));
        }

        $this->tblUbicacionesRepository->delete($id);

        Flash::success('Tbl Ubicaciones deleted successfully.');

        return redirect(route('tblUbicaciones.index'));
    }
}
