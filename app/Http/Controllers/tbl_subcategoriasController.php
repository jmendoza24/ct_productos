<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtbl_subcategoriasRequest;
use App\Http\Requests\Updatetbl_subcategoriasRequest;
use App\Repositories\tbl_subcategoriasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\tbl_subcategorias;
use App\Models\tbl_categorias;

use DB;

class tbl_subcategoriasController extends AppBaseController
{
    /** @var  tbl_subcategoriasRepository */
    private $tblSubcategoriasRepository;

    public function __construct(tbl_subcategoriasRepository $tblSubcategoriasRepo)
    {
        $this->tblSubcategoriasRepository = $tblSubcategoriasRepo;
    }

    /**
     * Display a listing of the tbl_subcategorias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblSubcategorias = $this->tblSubcategoriasRepository->all();

        return view('tbl_subcategorias.index')
            ->with('tblSubcategorias', $tblSubcategorias);
    }

    /**
     * Show the form for creating a new tbl_subcategorias.
     *
     * @return Response
     */
    public function create(Request $request)
    {

        $tipo=$request['tipo'];
        $tblSubcategorias_sql=tbl_categorias::all();

        return view('tbl_subcategorias.fields',compact('tipo','tblSubcategorias_sql'));
    }

    /**
     * Store a newly created tbl_subcategorias in storage.
     *
     * @param Createtbl_subcategoriasRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
       
        $input = $request->all();

        $valida=tbl_subcategorias::where([['id_categoria',$input['id_categoria']],['sub_categoria',$input['sub_categoria']] ])->count();

        if($valida>=1){
            return 1;
        }else{
                $tblSubcategorias = $this->tblSubcategoriasRepository->create($input);
                return 0;   
        }
    }

    /**
     * Display the specified tbl_subcategorias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblSubcategorias = $this->tblSubcategoriasRepository->find($id);

        if (empty($tblSubcategorias)) {
            Flash::error('Tbl Subcategorias not found');

            return redirect(route('tblSubcategorias.index'));
        }

        return view('tbl_subcategorias.show')->with('tblSubcategorias', $tblSubcategorias);
    }

    /**
     * Show the form for editing the specified tbl_subcategorias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {

        $id=$request['id'];
        $tipo=$request['tipo'];

        $sub_categoria = new tbl_subcategorias();
        $tblSubcategorias_sql = $sub_categoria->sub_categoria_unicas($id);

        $tblSubcategorias = $this->tblSubcategoriasRepository->find($id);

        return view('tbl_subcategorias.fields',compact('tblTipoCliente','tipo','tblSubcategorias','tblSubcategorias_sql'));
    }

    /**
     * Update the specified tbl_subcategorias in storage.
     *
     * @param int $id
     * @param Updatetbl_subcategoriasRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        

        $id=$request['idsc'];
        $valida_correo=tbl_subcategorias::where([['id_categoria',$request['id_categoria']],['sub_categoria',$request['sub_categoria']] ])->count();

        if($valida_correo>=1){

            $valida=tbl_subcategorias::where([['id_categoria',$request['id_categoria']],['sub_categoria',$request['sub_categoria']] ])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

                $tblSubcategorias = $this->tblSubcategoriasRepository->find($id);
                $tblSubcategorias = $this->tblSubcategoriasRepository->update($request->all(), $id);


                return 0;

            }else{

                return 1;
            }

        }else{

                $tblSubcategorias = $this->tblSubcategoriasRepository->find($id);
                $tblSubcategorias = $this->tblSubcategoriasRepository->update($request->all(), $id);

            return 0;

        }
    }

    /**
     * Remove the specified tbl_subcategorias from storage.
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
        DB::table('tbl_subcategorias')->delete($id);
    }

    public function actualiza_subcategorias(Request $request)
    {


        $sub_categoria = new tbl_subcategorias();
        $tblSubcategorias = $sub_categoria->sub_categoria();
         return view('tbl_subcategorias.table',compact('tblSubcategorias'));


    }
}
