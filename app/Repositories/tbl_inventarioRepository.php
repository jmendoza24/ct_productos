<?php

namespace App\Repositories;

use App\Models\tbl_inventario;
use App\Repositories\BaseRepository;

/**
 * Class tbl_inventarioRepository
 * @package App\Repositories
 * @version June 20, 2020, 6:48 am UTC
*/

class tbl_inventarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_producto',
        'cantidad',
        'costo',
        'fecha_ingreso',
        'comentarios',
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
        return tbl_inventario::class;
    }
}
