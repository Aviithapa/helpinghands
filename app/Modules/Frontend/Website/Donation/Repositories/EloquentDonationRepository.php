<?php


namespace App\Modules\Frontend\Website\Donation\Repositories;


use App\Models\Website\Donation;
use App\Modules\Framework\RepositoryImplementation;

class EloquentDonationRepository extends RepositoryImplementation implements DonationRepository
{
   protected $entity_name = "Donation";

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public function getModel()
    {
     return new Donation();
    }
}
