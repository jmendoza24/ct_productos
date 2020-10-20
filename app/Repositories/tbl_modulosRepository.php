<?php

namespace App\Repositories;

use App\Models\tbl_modulos;
use App\Repositories\BaseRepository;

/**
 * Class tbl_modulosRepository
 * @package App\Repositories
 * @version June 27, 2020, 11:06 pm UTC
*/

class tbl_modulosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'modulo',
        'activo'
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
        return tbl_modulos::class;
    }
}
