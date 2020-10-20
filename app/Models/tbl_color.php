<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_color
 * @package App\Models
 * @version June 22, 2020, 1:48 am UTC
 *
 * @property string $color
 */
class tbl_color extends Model
{
    use SoftDeletes;

    public $table = 'tbl_colors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'color'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'color' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
