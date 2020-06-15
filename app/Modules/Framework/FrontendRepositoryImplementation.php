<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 5/29/2018
 * Time: 7:45 PM
 */

namespace App\Modules\Framework;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Logging\Log;

abstract class FrontendRepositoryImplementation
{
    protected $entity_name = "";

    protected $log;

    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    public abstract function getModel();

    /**
     * Get all data.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->getModel()->where('status', 'published')->get();
    }

    /**
     * Search data by specify criteria.
     *
     * @param $searchKeyword
     * @param string $field
     * @return mixed
     */
    public function search($searchKeyword, $field = '')
    {
        $search = "%{$searchKeyword}%";
        return $this->getModel()
            ->where($field, 'like', $search)
            ->where('status', 'published')
            ->paginate($this->perPage());
    }

    /**
     * All or search query
     * @param null $searchQuery
     * @param string $field
     * @return mixed
     */
    public function allOrSearch($searchQuery = null, $field = '')
    {
        if (is_null($searchQuery)) {
            return $this->getAll();
        }
        return $this->search($searchQuery, $field);
    }

    /**Gets all data for data-table
     * @return mixed
     */
    public function getAllForDataTable()
    {
        $user = Auth::user();
        if($user->isSuperAdmin())
        {
            return $this->getModel()->query();
        }
        else {
            return $this->getModel()->query()->where('user_id', $user->id);

        }
    }

    /**
     * Get count of row being shown perpage.
     *
     * @return int
     */
    public function perPage()
    {
        $page = getSettingValue('pagination');
        return $page ? $page : 10;
    }

    /**
     * Get all data with pagination
     * @return mixed
     */
    public function getWithPagination()
    {
        return $this->getModel()->latest()->where('status', 'published')->paginate($this->perPage());
    }

    /**
     * Find data by given an identifier.
     *
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findById($id)
    {
        return $this->getModel()->where('status', 'published')->find($id);
    }

    public function findBySlug($slug)
    {
        return $this->getModel()->where('status', 'published')->where('slug', $slug)->first();
    }

    /**
     * Find data by specified column name and value.
     *
     * @param string $key
     * @param string $value
     * @param string $operator
     *
     * @param bool $paginate
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findBy($key, $value, $operator = '=', $paginate = true)
    {
        if ($paginate) {
            return $this->getModel()->where('status', 'published')->where($key, $operator, $value)->paginate($this->perPage());
        } else {
            return $this->getModel()->where('status', 'published')->where($key, $operator, $value)->get();
        }
    }


}