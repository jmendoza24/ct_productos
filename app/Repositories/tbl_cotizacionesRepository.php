<?php

namespace App\Repositories;

use App\Models\tbl_cotizaciones;
use App\Repositories\BaseRepository;

/**
 * Class tbl_cotizacionesRepository
 * @package App\Repositories
 * @version June 21, 2020, 8:30 pm UTC
*/

class tbl_cotizacionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'id_tipo_cliente',
        'cliente',
        'id_cliente',
        'correo',
        'comentarios',
        'estatus',
        'id_usuario',
        'descuento',
        'iva',
        'telefono',
        'contacto',
        'id_contacto',
        'condiciones',
        'lista',
        'flete',
        'anticipo',
        'descuento_aplicado',
        'tot_fila',
        'descripcion',
        'tipo_cambio'
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
        return tbl_cotizaciones::class;
    }
}
