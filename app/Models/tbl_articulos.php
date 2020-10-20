<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_articulos
 * @package App\Models
 * @version June 27, 2020, 11:13 pm UTC
 *
 * @property integer $id_modulo
 * @property string $articulo
 * @property string $contenido
 * @property string $fragmento
 * @property string $monto
 * @property integer $id_moneda
 * @property integer $activo
 */
class tbl_articulos extends Model
{
    use SoftDeletes;

    public $table = 'tbl_articulos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_modulo',
        'articulo',
        'contenido',
        'fragmento',
        'monto',
        'id_moneda',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_modulo' => 'integer',
        'articulo' => 'string',
        'contenido' => 'string',
        'fragmento' => 'string',
        'monto' => 'string',
        'id_moneda' => 'integer',
        'activo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
