<?php

namespace App\Repositories;

use App\Models\tbl_cotizacion;
use App\Repositories\BaseRepository;

/**
 * Class tbl_cotizacionRepository
 * @package App\Repositories
 * @version June 30, 2020, 5:11 am UTC
*/

class tbl_cotizacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'interesado',
        'direccion',
        'colonia',
        'cp',
        'num_ext',
        'num_int',
        'local',
        'comentarios',
        'estatus',
        'telefono',
        'correo',
        'id_usuario'

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
        return tbl_cotizacion::class;
    }
}
