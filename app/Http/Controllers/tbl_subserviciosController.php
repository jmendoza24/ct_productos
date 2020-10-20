<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_subserviciosRequest;
use App\Http\Requests\Updatetbl_subserviciosRequest;
use App\Repositories\tbl_subserviciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB; 

use App\Models\tbl_subservicios;

class tbl_subserviciosController extends AppBaseController
{
    /** @var  tbl_subserviciosRepository */
    private $tblSubserviciosRepository;

    public function __construct(tbl_subserviciosRepository $tblSubserviciosRepo)
    {
        $this->tblSubserviciosRepository = $tblSubserviciosRepo;
    }

    /**
     * Display a listing of the tbl_subservicios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index2(Request $request)
    {   

        $id_servicio=$request['id'];
        $tblSubservicios = tbl_subservicios::where('id_servicio',$id_servicio)->get();

        return view('tbl_subservicios.table',compact('tblSubservicios','id_servicio'));
    }

    /**
     * Show the form for creating a new tbl_subservicios.
     *
     * @return Response
     */
    public function create()
    {
        return view('tbl_subservicios.create');
    }

    /**
     * Store a newly created tbl_subservicios in storage.
     *
     * @param Createtbl_subserviciosRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $tblSubservicios = $this->tblSubserviciosRepository->create($input);
    }

    /**
     * Display the specified tbl_subservicios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblSubservicios = $this->tblSubserviciosRepository->find($id);

        if (empty($tblSubservicios)) {
            Flash::error('Tbl Subservicios not found');

            return redirect(route('tblSubservicios.index'));
        }

        return view('tbl_subservicios.show')->with('tblSubservicios', $tblSubservicios);
    }

    /**
     * Show the form for editing the specified tbl_subservicios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tblSubservicios = $this->tblSubserviciosRepository->find($id);

        if (empty($tblSubservicios)) {
            Flash::error('Tbl Subservicios not found');

            return redirect(route('tblSubservicios.index'));
        }

        return view('tbl_subservicios.edit')->with('tblSubservicios', $tblSubservicios);
    }

    /**
     * Update the specified tbl_subservicios in storage.
     *
     * @param int $id
     * @param Updatetbl_subserviciosRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $id=$request['id'];
        $tblSubservicios = $this->tblSubserviciosRepository->find($id);
        $tblSubservicios = $this->tblSubserviciosRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified tbl_subservicios from storage.
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
        DB::table('tbl_subservicios')->delete($id);
    }


    public function actualiza_subservicios(Request $request)
    {



        $id_servicio=$request['id_servicio'];
        $tblSubservicios = tbl_subservicios::where('id_servicio',$id_servicio)->get();

        return view('tbl_subservicios.table',compact('tblSubservicios','id_servicio'));

    }
}
