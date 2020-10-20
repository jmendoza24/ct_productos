<?php

namespace App\Repositories;

use App\Models\tbl_monedas;
use App\Repositories\BaseRepository;

/**
 * Class tbl_monedasRepository
 * @package App\Repositories
 * @version June 15, 2020, 8:58 pm UTC
*/

class tbl_monedasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'moneda'
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
        return tbl_monedas::class;
    }
}
