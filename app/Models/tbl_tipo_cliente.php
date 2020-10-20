<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_tipo_cliente
 * @package App\Models
 * @version June 9, 2020, 7:33 pm UTC
 *
 * @property string $tipo
 */
class tbl_tipo_cliente extends Model
{
    use SoftDeletes;

    public $table = 'tbl_tipo_clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
