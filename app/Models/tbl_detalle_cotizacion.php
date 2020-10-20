<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

/**
 * Class tbl_detalle_cotizacion
 * @package App\Models
 * @version June 21, 2020, 8:41 pm UTC
 *
 * @property integer $id_cotizacion
 * @property integer $id_producto
 * @property integer $id_lista
 * @property string $costo
 * @property string $descuento
 * @property string $cantidad
 * @property string $comentarios_adicionales
 */
class tbl_detalle_cotizacion extends Model
{
    use SoftDeletes;

    public $table = 'tbl_detalle_cotizacions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_cotizacion',
        'id_producto',
        'id_lista',
        'costo',
        'descuento',
        'cantidad',
        'comentarios_adicionales',
        'tot_fila'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cotizacion' => 'integer',
        'id_producto' => 'integer',
        'id_lista' => 'integer',
        'costo' => 'string',
        'descuento' => 'string',
        'cantidad' => 'string',
        'comentarios_adicionales' => 'string',
        'tot_fila' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];



    public function sql_prod_cotizados($num_cot){

    return  db::select("
                        SELECT pr.*,c.categoria,con.idp,sc.sub_categoria,lp.*,pr.id as id_p 
                        FROM
                        tbl_productos pr
                        LEFT JOIN tbl_categorias c ON c.id=pr.id_categoria
                        LEFT JOIN tbl_subcategorias sc ON sc.id=pr.id_subcategoria
                        LEFT JOIN(
                                    SELECT dt.id_producto AS idp
                                    FROM
                                    tbl_detalle_cotizacions dt
                                    JOIN tbl_productos p ON p.id= dt.id_producto
                                    WHERE dt.id_cotizacion=$num_cot
                                 ) AS con ON pr.id=con.idp
                        JOIN tbl_lista_precios lp on lp.id_producto =pr.id
                        where pr.activo=1
                    ");
    }


    public function sql_prod_cotizados_tabla($num_cot){

    return  db::select("
                                    SELECT *,p.id as idp,dt.id as id_dt
                                    FROM
                                    tbl_detalle_cotizacions dt
                                    JOIN tbl_productos p ON p.id= dt.id_producto
                                    LEFT JOIN tbl_lista_precios lp ON lp.id_producto=p.id
                                    LEFT JOIN tbl_categorias c ON c.id= p.id_categoria
                                    WHERE dt.id_cotizacion=$num_cot
                    ");
    }


    public function sql_totales($num_cot){

        return  db::select("
                                       SELECT 
                                       IFNULL(sum(dt.tot_fila),0) as tot_filas,
                                       IFNULL((sum(dt.tot_fila)*(IFNULL(c.descuento_aplicado/100,0))),0) as desas,
                                       IFNULL( ((sum(dt.tot_fila)-(sum(dt.tot_fila)*(IFNULL(c.descuento_aplicado/100,0)))) + c.flete),0) as flets,
                                       IFNULL((IFNULL(c.iva/100,0))*((sum(dt.tot_fila)-(sum(dt.tot_fila)*(IFNULL(c.descuento_aplicado/100,0)))) + c.flete),0) as iva,
                                       

                                       IFNULL(sum(dt.tot_fila),0)-IFNULL((sum(dt.tot_fila)*(IFNULL(c.descuento_aplicado/100,0))),0)+IFNULL((IFNULL(c.iva/100,0))*((sum(dt.tot_fila)-(sum(dt.tot_fila)*(IFNULL(c.descuento_aplicado/100,0)))) + c.flete),0)+ c.flete as total,
                                       IFNULL(((IFNULL(c.iva/100,0))*((sum(dt.tot_fila)-(sum(dt.tot_fila)*(IFNULL(c.descuento_aplicado/100,0)))) + c.flete)+((sum(dt.tot_fila)-(sum(dt.tot_fila)*(IFNULL(c.descuento_aplicado/100,0)))) + c.flete))*(IFNULL(c.anticipo/100,0)),0) as ant
                                       
                                FROM
                                tbl_detalle_cotizacions dt
                                join tbl_cotizaciones c on c.id=dt.id_cotizacion
                                WHERE dt.id_cotizacion=$num_cot
                    ");
    }

    
}

  