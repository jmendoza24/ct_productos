<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_categorias
 * @package App\Models
 * @version June 17, 2020, 6:50 am UTC
 *
 * @property string $categoria
 */
class tbl_categorias extends Model
{
    use SoftDeletes;

    public $table = 'tbl_categorias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'categoria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'categoria' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
