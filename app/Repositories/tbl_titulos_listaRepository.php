<?php

namespace App\Repositories;

use App\Models\tbl_titulos_lista;
use App\Repositories\BaseRepository;

/**
 * Class tbl_titulos_listaRepository
 * @package App\Repositories
 * @version June 20, 2020, 4:10 am UTC
*/

class tbl_titulos_listaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo1',
        'titulo2',
        'titulo3',
        'titulo4',
        'titulo5'
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
        return tbl_titulos_lista::class;
    }
}
