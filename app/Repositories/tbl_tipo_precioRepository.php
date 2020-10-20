<?php

namespace App\Repositories;

use App\Models\tbl_tipo_precio;
use App\Repositories\BaseRepository;

/**
 * Class tbl_tipo_precioRepository
 * @package App\Repositories
 * @version May 29, 2020, 11:19 pm UTC
*/

class tbl_tipo_precioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_producto',
        'id_cliente',
        'costo'
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
        return tbl_tipo_precio::class;
    }
}
