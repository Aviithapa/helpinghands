<?php


namespace App\Modules\Backend\Website\Event\Repositories;

use App\Modules\Framework\Repository;

interface EventRepository extends Repository
{

    public function getActiveEvent();


}

