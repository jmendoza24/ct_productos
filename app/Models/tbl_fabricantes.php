<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_fabricantes
 * @package App\Models
 * @version June 18, 2020, 11:20 pm UTC
 *
 * @property string $nombre
 * @property string $razon
 * @property string $rfc
 * @property string $web
 * @property string $tel1
 * @property string $tel2
 * @property string $direccion
 * @property string $colonia
 * @property string $cp
 * @property string $estado
 * @property string $municipio
 * @property integer $pais
 * @property string $condiciones
 * @property string $comentarios
 */
class tbl_fabricantes extends Model
{
    use SoftDeletes;

    public $table = 'tbl_fabricantes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'razon',
        'rfc',
        'web',
        'tel1',
        'tel2',
        'direccion',
        'colonia',
        'cp',
        'estado',
        'municipio',
        'pais',
        'condiciones',
        'comentarios',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'razon' => 'string',
        'rfc' => 'string',
        'web' => 'string',
        'tel1' => 'string',
        'tel2' => 'string',
        'direccion' => 'string',
        'colonia' => 'string',
        'cp' => 'string',
        'estado' => 'string',
        'municipio' => 'string',
        'pais' => 'integer',
        'condiciones' => 'string',
        'comentarios' => 'string',
        'activo' => 'integer',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
