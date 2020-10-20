<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_titulos_listaRequest;
use App\Http\Requests\Updatetbl_titulos_listaRequest;
use App\Repositories\tbl_titulos_listaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_titulos_listaController extends AppBaseController
{
    /** @var  tbl_titulos_listaRepository */
    private $tblTitulosListaRepository;

    public function __construct(tbl_titulos_listaRepository $tblTitulosListaRepo)
    {
        $this->tblTitulosListaRepository = $tblTitulosListaRepo;
    }

    /**
     * Display a listing of the tbl_titulos_lista.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblTitulosListas = $this->tblTitulosListaRepository->all();

        return view('tbl_titulos_listas.index')
            ->with('tblTitulosListas', $tblTitulosListas);
    }

    /**
     * Show the form for creating a new tbl_titulos_lista.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_titulos_listas.create');
    }

    /**
     * Store a newly created tbl_titulos_lista in storage.
     *
     * @param Createtbl_titulos_listaRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_titulos_listaRequest $request)
    {
        $input = $request->all();

        $tblTitulosLista = $this->tblTitulosListaRepository->create($input);

        Flash::success('Tbl Titulos Lista saved successfully.');

        return redirect(route('tblTitulosListas.index'));
    }

    /**
     * Display the specified tbl_titulos_lista.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblTitulosLista = $this->tblTitulosListaRepository->find($id);

        if (empty($tblTitulosLista)) {
            Flash::error('Tbl Titulos Lista not found');

            return redirect(route('tblTitulosListas.index'));
        }

        return view('tbl_titulos_listas.show')->with('tblTitulosLista', $tblTitulosLista);
    }

    /**
     * Show the form for editing the specified tbl_titulos_lista.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblTitulosLista = $this->tblTitulosListaRepository->find($id);

        if (empty($tblTitulosLista)) {
            Flash::error('Tbl Titulos Lista not found');

            return redirect(route('tblTitulosListas.index'));
        }

        return view('tbl_titulos_listas.edit')->with('tblTitulosLista', $tblTitulosLista);
    }

    /**
     * Update the specified tbl_titulos_lista in storage.
     *
     * @param int $id
     * @param Updatetbl_titulos_listaRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $id=1;
        $tblTitulosLista = $this->tblTitulosListaRepository->find($id);
        $tblTitulosLista = $this->tblTitulosListaRepository->update($request->all(), $id);

    }

    /**
     * Remove the specified tbl_titulos_lista from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tblTitulosLista = $this->tblTitulosListaRepository->find($id);

        if (empty($tblTitulosLista)) {
            Flash::error('Tbl Titulos Lista not found');

            return redirect(route('tblTitulosListas.index'));
        }

        $this->tblTitulosListaRepository->delete($id);

        Flash::success('Tbl Titulos Lista deleted successfully.');

        return redirect(route('tblTitulosListas.index'));
    }
}
