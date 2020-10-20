<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_contactos_clientes
 * @package App\Models
 * @version May 29, 2020, 8:39 pm UTC
 *
 * @property integer $id_cliente
 * @property string $nombre
 * @property string $puesto
 * @property string $telefono
 * @property string $correo
 * @property string $comentarios
 */
class tbl_contactos_clientes extends Model
{
    use SoftDeletes;

    public $table = 'tbl_contactos_clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_cliente',
        'nombre',
        'puesto',
        'telefono',
        'correo',
        'comentarios'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'integer',
        'nombre' => 'string',
        'puesto' => 'string',
        'telefono' => 'string',
        'correo' => 'string',
        'comentarios' => 'text'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
