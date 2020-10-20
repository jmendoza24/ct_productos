<?php

namespace App\Repositories;

use App\Models\tbl_tipo_cliente;
use App\Repositories\BaseRepository;

/**
 * Class tbl_tipo_clienteRepository
 * @package App\Repositories
 * @version June 9, 2020, 7:33 pm UTC
*/

class tbl_tipo_clienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo'
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
        return tbl_tipo_cliente::class;
    }
}
