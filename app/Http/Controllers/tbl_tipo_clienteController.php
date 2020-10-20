<?php

namespace App\Http\Controllers;
use App\Models\tbl_tipo_cliente;
use App\Models\tbl_vendedores;
use App\Models\tbl_unidades;
use App\Models\tbl_monedas;
use App\Models\tbl_tipo_vendedor;
use App\Models\tbl_categorias;
use App\Models\tbl_subcategorias;
use App\Models\tbl_fabricantes;
use App\Models\tbl_color;


use App\Http\Requests\Createtbl_tipo_clienteRequest;
use App\Http\Requests\Updatetbl_tipo_clienteRequest;
use App\Repositories\tbl_tipo_clienteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;


class tbl_tipo_clienteController extends AppBaseController
{
    /** @var  tbl_tipo_clienteRepository */
    private $tblTipoClienteRepository;

    public function __construct(tbl_tipo_clienteRepository $tblTipoClienteRepo)
    {
        $this->tblTipoClienteRepository = $tblTipoClienteRepo;
    }

    /**
     * Display a listing of the tbl_tipo_cliente.
     *
     * @param Request $request 
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tblTipoCliente = $this->tblTipoClienteRepository->all();

        $estados = new tbl_vendedores();
        $sql_estados = $estados->estados();
        $sql_municipios = $estados->municipios_sql();
        $sql_pais=$estados->pais_sql();
        $tblUnidades=tbl_unidades::all();
        $tblMonedas=tbl_monedas::all();
        $tblTipoVendedors=tbl_tipo_vendedor::all();
        $tblCategorias=tbl_categorias::all();
        $tblFabricantes=tbl_fabricantes::all();
        $tblColors=tbl_color::all();

        $tallas = db::table('tallas')->get();

        $sub_categoria = new tbl_subcategorias();
        $tblSubcategorias = $sub_categoria->sub_categoria();


        return view('tbl_tipo_clientes.index',compact('tblColors','tblFabricantes','tblSubcategorias','tblCategorias','tblTipoVendedors','tblMonedas','tblUnidades','tblTipoCliente','sql_estados','sql_municipios','sql_pais','tallas'));
    }

    /**
     * Show the form for creating a new tbl_tipo_cliente.
     *
     * @return Response
     */
    public function create(Request $request)
    {   

        $tipo=$request['tipo'];
        return view('tbl_tipo_clientes.fields',compact('tipo'));
      }

    /**
     * Store a newly created tbl_tipo_cliente in storage.
     *
     * @param Createtbl_tipo_clienteRequest $request
     *
     * @return Response
     */
    public function store(Createtbl_tipo_clienteRequest $request)
    {
        $input = $request->all();

        $valida=tbl_tipo_cliente::where('tipo',$input['tipo'])->count();


        if($valida>=1){
            return 1;
        }else{
            $tblTipoCliente = $this->tblTipoClienteRepository->create($input);
            return 0;   
        }
    }

    /**
     * Display the specified tbl_tipo_cliente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tblTipoCliente = $this->tblTipoClienteRepository->find($id);

        if (empty($tblTipoCliente)) {
            Flash::error('Tbl Tipo Cliente not found');

            return redirect(route('tblTipoClientes.index'));
        }

        return view('tbl_tipo_clientes.show')->with('tblTipoCliente', $tblTipoCliente);
    }

    /**
     * Show the form for editing the specified tbl_tipo_cliente.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit(Request $request)
    {   


        $id=$request['id'];
        $tipo=$request['tipo'];

        $tblTipoCliente = $this->tblTipoClienteRepository->find($id);
        return view('tbl_tipo_clientes.fields',compact('tblTipoCliente','tipo'));

    }

    /**
     * Update the specified tbl_tipo_cliente in storage.
     *
     * @param int $id
     * @param Updatetbl_tipo_clienteRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
        
        $id=$request['idtc'];
        $valida_correo=tbl_tipo_cliente::where('tipo',$request['tipo'])->count();

        if($valida_correo>=1){

            $valida=tbl_tipo_cliente::where('tipo',$request['tipo'])->get();
            $valida=$valida[0];
            $id_valida=$valida['id'];

            if($id_valida==$id){

                $tblTipoCliente = $this->tblTipoClienteRepository->find($id);
                $tblTipoCliente = $this->tblTipoClienteRepository->update($request->all(), $id);

                return 0;

            }else{

                return 1;
            }

        }else{

            $tblTipoCliente = $this->tblTipoClienteRepository->find($id);
            $tblTipoCliente = $this->tblTipoClienteRepository->update($request->all(), $id);

            return 0;

        }

    }

    /**
     * Remove the specified tbl_tipo_cliente from storage.
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
        DB::table('tbl_tipo_cliente')->delete($id);

    }

    public function actualiza_tipo_cliente(Request $request)
    {

        $tblTipoCliente = $this->tblTipoClienteRepository->all();
         return view('tbl_tipo_clientes.table',compact('tblTipoCliente'));


    }
}
