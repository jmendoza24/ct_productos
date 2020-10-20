<?php

namespace App\Repositories;

use App\Models\tbl_entregas;
use App\Repositories\BaseRepository;

/**
 * Class tbl_entregasRepository
 * @package App\Repositories
 * @version May 29, 2020, 11:07 pm UTC
*/

class tbl_entregasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cliente',
        'direccion',
        'colonia',
        'cp',
        'id_estado',
        'id_municipio',
        'id_pais',
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
        return tbl_entregas::class;
    }
}
