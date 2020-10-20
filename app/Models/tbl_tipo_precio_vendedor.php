<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_tipo_precio_vendedor
 * @package App\Models
 * @version May 29, 2020, 11:21 pm UTC
 *
 * @property integer $id_producto
 * @property integer $id_vendedor
 * @property string $costo
 */
class tbl_tipo_precio_vendedor extends Model
{
    use SoftDeletes;

    public $table = 'tbl_tipo_precio_vendedors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_producto',
        'id_vendedor',
        'costo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_producto' => 'integer',
        'id_vendedor' => 'integer',
        'costo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
