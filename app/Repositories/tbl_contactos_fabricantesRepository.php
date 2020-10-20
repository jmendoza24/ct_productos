<?php

namespace App\Repositories;

use App\Models\tbl_contactos_fabricantes;
use App\Repositories\BaseRepository;

/**
 * Class tbl_contactos_fabricantesRepository
 * @package App\Repositories
 * @version June 18, 2020, 11:22 pm UTC
*/

class tbl_contactos_fabricantesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'correo',
        'puesto',
        'telefono',
        'comentarios',
        'id_fabricante'
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
        return tbl_contactos_fabricantes::class;
    }
}
