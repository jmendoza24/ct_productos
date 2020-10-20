<?php

namespace App\Repositories;

use App\Models\tbl_articulos;
use App\Repositories\BaseRepository;

/**
 * Class tbl_articulosRepository
 * @package App\Repositories
 * @version June 27, 2020, 11:13 pm UTC
*/

class tbl_articulosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_modulo',
        'articulo',
        'contenido',
        'fragmento',
        'monto',
        'id_moneda',
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
        return tbl_articulos::class;
    }
}
