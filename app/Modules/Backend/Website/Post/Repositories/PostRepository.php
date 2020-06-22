<?php


namespace App\Modules\Backend\Website\Post\Repositories;

use App\Modules\Framework\Repository;

interface PostRepository extends Repository
{
    /*
              *params integer limit
         * params integer offset
            * return collection
                */
    public function getData($limit, $offset = 0);

    public function allPartnersList();

    public function allServiceType();

}

