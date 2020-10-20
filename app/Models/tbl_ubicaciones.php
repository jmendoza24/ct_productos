<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_ubicaciones
 * @package App\Models
 * @version June 29, 2020, 3:04 pm UTC
 *
 * @property integer $id_direccion
 * @property string $ubicacion
 * @property integer $id_estado
 * @property integer $id_municipio
 * @property string $comentarios
 */
class tbl_ubicaciones extends Model
{
    use SoftDeletes;

    public $table = 'tbl_ubicaciones';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_direccion',
        'ubicacion',
        'id_estado',
        'id_municipio',
        'comentarios'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_direccion' => 'integer',
        'ubicacion' => 'string',
        'id_estado' => 'integer',
        'id_municipio' => 'integer',
        'comentarios' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
