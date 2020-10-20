<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_categoriasRequest;
use App\Http\Requests\Updatetbl_categoriasRequest;
use App\Repositories\tbl_categoriasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\tbl_categorias;
use DB;

class tbl_categoriasController extends AppBaseController
{
    /** @var  tbl_categoriasRepository */
    private $tblCategoriasRepository;

    public function __construct(tbl_categoriasRepository $tblCategoriasRepo)
    {
        $this->tblCategoriasRepository = $tblCategoriasRepo;
    }

    /**
     * Display a listing of the tbl_categorias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblCategorias = $this->tblCategoriasRepository->all();

        return view('tbl_categorias.index')
            ->with('tblCategorias', $tblCategorias);
    }

    /**
     * Show the form for creating a new tbl_categorias.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $tipo=$request['tipo'];
        return view('tbl_categorias.fields',compact('tipo'));
    
    }

    /**
     * Store a newly created tbl_categorias in storage.
     *
     * @param Createtbl_categoriasRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_categoriasRequest $request)
    {
        
        $input = $request->all();

        $valida=tbl_categorias::where('categoria',$input['categoria'])->count();

        if($valida>=1){
            return 1;
        }else{
            $tblCategorias = $this->tblCategoriasRepository->create($input);
            return 0;   
        }
    }

    /**
     * Display the specified tbl_categorias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblCategorias = $this->tblCategoriasRepository->find($id);

        if (empty($tblCategorias)) {
            Flash::error('Tbl Categorias not found');

            return redirect(route('tblCategorias.index'));
        }

        return view('tbl_categorias.show')->with('tblCategorias', $tblCategorias);
    }

    /**
     * Show the form for editing the specified tbl_categorias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {

        $id=$request['id'];
        $tipo=$request['tipo'];

        $tblCategorias = $this->tblCategoriasRepository->find($id);
        return view('tbl_categorias.fields',compact('tblCategorias','tipo'));
    }

    /**
     * Update the specified tbl_categorias in storage.
     *
     * @param int $id
     * @param Updatetbl_categoriasRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        

        $id=$request['idcat'];
        $valida_correo=tbl_categorias::where('categoria',$request['categoria'])->count();

        if($valida_correo>=1){

            $valida=tbl_categorias::where('categoria',$request['categoria'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

                $tblCategorias = $this->tblCategoriasRepository->find($id);
                $tblCategorias = $this->tblCategoriasRepository->update($request->all(), $id);

                return 0;

            }else{

                return 1;
            }

        }else{

            $tblCategorias = $this->tblCategoriasRepository->find($id);
            $tblCategorias = $this->tblCategoriasRepository->update($request->all(), $id);

            return 0;

        }

    }

    /**
     * Remove the specified tbl_categorias from storage.
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
        DB::table('tbl_categorias')->delete($id);

    }

    public function actualiza_categorias(Request $request)
    {



        $tblCategorias = tbl_categorias::all();
         return view('tbl_categorias.table',compact('tblCategorias'));


    }
}
