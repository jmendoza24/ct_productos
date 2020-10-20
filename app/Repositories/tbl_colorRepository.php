<?php

namespace App\Repositories;

use App\Models\tbl_color;
use App\Repositories\BaseRepository;

/**
 * Class tbl_colorRepository
 * @package App\Repositories
 * @version June 22, 2020, 1:48 am UTC
*/

class tbl_colorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'color'
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
        return tbl_color::class;
    }
}
