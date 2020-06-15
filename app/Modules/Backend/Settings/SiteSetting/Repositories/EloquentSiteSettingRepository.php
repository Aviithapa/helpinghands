<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 2/14/2018
 * Time: 11:21 AM
 */

namespace App\Modules\Backend\Settings\SiteSetting\Repositories;

use App\Models\Website\SiteSetting;
use App\Modules\Framework\RepositoryImplementation;

class EloquentSiteSettingRepository extends RepositoryImplementation implements  SiteSettingRepository
{
    protected $entity_name = "Site Setting";

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public function getModel()
    {
        return new SiteSetting();
    }

    /**
     * @param $name
     * @return mixed
     */
    public function findByName($name)
    {
        $data = $this->getModel()->where('name', $name)->first();
        return $data;
    }



}

