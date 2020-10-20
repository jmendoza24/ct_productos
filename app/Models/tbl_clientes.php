<?php

namespace App\Models;
use DB;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_clientes
 * @package App\Models
 * @version May 29, 2020, 8:36 pm UTC
 *
 * @property string $nombre
 * @property string $nombre_corto
 * @property string $direccion
 * @property string $colonia
 * @property integer $id_municipio
 * @property integer $id_estado
 * @property integer $id_pais
 * @property string $rfc
 * @property integer $estatus
 * @property integer $activo
 * @property string $comentarios
 */
class tbl_clientes extends Model
{
    use SoftDeletes;

    public $table = 'tbl_clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'puesto',
        'telefono',
        'telefono2',
        'correo',
        'calle',
        'colonia',
        'id_municipio',
        'id_estado',
        'id_pais',
        'rfc',
        'estatus',
        'activo',
        'comentarios',
        'id_tipo_cliente',
        'id_tipo_precio',
        'descuento',
        'id_vendedor',
        'datos_fac',
        'datos_ent',
        'cp',
        'tipo_persona',
        'razon',
        'web',
    ];

            
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'puesto' => 'string',
        'telefono' => 'string',
        'telefono2' => 'string',
        'correo' => 'string',
        'calle' => 'string',
        'colonia' => 'string',
        'id_municipio' => 'integer',
        'id_estado' => 'integer',
        'id_pais' => 'integer',
        'rfc' => 'string',
        'estatus' => 'integer',
        'activo' => 'integer',
        'comentarios' => 'text',
        'id_tipo_cliente' => 'integer',
        'id_tipo_precio' => 'integer',
        'descuento' => 'string',
        'id_vendedor' => 'integer',
        'datos_fac' => 'text',
        'datos_ent' => 'text',
        'cp' => 'string',
        'tipo_persona' => 'integer',
        'razon' => 'string',
        'web' => 'string',


    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function clientes()
    {


        return  DB::table('tbl_clientes as c')
                   ->leftjoin('tbl_tipo_clientes  as tc','tc.id','=','c.id_tipo_cliente')
                   ->selectraw('c.*,tc.tipo')
                   ->get();


    }

    
}
