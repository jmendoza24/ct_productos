<?php

namespace App\Repositories;

use App\Models\tbl_subcategorias;
use App\Repositories\BaseRepository;

/**
 * Class tbl_subcategoriasRepository
 * @package App\Repositories
 * @version June 17, 2020, 7:52 am UTC
*/

class tbl_subcategoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_categoria',
        'sub_categoria'
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
        return tbl_subcategorias::class;
    }
}
