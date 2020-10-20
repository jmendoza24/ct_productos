<?php

namespace App\Repositories;

use App\Models\tbl_tipo_vendedor;
use App\Repositories\BaseRepository;

/**
 * Class tbl_tipo_vendedorRepository
 * @package App\Repositories
 * @version June 17, 2020, 5:02 am UTC
*/

class tbl_tipo_vendedorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_vendedor'
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
        return tbl_tipo_vendedor::class;
    }
}
