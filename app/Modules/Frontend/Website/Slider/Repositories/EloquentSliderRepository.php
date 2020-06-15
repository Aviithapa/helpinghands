<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 3/10/2018
 * Time: 05:09 AM
 */

namespace App\Modules\Frontend\Website\Slider\Repositories;

use App\Models\Website\Slider;
use App\Modules\Framework\FrontendRepositoryImplementation;

class EloquentSliderRepository extends FrontendRepositoryImplementation implements  SliderRepository
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

    public function getForHomePage()
    {
        return $this->getModel()->where('status', 'published')->latest()->get();
    }

    public function getRandomSlider()
    {
        return $this->getModel()->where('status', 'published')->inRandomOrder()->first();

    }

}

