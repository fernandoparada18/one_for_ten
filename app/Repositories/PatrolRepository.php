<?php

namespace App\Repositories;

use App\Models\Patrol;
use App\Repositories\BaseRepository;

/**
 * Class PatrolRepository
 * @package App\Repositories
 * @version February 26, 2020, 2:17 pm UTC
*/

class PatrolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'id_card',
        'address',
        'phone',
        'email',
        'chief_id'
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
        return Patrol::class;
    }
}
