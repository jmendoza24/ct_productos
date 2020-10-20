<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

/**
 * Class tbl_lista_precios
 * @package App\Models
 * @version June 20, 2020, 2:57 am UTC
 *
 * @property integer $id_producto
 * @property string $lista1
 * @property string $lista2
 * @property string $lista3
 * @property string $lista5
 */ 
class tbl_lista_precios extends Model
{
    use SoftDeletes;

    public $table = 'tbl_lista_precios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_producto',
        'lista1',
        'lista2',
        'lista3',
        'lista4',
        'lista5'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_producto' => 'integer',
        'lista1' => 'string',
        'lista2' => 'string',
        'lista3' => 'string',
        'lista4' => 'string',
        'lista5' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    


    public function sql_tbl_lista_precios(){

        

        return DB::table('tbl_productos  as p')
                          ->leftjoin('tbl_categorias as c','c.id','=','p.id_categoria')
                          ->leftjoin('tbl_subcategorias as sc','sc.id','=','p.id_subcategoria')
                          ->leftjoin('tbl_lista_precios as lp','lp.id_producto','=','p.id')
                          ->selectraw('*,p.id_producto as idp,p.id as pid,lp.id as lpid')
                          ->get();   
    }
    
}
