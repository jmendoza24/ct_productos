<?php

namespace App\Repositories;

use App\Models\tbl_productos;
use App\Repositories\BaseRepository;

/**
 * Class tbl_productosRepository
 * @package App\Repositories
 * @version May 29, 2020, 9:31 pm UTC
*/

class tbl_productosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'id_vende'

    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tbl_productos::class;
    }
}
