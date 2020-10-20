<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_formatosRequest;
use App\Http\Requests\Updatetbl_formatosRequest;
use App\Repositories\tbl_formatosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\tbl_modulos;
use App\Models\tbl_formatos;
use App\Models\tbl_ubicaciones;
use DB; 

class tbl_formatosController extends AppBaseController
{
    /** @var  tbl_formatosRepository */
    private $tblFormatosRepository;

    public function __construct(tbl_formatosRepository $tblFormatosRepo)
    {
        $this->tblFormatosRepository = $tblFormatosRepo;
    }

    /**
     * Display a listing of the tbl_formatos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tbl_formatos = new tbl_formatos();
        $tblFormatos = $tbl_formatos->sql_formatos();
       
        return view('tbl_formatos.index',compact('tblFormatos'));
    }

    /**
     * Show the form for creating a new tbl_formatos.
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
        $tbl_registro_civil=tbl_ubicaciones::where('id_direccion',$id_direccion)->get();
        return view('tbl_formatos.fields',compact('tipo','tbl_registro_civil','id_direccion','nombre_direccion')); 
    }

    /**
     * Store a newly created tbl_formatos in storage.
     *
     * @param Createtbl_formatosRequest $request
     *
     * @return Response
     */
    
    public function store(Request $request)
    {


        $input = $request->all();
        $tblFormatos = $this->tblFormatosRepository->create($input);
        
    }

    /**
     * Display the specified tbl_formatos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblFormatos = $this->tblFormatosRepository->find($id);

        if (empty($tblFormatos)) {
            Flash::error('Tbl Formatos not found');

            return redirect(route('tblFormatos.index'));
        }

        return view('tbl_formatos.show')->with('tblFormatos', $tblFormatos);
    }

    /**
     * Show the form for editing the specified tbl_formatos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {   
        $id=$request['id'];
        $tipo=$request['tipo'];
        $id_direccion=$request['id_direccion'];

        $direcciones=tbl_modulos::where('id',$id_direccion)->get();
        $direcciones=$direcciones[0];
        $nombre_direccion=$direcciones->modulo;
        

        $tblFormatos = $this->tblFormatosRepository->find($id);
        $tbl_registro_civil=tbl_ubicaciones::where('id_direccion',$id_direccion)->get();

        return view('tbl_formatos.fields',compact('tblFormatos','tipo','tbl_registro_civil','id_direccion','nombre_direccion'));
    }

    /**
     * Update the specified tbl_formatos in storage.
     *
     * @param int $id
     * @param Updatetbl_formatosRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {   
        $id=$request['idf'];

        $tblFormatos = $this->tblFormatosRepository->find($id);
        $tblFormatos = $this->tblFormatosRepository->update($request->all(), $id);
    }

    /**
     * Remove the specified tbl_formatos from storage.
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
        DB::table('tbl_formatos')->delete($id);

    }

    public function actualiza_servicios(Request $request)
    {
            $tbl_formatos = new tbl_formatos();
            $tblFormatos = $tbl_formatos->sql_formatos();
            return view('tbl_formatos.table',compact('tblFormatos'));

    }
}
