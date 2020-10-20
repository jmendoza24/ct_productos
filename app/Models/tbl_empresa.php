<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_empresa
 * @package App\Models
 * @version June 17, 2020, 5:56 pm UTC
 *
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $nombre_contacto
 * @property string $correo
 * @property string $celular
 * @property string $face
 * @property string $insta
 * @property string $web
 * @property string $logo
 * @property string $condiciones
 * @property string $tipo_cambio
 * @property string $rfc
 */
class tbl_empresa extends Model
{
    use SoftDeletes;

    public $table = 'tbl_empresas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'nombre_contacto',
        'correo',
        'celular',
        'face',
        'insta',
        'web',
        'logo',
        'condiciones',
        'tipo_cambio',
        'rfc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'nombre_contacto' => 'string',
        'correo' => 'string',
        'celular' => 'string',
        'face' => 'string',
        'insta' => 'string',
        'web' => 'string',
        'logo' => 'string',
        'condiciones' => 'string',
        'tipo_cambio' => 'string',
        'rfc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
