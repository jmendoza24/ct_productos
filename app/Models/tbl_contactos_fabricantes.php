<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_contactos_fabricantes
 * @package App\Models
 * @version June 18, 2020, 11:22 pm UTC
 *
 * @property string $nombre
 * @property string $correo
 * @property string $puesto
 * @property string $telefono
 * @property string $comentarios
 */
class tbl_contactos_fabricantes extends Model
{
    use SoftDeletes;

    public $table = 'tbl_contactos_fabricantes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'correo',
        'puesto',
        'telefono',
        'comentarios',
        'id_fabricante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'correo' => 'string',
        'puesto' => 'string',
        'telefono' => 'string',
        'comentarios' => 'string',
        'id_fabricante' => 'integer',

        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
