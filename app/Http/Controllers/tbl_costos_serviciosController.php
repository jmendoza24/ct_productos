<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_costos_serviciosRequest;
use App\Http\Requests\Updatetbl_costos_serviciosRequest;
use App\Repositories\tbl_costos_serviciosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\tbl_ubicaciones;
use App\Models\tbl_costos_servicios;
use App\Models\tbl_formatos;
use App\Models\tbl_modulos;
use App\Models\tbl_subservicios;


use DB;

class tbl_costos_serviciosController extends AppBaseController
{
    /** @var  tbl_costos_serviciosRepository */
    private $tblCostosServiciosRepository;

    public function __construct(tbl_costos_serviciosRepository $tblCostosServiciosRepo)
    {
        $this->tblCostosServiciosRepository = $tblCostosServiciosRepo;
    }

    /**
     * Display a listing of the tbl_costos_servicios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //$tblCostosServicios = $this->tblCostosServiciosRepository->all();

        $tbl_costosservicios = new tbl_costos_servicios();
        $tblCostosServicios = $tbl_costosservicios->sql_costos_servicios();

        return view('tbl_costos_servicios.index',compact('tblCostosServicios'));
    }

    /**
     * Show the form for creating a new tbl_costos_servicios.
     *
     * @return Response
     */

    public function create(Request $request)
    {
        $tipo=$request['tipo'];

        $id_direccion=$request['id_direccion'];
        $direcciones=tbl_modulos::where('id',$id_direccion)->get();
        $direcciones=$direcciones[0];
        $nombre_direccion=$direcciones->modulo;

        $tbl_formatos = new tbl_formatos();
        $sql_formatos_registro_civil = $tbl_formatos->sql_formatos_registro_civil();

        return view('tbl_costos_servicios.fields',compact('tipo','sql_formatos_registro_civil','id_direccion','nombre_direccion'));
    }

    /**
     * Store a newly created tbl_costos_servicios in storage.
     *
     * @param Createtbl_costos_serviciosRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['monto'] = str_replace('$', '', str_replace(',', '', $input['monto']));

        $tblCostosServicios = $this->tblCostosServiciosRepository->create($input);
    }

    /**
     * Display the specified tbl_costos_servicios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblCostosServicios = $this->tblCostosServiciosRepository->find($id);

        if (empty($tblCostosServicios)) {
            Flash::error('Tbl Costos Servicios not found');

            return redirect(route('tblCostosServicios.index'));
        }

        return view('tbl_costos_servicios.show')->with('tblCostosServicios', $tblCostosServicios);
    }

    /**
     * Show the form for editing the specified tbl_costos_servicios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {   

        $tipo=$request['tipo'];
        $id=$request['id'];
        $id_servicio=$request['id_servicio'];
        $id_direccion=$request['id_direccion'];
        $direcciones=tbl_modulos::where('id',$id_direccion)->get();
        $direcciones=$direcciones[0];
        $nombre_direccion=$direcciones->modulo;

        $sql_subservicios=tbl_subservicios::where('id_servicio',$id_servicio)->get();
        $tbl_formatos = new tbl_formatos();
        $sql_formatos_registro_civil = $tbl_formatos->sql_formatos_registro_civil();

        $tblCostosServicios = $this->tblCostosServiciosRepository->find($id);

        return view('tbl_costos_servicios.fields',compact('sql_subservicios','tipo','sql_formatos_registro_civil','tblCostosServicios','id_direccion','nombre_direccion'));
    }

    /**
     * Update the specified tbl_costos_servicios in storage.
     *
     * @param int $id
     * @param Updatetbl_costos_serviciosRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {   

        $id=$request['idcs'];
        $request['monto'] = str_replace('$', '', str_replace(',', '', $request['monto']));

        $tblCostosServicios = $this->tblCostosServiciosRepository->find($id);
        $tblCostosServicios = $this->tblCostosServiciosRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified tbl_costos_servicios from storage.
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
        DB::table('tbl_costos_servicios')->delete($id);

    }

    public function actualiza_servicios_costos(Request $request)
    {

        $tbl_costosservicios = new tbl_costos_servicios();
        $tblCostosServicios = $tbl_costosservicios->sql_costos_servicios();

           return view('tbl_costos_servicios.table',compact('tblCostosServicios'));
 

    }


    public function bs_subservicios(Request $request)
    {


        $id_servicio=$request['id_servicio'];
        $subservicios = tbl_subservicios::where('id_servicio',$id_servicio)->orderBy('id', 'DESC')->get();  
    
        $op = ' <option value="0">Sin subservicio</option>';
        foreach ($subservicios as $con ) {
            $op .="<option  value=".$con->id.">".$con->subservicio;
        }

        return $op;
    }
}
