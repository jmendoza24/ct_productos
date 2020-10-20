<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_tipo_vendedor
 * @package App\Models
 * @version June 17, 2020, 5:02 am UTC
 *
 * @property string $tipo_vendedor
 */
class tbl_tipo_vendedor extends Model
{
    use SoftDeletes;

    public $table = 'tbl_tipo_vendedors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipo_vendedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_vendedor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
