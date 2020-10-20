<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_cotizacion
 * @package App\Models
 * @version June 30, 2020, 5:11 am UTC
 *
 * @property string $interesado
 * @property string $direccion
 * @property string $colonia
 * @property string $cp
 * @property string $num_ext
 * @property string $num_int
 * @property string $local
 * @property string $comentarios
 * @property integer $estatus
 * @property string $telefono
 * @property string $correo
 */
class tbl_cotizacion extends Model
{
    use SoftDeletes;

    public $table = 'tbl_cotizacions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [ 
        'interesado',
        'direccion',
        'colonia',
        'cp',
        'num_ext',
        'num_int',
        'local',
        'comentarios',
        'estatus',
        'telefono',
        'correo',
        'id_usuario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'interesado' => 'string',
        'direccion' => 'string',
        'colonia' => 'string',
        'cp' => 'string',
        'num_ext' => 'string',
        'num_int' => 'string',
        'local' => 'string',
        'comentarios' => 'string',
        'estatus' => 'integer',
        'telefono' => 'string',
        'correo' => 'string',
        'id_usuario' => 'integer',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
