<?php

namespace App\Repositories;

use App\Models\$Ercas$;
use InfyOm\Generator\Common\BaseRepository;

class $Ercas$Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return $Ercas$::class;
    }
}
