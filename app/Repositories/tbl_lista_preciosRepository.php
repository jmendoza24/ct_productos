<?php

namespace App\Repositories;

use App\Models\tbl_lista_precios;
use App\Repositories\BaseRepository;

/**
 * Class tbl_lista_preciosRepository
 * @package App\Repositories
 * @version June 20, 2020, 2:57 am UTC
*/

class tbl_lista_preciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_producto',
        'lista1',
        'lista2',
        'lista3',
        'lista4',
        'lista5'
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
        return tbl_lista_precios::class;
    }
}
