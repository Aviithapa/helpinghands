<?php

namespace App\Modules\Backend\Authentication\User\Repositories;

use App\Modules\Framework\Repository;

interface UserRepository extends  Repository
{
    /**Gets all data for data-table
     * @return mixed
     */
    public function getAllRecruitersForDataTable();

}

