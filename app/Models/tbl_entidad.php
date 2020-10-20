<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_entidad
 * @package App\Models
 * @version June 27, 2020, 11:27 pm UTC
 *
 * @property string $nombre
 * @property string $rfc
 * @property string $telefono
 * @property string $director
 * @property string $correo
 * @property string $telefono2
 * @property string $direccion
 * @property string $logo
 */
class tbl_entidad extends Model
{
    use SoftDeletes;

    public $table = 'tbl_entidads';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'rfc',
        'telefono',
        'director',
        'correo',
        'telefono2',
        'direccion',
        'logo',
        'id_estado',
        'id_municipio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'rfc' => 'string',
        'telefono' => 'string',
        'director' => 'string',
        'correo' => 'string',
        'telefono2' => 'string',
        'direccion' => 'string',
        'logo' => 'string',
        'id_estado' => 'integer',
        'id_municipio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
