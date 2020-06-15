<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 3/9/2018
 * Time: 9:09 PM
 */


namespace App\Modules\Framework;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Logging\Log;

abstract class RepositoryImplementation
{
    protected $entity_name = "";

    protected $log;

    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    /**
     * Gets model for operation.
     *
     * @return mixed
     */
    public abstract function getModel();

    /**
     * Get all data.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->getModel()->get();
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
    /**find by data for data-table
     * @param string $key
     * @param string $value
     * @param string $operator
     * @return mixed
     */
    public function findByDataTable($key, $value, $operator = '=')
    {
        $user = Auth::user();
        if($user->isSuperAdmin())
        {
            return $this->getModel()->query()->where($key, $operator, $value);
        }
        else {
            return $this->getModel()->query()->where('user_id', $user->id)->where($key, $operator, $value);

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
        return $this->getModel()->latest()->paginate($this->perPage());
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
        return $this->getModel()->find($id);
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
    public function findBy($key, $value, $operator = '=', $paginate = true,$limit = null)
    {
        if ($paginate) {
            return $this->getModel()->where($key, $operator, $value)->paginate($this->perPage());
        } else {
            $query=$this->getModel()->where($key, $operator, $value);
            if($limit){
                $query->limit($limit);
            }
            return $query->get();
        }
    }
    /**
     * Find data by specified column name and value.
     *
     * @param string $key
     * @param string $value
     * @param string $operator
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findByFirst($key, $value, $operator = '=')
    {
            return $this->getModel()->where($key, $operator, $value)->first();
    }

    /**
     * Create a new data.
     *
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        DB::beginTransaction();
        try {
            $entity = $this->getModel()->create($data);
            DB::commit();
            return $entity;
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            $this->log->error($this->entity_name . ' create : ' . $e->getMessage());
            return false;
        }

    }

    /**
     * Updates the row with the provided data and id
     *
     * @param array $data
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update(array $data, $id)
    {
        DB::beginTransaction();
        try {
            $entity = $this->findById($id);
            $entity->update($data);
            DB::commit();
            return $entity;
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            $this->log->error($this->entity_name . ' update : ' . $e->getMessage());
            return false;
        }

    }

    /**
     * Deletes a row with the provided id.
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $object = $this->findById($id);
        if (!is_null($object)) {
            $object->delete();
            return true;
        }
        return false;
    }


    /**
     * Hard Deletes a row with the provided id.
     *
     * @param $id
     * @return bool
     */

    public function hardDelete($id)
    {
        $object = $this->findById($id);
        if (!is_null($object)) {
            $object->forcedelete();
            return true;
        }
        return false;
    }
    /**
     * @param $slug
     * @return collection
     */
    public function findBySlug($slug,$status=true)
    {
        if($status==true)
        return $this->getModel()->where('status', 'published')->where('slug', $slug)->first();
        return $this->getModel()->where('slug', $slug)->first();

    }

}