<?php

namespace App\Modules\Backend\Website\Post\Repositories;

use App\Models\Website\Post;
use App\Modules\Framework\RepositoryImplementation;

class EloquentPostRepository extends RepositoryImplementation implements PostRepository
{
    protected $entity_name = "Post";

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public function getModel()
    {
        return new Post();
    }

    public function getData($limit, $offset = 0)
    {
        return $this->getModel()
            ->where(function ($query) use ($limit, $offset) {

            })
            ->take($limit)
            ->get();

    }
    public function allPartnersList()
    {
        return $this->getModel()
        ->where('type','=','school_partner')
            ->orWhere('type','=','recruiter_partner')
            ->orWhere('type','=','student_partner')
            ->orWhere('type','=','teacher')
            ->get();

    }
    public function allServiceType()
    {
        return $this->getModel()
        ->where('type','=','services')
//            ->orWhere('type','=','recruiter_partner_service')
//            ->orWhere('type','=','student_partner_service')
            ->get();

    }

}

