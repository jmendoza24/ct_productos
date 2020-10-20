<?php

namespace App\Models;
use DB;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_entregas
 * @package App\Models
 * @version May 29, 2020, 11:07 pm UTC
 *
 * @property integer $id_cliente
 * @property string $direccion
 * @property string $colonia
 * @property string $cp
 * @property integer $id_estado
 * @property integer $id_municipio
 * @property integer $id_pais
 * @property string $comentarios
 */
class tbl_entregas extends Model
{
    use SoftDeletes;

    public $table = 'tbl_entregas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_cliente',
        'direccion',
        'colonia',
        'cp',
        'id_estado',
        'id_municipio',
        'id_pais',
        'comentarios'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'integer',
        'direccion' => 'string',
        'colonia' => 'string',
        'cp' => 'string',
        'id_estado' => 'integer',
        'id_municipio' => 'integer',
        'id_pais' => 'integer',
        'comentarios' => 'text'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    public function entregas($id_cliente)
    {

   
        return  DB::table('tbl_entregas as en')
                   ->join('tbl_estados  as e','e.id','=','en.id_estado')
                   ->join('tbl_municipios  as m','m.id','=','en.id_municipio')
                   ->where('en.id_cliente',$id_cliente)
                   ->selectraw('*,en.id as ide')
                   ->get(); 

    }

    
}
