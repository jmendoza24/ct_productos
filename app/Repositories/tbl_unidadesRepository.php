<?php

namespace App\Repositories;

use App\Models\tbl_unidades;
use App\Repositories\BaseRepository;

/**
 * Class tbl_unidadesRepository
 * @package App\Repositories
 * @version May 29, 2020, 9:33 pm UTC
*/

class tbl_unidadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'unidad'
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
        return tbl_unidades::class;
    }
}
