<?php

namespace App\Models;
use DB;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tbl_vendedores
 * @package App\Models
 * @version May 29, 2020, 7:19 pm UTC
 *
 * @property string $nombre
 * @property string $correo
 * @property string $telefono
 * @property integer $id_tipo_precio
 * @property string $descuentos
 */
class tbl_vendedores extends Model
{
    use SoftDeletes;

    public $table = 'tbl_vendedores';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'correo',
        'telefono',
        'id_tipo_vendedor',
        'descuentos',
        'comentarios',
        'calle',
        'colonia',
        'id_municipio',
        'id_estado',
        'id_pais',
        'cp',
        'puesto',
        'rfc',
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
        'correo' => 'string',
        'telefono' => 'string',
        'id_tipo_vendedor' => 'integer',
        'descuentos' => 'string',
        'comentarios' => 'text',
        'calle' => 'string',
        'colonia' => 'string',
        'id_municipio' => 'integer',
        'id_estado' => 'integer',
        'id_pais' => 'integer',
        'cp' => 'string',
        'puesto' => 'string',
        'rfc' => 'string',
        'activo' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    public function estados(){

          return  DB::table('tbl_estados as e')
                  ->get();
    }

    public function municipios($request){

        return  DB::table('tbl_estados as e')
                   ->join('tbl_estadosmun  as em','em.estados_id','=','e.id')
                   ->join('tbl_municipios  as m','m.id','=','em.municipios_id')
                   ->where('e.id',$request['id_estado'])
                   ->get();
    }

    public function municipios_editados($id_edo){

     
        return  DB::table('tbl_estados as e')
                   ->join('tbl_estadosmun  as em','em.estados_id','=','e.id')
                   ->join('tbl_municipios  as m','m.id','=','em.municipios_id')
                   ->where('e.id',$id_edo)
                   ->get(); 
    }


    public function municipios_sql(){


          return  DB::table('tbl_estados as e')
                   ->join('tbl_estadosmun  as em','em.estados_id','=','e.id')
                   ->join('tbl_municipios  as m','m.id','=','em.municipios_id')
                   ->get();

    }

    public function pais_sql(){


          return  DB::table('tbl_paises as p')
                   ->get();

    }

    
    
}
