<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_subservicios
 * @package App\Models
 * @version July 1, 2020, 4:16 am UTC
 *
 * @property integer $id_servicio
 * @property string $subservicio
 */
class tbl_subservicios extends Model
{
    use SoftDeletes;

    public $table = 'tbl_subservicios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_servicio',
        'subservicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_servicio' => 'integer',
        'subservicio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
