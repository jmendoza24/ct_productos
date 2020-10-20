<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_unidades
 * @package App\Models
 * @version May 29, 2020, 9:33 pm UTC
 *
 * @property string $unidad
 */
class tbl_unidades extends Model
{
    use SoftDeletes;

    public $table = 'tbl_unidades';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'unidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'unidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
