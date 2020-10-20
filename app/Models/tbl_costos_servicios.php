<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

/**
 * Class tbl_costos_servicios
 * @package App\Models
 * @version June 29, 2020, 6:01 pm UTC
 *
 * @property integer $id_direccion
 * @property integer $id_servicio
 * @property string $articulo
 * @property string $fraccion
 * @property string $monto
 * @property string $moneda
 * @property string $comentarios
 * @property string $periodicidad
 */
class tbl_costos_servicios extends Model
{
    use SoftDeletes;

    public $table = 'tbl_costos_servicios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_direccion',
        'id_servicio',
        'articulo',
        'fraccion',
        'monto',
        'moneda',
        'comentarios',
        'periodicidad',
        'id_subservicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_direccion' => 'integer',
        'id_servicio' => 'integer',
        'articulo' => 'string',
        'fraccion' => 'string',
        'monto' => 'string',
        'moneda' => 'string',
        'comentarios' => 'string',
        'periodicidad' => 'string',
        'id_subservicio' => 'integer',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function sql_costos_servicios(){

          return  DB::table('tbl_costos_servicios as cs')
                   ->leftjoin('tbl_subservicios  as sb','sb.id','=','cs.id_subservicio')
                   ->join('tbl_formatos  as f','f.id','=','cs.id_servicio')
                   ->join('tbl_ubicaciones  as u','u.id','=','f.id_ubicacion')
                   ->selectraw('cs.*,f.servicio,u.ubicacion,sb.subservicio,f.id as id_servicio')
                   ->get();
    }

    
}
