<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

/**
 * Class tbl_modulos
 * @package App\Models
 * @version June 27, 2020, 11:06 pm UTC
 *
 * @property string $modulo
 * @property integer $activo
 */
class tbl_modulos extends Model
{
    use SoftDeletes;

    public $table = 'tbl_modulos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'modulo',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'modulo' => 'string',
        'activo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

     public function estados(){

          return  DB::table('tbl_estados as e')
                  ->get();
    }

    public function municipios($id_estado){

        return  DB::table('tbl_estados as e')
                   ->join('tbl_estadosmun  as em','em.estados_id','=','e.id')
                   ->join('tbl_municipios  as m','m.id','=','em.municipios_id')
                   ->where('e.id',$id_estado)
                   ->get();
    }

    
    public function municipios_sql(){


          return  DB::table('tbl_estados as e')
                   ->join('tbl_estadosmun  as em','em.estados_id','=','e.id')
                   ->join('tbl_municipios  as m','m.id','=','em.municipios_id')
                   ->get();

    }


    public function ubicaciones()
    {

        return  DB::table('tbl_modulos as mo')
                   ->join('tbl_ubicaciones  as u','u.id_direccion','=','mo.id')
                   ->join('tbl_estados  as e','u.id_estado','=','e.id')
                   ->join('tbl_estadosmun  as em','em.estados_id','=','e.id')
                   ->join('tbl_municipios  as m','m.id','=','em.municipios_id')
                   ->where('m.id',1866)
                   ->get();
    }
}
