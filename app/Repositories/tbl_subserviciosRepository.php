<?php

namespace App\Repositories;

use App\Models\tbl_subservicios;
use App\Repositories\BaseRepository;

/**
 * Class tbl_subserviciosRepository
 * @package App\Repositories
 * @version July 1, 2020, 4:16 am UTC
*/

class tbl_subserviciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_servicio',
        'subservicio'
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
        return tbl_subservicios::class;
    }
}
