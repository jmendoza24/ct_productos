<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_monedas
 * @package App\Models
 * @version June 15, 2020, 8:58 pm UTC
 *
 * @property string $moneda
 */
class tbl_monedas extends Model
{
    use SoftDeletes;

    public $table = 'tbl_monedas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'moneda'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'moneda' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
