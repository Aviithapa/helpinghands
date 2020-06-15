<?php

namespace App\Modules\Backend\Website\GetTouch\Repositories;

use App\Models\Website\GetTouch;
use App\Modules\Backend\Website\GetTouch\Repositories\GetTouchRepository;
use App\Modules\Framework\RepositoryImplementation;

class EloquentGetTouchRepository extends RepositoryImplementation implements  GetTouchRepository
{
    protected $entity_name = "GetTouch";

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public function getModel()
    {
        return new GetTouch();
    }

}
