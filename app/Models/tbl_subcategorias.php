<?php

namespace App\Models;
use DB;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_subcategorias
 * @package App\Models
 * @version June 17, 2020, 7:52 am UTC
 *
 * @property integer $id_categoria
 * @property string $sub_categoria
 */
class tbl_subcategorias extends Model
{
    use SoftDeletes;

    public $table = 'tbl_subcategorias';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_categoria',
        'sub_categoria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_categoria' => 'integer',
        'sub_categoria' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function sub_categoria(){


        return  DB::table('tbl_subcategorias as sc')
                   ->leftjoin('tbl_categorias  as c','c.id','=','sc.id_categoria')
                   ->selectraw('*,sc.id as idsc')
                   ->orderby('c.categoria')
                   ->get();
    }

    public function sub_categoria_unicas($id){

        return  DB::table('tbl_subcategorias as sc')
                   ->leftjoin('tbl_categorias  as c','c.id','=','sc.id_categoria')
                   ->selectraw('*,sc.id as idsc')
                   ->where('sc.id',$id)
                   ->get();
    }

    

    
}
