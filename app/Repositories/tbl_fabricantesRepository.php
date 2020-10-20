<?php

namespace App\Repositories;

use App\Models\tbl_fabricantes;
use App\Repositories\BaseRepository;

/**
 * Class tbl_fabricantesRepository
 * @package App\Repositories
 * @version June 18, 2020, 11:20 pm UTC
*/

class tbl_fabricantesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'razon',
        'rfc',
        'web',
        'tel1',
        'tel2',
        'direccion',
        'colonia',
        'cp',
        'estado',
        'municipio',
        'pais',
        'condiciones',
        'comentarios',
        'activo'

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
        return tbl_fabricantes::class;
    }
}
