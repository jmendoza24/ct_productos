<?php

namespace App\Repositories;

use App\Models\tbl_vendedores;
use App\Repositories\BaseRepository;

/**
 * Class tbl_vendedoresRepository
 * @package App\Repositories
 * @version May 29, 2020, 7:19 pm UTC
*/

class tbl_vendedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'correo',
        'telefono',
        'id_tipo_vendedor',
        'descuentos',
        'comentarios',
        'calle',
        'colonia',
        'id_municipio',
        'id_estado',
        'id_pais',
        'cp',
        'puesto',
        'rfc',
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
        return tbl_vendedores::class;
    }
}
