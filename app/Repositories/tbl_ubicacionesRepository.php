<?php

namespace App\Repositories;

use App\Models\tbl_ubicaciones;
use App\Repositories\BaseRepository;

/**
 * Class tbl_ubicacionesRepository
 * @package App\Repositories
 * @version June 29, 2020, 3:04 pm UTC
*/

class tbl_ubicacionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_direccion',
        'ubicacion',
        'id_estado',
        'id_municipio',
        'comentarios'
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
        return tbl_ubicaciones::class;
    }
}
