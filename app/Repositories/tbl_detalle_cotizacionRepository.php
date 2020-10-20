<?php

namespace App\Repositories;

use App\Models\tbl_detalle_cotizacion;
use App\Repositories\BaseRepository;

/**
 * Class tbl_detalle_cotizacionRepository
 * @package App\Repositories
 * @version June 21, 2020, 8:41 pm UTC
*/

class tbl_detalle_cotizacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return tbl_detalle_cotizacion::class;
    }
}
