<?php

namespace App\Repositories;

use App\Models\tbl_clientes;
use App\Repositories\BaseRepository;

/**
 * Class tbl_clientesRepository
 * @package App\Repositories
 * @version May 29, 2020, 8:36 pm UTC
*/

class tbl_clientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'puesto',
        'telefono',
        'telefono2',
        'correo',
        'calle',
        'colonia',
        'id_municipio',
        'id_estado',
        'id_pais',
        'rfc',
        'estatus',
        'activo',
        'comentarios',
        'id_tipo_cliente',
        'id_tipo_precio',
        'descuento',
        'id_vendedor',
        'datos_fac',
        'datos_ent',
        'cp',
        'tipo_persona',
        'razon',
        'web',
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
        return tbl_clientes::class;
    }
}
