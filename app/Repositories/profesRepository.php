<?php

namespace App\Repositories;

use App\Models\profes;
use App\Repositories\BaseRepository;

/**
 * Class profesRepository
 * @package App\Repositories
 * @version November 7, 2020, 1:54 am UTC
*/

class profesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Email',
        'Score'
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
        return profes::class;
    }
}
