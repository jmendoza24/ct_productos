<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

/**
 * Class tbl_cotizaciones
 * @package App\Models
 * @version June 21, 2020, 8:30 pm UTC
 *
 * @property string $nombre
 * @property integer $id_tipo_cliente
 * @property string $cliente
 * @property integer $id_cliente
 * @property string $correo
 * @property string $comentarios
 * @property integer $estatus
 * @property integer $id_usuario
 * @property string $descuento
 * @property string $iva
 * @property string $telefono
 * @property string $contacto
 */
class tbl_cotizaciones extends Model
{
    use SoftDeletes;

    public $table = 'tbl_cotizaciones';
    

    protected $dates = ['deleted_at'];

 

    public $fillable = [
        'nombre',
        'id_tipo_cliente',
        'cliente',
        'id_cliente',
        'correo',
        'comentarios',
        'estatus',
        'id_usuario',
        'descuento',
        'iva',
        'telefono',
        'contacto',
        'id_contacto',
        'condiciones',
        'lista',
        'flete',
        'anticipo',
        'descuento_aplicado',
        'tot_fila',
        'descripcion',
        'tipo_cambio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'id_tipo_cliente' => 'integer',
        'cliente' => 'string',
        'id_cliente' => 'integer',
        'correo' => 'string',
        'comentarios' => 'string',
        'estatus' => 'integer',
        'id_usuario' => 'integer',
        'descuento' => 'string',
        'iva' => 'string',
        'telefono' => 'string',
        'contacto' => 'string',
        'id_contacto' => 'integer',
        'condiciones' => 'string',
        'lista' => 'integer',
        'flete' => 'string',
        'anticipo' => 'string',
        'descuento_aplicado' => 'string',
        'tot_fila' => 'string',
        'descripcion' => 'string',
        'tipo_cambio' => 'string',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function sql_cots(){


        return  db::select("
        SELECT tc.*,cl.nombre as cliente_registrado,coti.totales
                            from
                            tbl_cotizaciones tc
                            left join tbl_clientes cl on cl.id = tc.id_cliente
                            left join (

                                            select totales.id_cotizacion ,ifnull(totales.total,0) as totales 
                                            from(

                                                SELECT 
                                                ifnull(sum(dt.tot_fila),0) as tot_filas,
                                                ifnull((sum(dt.tot_fila)*(c.descuento_aplicado/100)),0) as desas,
                                                ifnull(((sum(dt.tot_fila)-(sum(dt.tot_fila)*(c.descuento_aplicado/100))) + c.flete),0) as flets,
                                                ifnull((c.iva/100)*((sum(dt.tot_fila)-(sum(dt.tot_fila)*(c.descuento_aplicado/100))) + c.flete),0) as iva,
                                                ifnull(
                                                (c.iva/100)*((sum(dt.tot_fila)-(sum(dt.tot_fila)*(c.descuento_aplicado/100))) + c.flete)+((sum(dt.tot_fila)-                                                       (sum(dt.tot_fila)*(c.descuento_aplicado/100))) + c.flete)
                                                ,0)as total,
                                               ifnull( ((c.iva/100)*((sum(dt.tot_fila)-(sum(dt.tot_fila)*(c.descuento_aplicado/100))) + c.flete)+((sum(dt.tot_fila)-                                                   (sum(dt.tot_fila)*(c.descuento_aplicado/100))) + c.flete))*(c.anticipo/100),2) as ant,c.id as id_cotizacion

                                                FROM
                                                tbl_detalle_cotizacions dt
                                                join tbl_cotizaciones c on c.id=dt.id_cotizacion
                                                GROUP BY c.id
                                            ) as totales

                                ) as coti on coti.id_cotizacion = tc.id
                    ");
    }
    
}

