<?php

namespace App\Repositories;

use App\Models\Usuarios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsuariosRepository
 * @package App\Repositories
 * @version September 5, 2019, 12:30 am UTC
 *
 * @method Usuarios findWithoutFail($id, $columns = ['*'])
 * @method Usuarios find($id, $columns = ['*'])
 * @method Usuarios first($columns = ['*'])
*/
class UsuariosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'id_tipo_usuario',
        'id_proveedor',
        'firma',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usuarios::class;
    }
}
