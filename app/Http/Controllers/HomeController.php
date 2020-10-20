<?php

namespace App\Http\Controllers;
use App\Models\tbl_empresa;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                



       $tblEntidads=DB::table('tbl_empresas as em')
                   ->selectraw('nombre,direccion,telefono,nombre_contacto,correo,celular,face,insta,web,condiciones,tipo_cambio,rfc')
                   ->get();


                $tblEmpresas=$tblEntidads[0];
                return view('home',compact('tblEmpresas'));


    }
}
