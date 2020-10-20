<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_titulos_lista
 * @package App\Models
 * @version June 20, 2020, 4:10 am UTC
 *
 * @property string $titulo1
 * @property string $titulo2
 * @property string $titulo3
 * @property string $titulo4
 * @property string $titulo5
 */
class tbl_titulos_lista extends Model
{
    use SoftDeletes;

    public $table = 'tbl_titulos_listas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'titulo1',
        'titulo2',
        'titulo3',
        'titulo4',
        'titulo5'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo1' => 'string',
        'titulo2' => 'string',
        'titulo3' => 'string',
        'titulo4' => 'string',
        'titulo5' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
