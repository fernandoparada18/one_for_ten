<?php

namespace App\Repositories;

use App\Models\Chief;
use App\Repositories\BaseRepository;

/**
 * Class ChiefRepository
 * @package App\Repositories
 * @version February 10, 2020, 12:41 pm UTC
*/

class ChiefRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'id_card',
        'address',
        'phone',
        'email'
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
        return Chief::class;
    }
}
