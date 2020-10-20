<?php

namespace App\Repositories;

use App\Models\tbl_costos_servicios;
use App\Repositories\BaseRepository;

/**
 * Class tbl_costos_serviciosRepository
 * @package App\Repositories
 * @version June 29, 2020, 6:01 pm UTC
*/

class tbl_costos_serviciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_direccion',
        'id_servicio',
        'articulo',
        'fraccion',
        'monto',
        'moneda',
        'comentarios',
        'periodicidad',
        'id_subservicio'

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
        return tbl_costos_servicios::class;
    }
}
