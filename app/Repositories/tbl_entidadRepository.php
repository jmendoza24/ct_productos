<?php

namespace App\Repositories;

use App\Models\tbl_entidad;
use App\Repositories\BaseRepository;

/**
 * Class tbl_entidadRepository
 * @package App\Repositories
 * @version June 27, 2020, 11:27 pm UTC
*/

class tbl_entidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'rfc',
        'telefono',
        'director',
        'correo',
        'telefono2',
        'direccion',
        'logo',
        'id_estado',
        'id_municipio'
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
        return tbl_entidad::class;
    }
}
