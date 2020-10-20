<?php

namespace App\Repositories;

use App\Models\tbl_formatos;
use App\Repositories\BaseRepository;

/**
 * Class tbl_formatosRepository
 * @package App\Repositories
 * @version June 27, 2020, 11:14 pm UTC
*/

class tbl_formatosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
         'id_direccion',
        'id_ubicacion',
        'servicio'
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
        return tbl_formatos::class;
    }
}
