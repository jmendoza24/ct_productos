<?php

namespace App\Models;
use DB;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_inventario
 * @package App\Models
 * @version June 20, 2020, 6:48 am UTC
 *
 * @property integer $id_producto
 * @property string $cantidad
 * @property string $costo
 * @property string $fecha_ingreso
 * @property string $comentarios
 * @property integer $id_usuario
 */
class tbl_inventario extends Model
{
    use SoftDeletes;

    public $table = 'tbl_inventarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_producto',
        'cantidad',
        'costo',
        'fecha_ingreso',
        'comentarios',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_producto' => 'integer',
        'cantidad' => 'string',
        'costo' => 'string',
        'fecha_ingreso' => 'date',
        'comentarios' => 'string',
        'id_usuario' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function sql_inventario()
    {

        return  DB::table('tbl_productos as p')
                   ->leftjoin('tbl_inventarios  as i','i.id_producto','=','p.id')
                   ->selectraw('*')
                   ->get(); 

    }

    
}
