<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
/**
 * Class tbl_productos
 * @package App\Models
 * @version May 29, 2020, 9:31 pm UTC
 *
 * @property string $nombre
 * @property string $id_producto
 * @property string $marca
 * @property string $modelo
 * @property string $sku
 * @property string $codigo_producto
 * @property string $descripcion
 * @property string $descripcion2
 * @property string $unidades_paquete
 * @property string $volumen
 * @property integer $id_unidad
 * @property integer $id_origen
 * @property integer $id_moneda
 * @property string $precio
 * @property integer $id_tipo_precio
 * @property string $tiempo_entrega
 * @property integer $estatus
 * @property integer $activo
 * @property string $foto1
 * @property string $foto2
 * @property string $foto3
 * @property string $foto4
 * @property string $foto5
 * @property integer $id_clasificador
 */
class tbl_productos extends Model
{
    use SoftDeletes;

    public $table = 'tbl_productos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'id_producto',
        'marca',
        'modelo',
        'sku',
        'codigo_producto',
        'descripcion',
        'descripcion2',
        'unidades_paquete',
        'volumen',
        'id_unidad',
        'id_origen',
        'id_moneda',
        'precio',
        'id_tipo_precio',
        'tiempo_entrega',
        'estatus',
        'activo',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5',
        'id_clasificador',
        'id_subcategoria',
        'id_categoria',
        'id_fabricante',
        'codigo_barras',
        'presentacion',
        'id_color',
        'pedido_minimo',
        'id_vende',

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'id_producto' => 'string',
        'marca' => 'string',
        'modelo' => 'string',
        'sku' => 'string',
        'codigo_producto' => 'string',
        'descripcion' => 'string',
        'descripcion2' => 'string',
        'unidades_paquete' => 'string',
        'volumen' => 'string',
        'id_unidad' => 'integer',
        'id_origen' => 'integer',
        'id_moneda' => 'integer',
        'precio' => 'string',
        'id_tipo_precio' => 'integer',
        'tiempo_entrega' => 'string',
        'estatus' => 'integer',
        'activo' => 'integer',
        'foto1' => 'string',
        'foto2' => 'string',
        'foto3' => 'string',
        'foto4' => 'string',
        'foto5' => 'string',
        'id_subcategoria' => 'integer',
        'id_categoria' => 'integer',
        'id_fabricante' => 'integer',
        'codigo_barras' => 'string',
        'presentacion' => 'string',
        'id_color' => 'integer',
        'pedido_minimo' => 'string',
        'id_vende' => 'integer',

    ];

    /**
     * Validation rules
     * 
     * @var array
     */
    public static $rules = [
        
    ];


    public function sql_prod(){

          return  DB::table('tbl_productos as p')
                   ->leftjoin('tbl_fabricantes  as f','f.id','=','p.id_fabricante')
                   ->leftjoin('tbl_categorias  as c','c.id','=','p.id_categoria')
                   ->leftjoin('tbl_subcategorias  as sc','sc.id','=','p.id_subcategoria')
                   ->leftjoin('tbl_unidades  as u','u.id','=','p.id_unidad')
                   ->leftjoin('tbl_monedas  as m','m.id','=','p.id_moneda')
                   ->leftjoin('tbl_paises  as pa','pa.id','=','p.id_origen')
                   ->selectraw('p.*,f.nombre as fabricante,c.categoria,sc.sub_categoria,u.unidad,m.moneda,pa.Pais,c.categoria as nomcat')
                   ->get();

    }


    public function sql_prod_activos(){

          return  DB::table('tbl_productos as p')
                   ->leftjoin('tbl_fabricantes  as f','f.id','=','p.id_fabricante')
                   ->leftjoin('tbl_categorias  as c','c.id','=','p.id_categoria')
                   ->leftjoin('tbl_subcategorias  as sc','sc.id','=','p.id_subcategoria')
                   ->leftjoin('tbl_unidades  as u','u.id','=','p.id_unidad')
                   ->leftjoin('tbl_monedas  as m','m.id','=','p.id_moneda')
                   ->leftjoin('tbl_paises  as pa','pa.id','=','p.id_origen')
                   ->selectraw('p.*,f.nombre as fabricante,c.categoria,sc.sub_categoria,u.unidad,m.moneda,pa.Pais,c.categoria as nomcat')
                   ->where('p.activo',1)
                   ->get();

    }
    
}
