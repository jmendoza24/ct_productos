<?php

namespace App\Repositories;

use App\Models\tbl_categorias;
use App\Repositories\BaseRepository;

/**
 * Class tbl_categoriasRepository
 * @package App\Repositories
 * @version June 17, 2020, 6:50 am UTC
*/

class tbl_categoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'categoria'
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
        return tbl_categorias::class;
    }
}
