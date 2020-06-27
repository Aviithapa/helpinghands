<?php


namespace App\Modules\Backend\Website\Help\Repositories;


use App\Models\Website\Help;
use App\Modules\Framework\RepositoryImplementation;

class EloquentHelpRepository extends RepositoryImplementation implements HelpRepository
{
    protected $entity_name = "Help";

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public function getModel()
    {
        return new Help();
    }

}
