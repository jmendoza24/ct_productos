<?php

namespace App\Repositories;

use App\Models\tbl_empresa;
use App\Repositories\BaseRepository;

/**
 * Class tbl_empresaRepository
 * @package App\Repositories
 * @version June 17, 2020, 5:56 pm UTC
*/

class tbl_empresaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'telefono',
        'nombre_contacto',
        'correo',
        'celular',
        'face',
        'insta',
        'web',
        'logo',
        'condiciones',
        'tipo_cambio',
        'rfc'
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
        return tbl_empresa::class;
    }
}
