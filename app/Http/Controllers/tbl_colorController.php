<?php

namespace App\Http\Controllers;
use App\Models\tbl_color;
use DB;
use App\Http\Requests\Createtbl_colorRequest;
use App\Http\Requests\Updatetbl_colorRequest;
use App\Repositories\tbl_colorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tbl_colorController extends AppBaseController
{
    /** @var  tbl_colorRepository */
    private $tblColorRepository;

    public function __construct(tbl_colorRepository $tblColorRepo)
    {
        $this->tblColorRepository = $tblColorRepo;
    }

    /**
     * Display a listing of the tbl_color.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblColors = $this->tblColorRepository->all();

        return view('tbl_colors.index')
            ->with('tblColors', $tblColors);
    }

    /**
     * Show the form for creating a new tbl_color.
     *
     * @return Response
     */
    public function create(Request $request)
    {

        $tipo=$request['tipo'];
        return view('tbl_colors.fields',compact('tipo'));
    }

    /**
     * Store a newly created tbl_color in storage.
     *
     * @param Createtbl_colorRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        $valida=tbl_color::where('color',$request['color'])->count();

        if($valida>=1){
            return 1;
        }else{
            $tblColor = $this->tblColorRepository->create($input);
            return 0;   
        }
    }

    /**
     * Display the specified tbl_color.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblColor = $this->tblColorRepository->find($id);

        if (empty($tblColor)) {
            Flash::error('Tbl Color not found');

            return redirect(route('tblColors.index'));
        }

        return view('tbl_colors.show')->with('tblColor', $tblColor);
    }

    /**
     * Show the form for editing the specified tbl_color.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {
        
        $id=$request['id'];
        $tipo=$request['tipo'];

        $tblColor = $this->tblColorRepository->find($id);
        return view('tbl_colors.fields',compact('tblColor','tipo'));
    }

    /**
     * Update the specified tbl_color in storage.
     *
     * @param int $id
     * @param Updatetbl_colorRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {

        $id=$request['idcol'];

       
        $valida_correo=tbl_color::where('color',$request['color'])->count();
 
        if($valida_correo>=1){

            $valida=tbl_color::where('color',$request['color'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

                $tblColor = $this->tblColorRepository->find($id);
                $tblColor = $this->tblColorRepository->update($request->all(), $id);

                return 0;

            }else{

                return 1;
            }

        }else{

                $tblColor = $this->tblColorRepository->find($id);
                $tblColor = $this->tblColorRepository->update($request->all(), $id);

            return 0;

        }
    }

    /**
     * Remove the specified tbl_color from storage.
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
        DB::table('tbl_colors')->delete($id);

    }

    public function actualiza_colores(Request $request)
    {

        $tblColors = $this->tblColorRepository->all();
         return view('tbl_colors.table',compact('tblColors'));


    }
}
