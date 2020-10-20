<?php

namespace App\Repositories;

use App\Models\tbl_contactos_clientes;
use App\Repositories\BaseRepository;

/**
 * Class tbl_contactos_clientesRepository
 * @package App\Repositories
 * @version May 29, 2020, 8:39 pm UTC
*/

class tbl_contactos_clientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cliente',
        'nombre',
        'puesto',
        'telefono',
        'correo',
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
        return tbl_contactos_clientes::class;
    }
}
