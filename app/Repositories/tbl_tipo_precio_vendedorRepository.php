<?php

namespace App\Repositories;

use App\Models\tbl_tipo_precio_vendedor;
use App\Repositories\BaseRepository;

/**
 * Class tbl_tipo_precio_vendedorRepository
 * @package App\Repositories
 * @version May 29, 2020, 11:21 pm UTC
*/

class tbl_tipo_precio_vendedorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_producto',
        'id_vendedor',
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
        return tbl_tipo_precio_vendedor::class;
    }
}
