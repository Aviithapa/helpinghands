<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 3/10/2018
 * Time: 05:09 AM
 */

namespace App\Modules\Backend\Website\Slider\Repositories;

use App\Models\Website\Slider;
use App\Modules\Framework\RepositoryImplementation;

class EloquentSliderRepository extends RepositoryImplementation implements  SliderRepository
{
    protected $entity_name = "Slider";

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public function getModel()
    {
        return new Slider();
    }

}

