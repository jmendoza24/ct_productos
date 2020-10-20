<?php

namespace App\Models;
use DB;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_formatos
 * @package App\Models
 * @version June 27, 2020, 11:14 pm UTC
 *
 * @property integer $id_modulo
 */
class tbl_formatos extends Model
{
    use SoftDeletes;

    public $table = 'tbl_formatos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_direccion',
        'id_ubicacion',
        'servicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_direccion' => 'integer',
        'id_ubicacion' => 'integer',
        'servicio' => 'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    public function sql_formatos(){


          return  DB::table('tbl_formatos as f')
                   ->join('tbl_modulos  as m','m.id','=','f.id_direccion')
                   ->leftjoin('tbl_ubicaciones  as u','u.id','=','f.id_ubicacion')
                   ->selectraw('f.*,u.ubicacion,m.modulo')
                   ->orderby('u.id')
                   ->get();
    }


    public function sql_formatos_registro_civil(){


          return  DB::table('tbl_formatos as f')
                   ->join('tbl_modulos  as m','m.id','=','f.id_direccion')
                   ->leftjoin('tbl_ubicaciones  as u','u.id','=','f.id_ubicacion')
                   ->where('f.id_direccion',1)
                   ->selectraw('f.*,u.ubicacion,m.modulo')
                   ->orderby('u.id')
                   ->get();
    }
    
}
