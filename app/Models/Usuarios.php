<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

/**
 * Class Usuarios
 * @package App\Models
 * @version September 5, 2019, 12:30 am UTC
 *
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 */
class Usuarios extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password',
        'id_tipo_usuario',
        'remember_token',
        'id_proveedor',
        'firma',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'id_tipo_usuario' => 'integer',
        'id_proveedor' => 'integer',
        'firma' => 'string',
        'remember_token' => 'string',
        'deleted_at' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    public function usuario_contratista($id_usuario)
    {

    
    $claves_conceptos=  DB::table('users as u')
                     ->leftjoin('cat_asig_contratistas as cac','cac.nombre','=','u.id_proveedor')
                     ->leftjoin('proveedores as p','p.id','=','cac.nombre')
                     ->leftjoin('tipo_proveedors as tp','tp.id','=','p.id_tipo_proveedor')
                     ->selectraw('*,p.id as id_p')
                     ->where('u.id',$id_usuario)
                     ->get();

        return     $claves_conceptos=$claves_conceptos[0];


    }

    

    public function usuario_contratista_numrow($id_usuario)
    {

    
    $claves_conceptos=  DB::table('users as u')
                     ->leftjoin('cat_asig_contratistas as cac','cac.nombre','=','u.id_proveedor')
                     ->leftjoin('proveedores as p','p.id','=','cac.nombre')
                     ->leftjoin('tipo_proveedors as tp','tp.id','=','p.id_tipo_proveedor')
                     ->selectraw('*,p.id as id_p')
                     ->where('u.id',$id_usuario)
                     ->get();

        return     $claves_conceptos;


    }

    public function contratos($id_proveedor)
    {


        return  DB::table('cat_asig_contratistas as cac')
                  ->join('cotizacions as c','c.id','=','cac.id_cot')
                  ->join('proyectos as p','p.id_cotiza','=','c.id')
                  ->selectraw('c.id,c.nombre_cotizacion,c.proyecto,p.nombre_proyecto')
                  ->where('cac.nombre',$id_proveedor)
                  ->get();
                
    }


    public function todos_contratos()
    {
 

        // return DB::table('cotizacions as c')
        //                   ->join('detalle_cotizacions as dt','dt.id_cotizacion','=','c.id')
        //                    ->leftjoin('clientes as cl','cl.id','=','c.id_cliente')
        //                    ->leftjoin('contactos_clientes as cc','cc.id','=','c.id_contacto')
        //                    ->selectraw('sum(dt.importe) as total,c.correo as correo,cl.razon_social as rz,c.nombre_cotizacion as nom_cot,cc.nombre as contacto,c.id as id,c.estatus_list,c.proyecto')
        //                    ->groupby('dt.id_cotizacion','c.correo','cl.razon_social','c.nombre_cotizacion','cc.nombre','c.id','c.estatus_list','c.proyecto')
        //                    ->where('c.estatus',1)
        //                   ->get();



        return DB::table('proyectos as p')
                          ->join('cotizacions as c','c.id','=','p.id_cotiza')
                          ->leftjoin('clientes as cl','cl.id','=','c.id_cliente')
                          ->selectraw('c.id,c.nombre_cotizacion,c.proyecto,p.nombre_proyecto')
                          ->get();



    }
}
