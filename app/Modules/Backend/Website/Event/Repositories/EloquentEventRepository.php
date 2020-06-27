<?php

namespace App\Modules\Backend\Website\Event\Repositories;

use App\Models\Website\Event;
use App\Modules\Framework\RepositoryImplementation;

class EloquentEventRepository extends RepositoryImplementation implements EventRepository
{
    protected $entity_name = "Event";

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public function getModel()
    {
        return new Event();
    }

    public function getData($limit, $offset = 0)
    {
        return $this->getModel()
            ->where(function ($query) use ($limit, $offset) {

            })
            ->take($limit)
            ->get();

    }
    public function getAllInActive()
    {
        return $this->getModel()->where('status', 'in-active')->get();
    }
    public function getActiveEvent(){
        return $this->getModel()->where('status','active')->get();
    }



}

