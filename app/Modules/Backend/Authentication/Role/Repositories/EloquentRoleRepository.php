<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 2/14/2018
 * Time: 11:21 AM
 */

namespace App\Modules\Backend\Authentication\Role\Repositories;

use App\Models\Auth\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Logging\Log;

class EloquentRoleRepository implements  RoleRepository
{
    private  $log;

    public function __construct(Log $log)
    {
        $this->log = $log;
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

    public function perPage()
    {
        $page = getSettingValue('pagination');
        return $page?$page:10;
    }

    public function getModel()
    {
        return new Role();
    }

    public function getAll()
    {
        return $this->getModel()->get();
    }

    public function getAllForDataTable()
    {
        return $this->getModel()->query();
    }

    public function search($searchQuery)
    {
        $search = "%{$searchQuery}%";
        return $this->getModel()->where('name', 'like', $search)
            ->paginate($this->perPage());
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
     * @param $slug
     * @return collection
     */
    public function findBySlug($slug,$status=true)
    {
        return $this->getModel()->where('status', 'published')->where('slug', $slug)->first();
    }

    public function allOrSearch($searchQuery = null)
    {
        if (is_null($searchQuery)) {
            return $this->getAll();
        }
        return $this->search($searchQuery);
    }

    public function getWithPagination()
    {
        return $this->getModel()->latest()->paginate($this->perPage());
    }

    public function findById($id)
    {
        return $this->getModel()->find($id);
    }

    public function findBy($key, $value, $operator = '=',$paginate = true, $limit = null)
    {
        return $this->getModel()->where($key, $operator, $value)->paginate($this->perPage());
    }

    public function create(array $data)
    {
        DB::beginTransaction();
        try {
            $role = $this->getModel()->create($data);
            if(isset($data['permissions']))
            {
                $role->permissions()->sync($data['permissions']);
            }
            DB::commit();
            return $role;
        }
        catch (\Exception $e)
        {
            DB::rollback();
            $this->log->error('Role create : '.$e->getMessage());
            return false;
        }

    }

    public function update(array $data, $id)
    {
        DB::beginTransaction();
        try {
            $role = $this->findById($id);
            $role->update($data);
            if(isset($data['permissions']))
            {
                $role->permissions()->sync($data['permissions']);
            }
            else {
                $role->permissions()->detach();
            }
            DB::commit();
            return $role;
        }
        catch (\Exception $e)
        {
            DB::rollback();
            $this->log->error('Role update : '.$e->getMessage());
            return false;
        }

    }

    public function delete($id)
    {
        $object = $this->findById($id);
        if (!is_null($object)) {
            $object->delete();
            return true;
        }
        return false;
    }

    public function hardDelete($id)
    {
        $object = $this->findById($id);
        if (!is_null($object)) {
            $object->forcedelete();
            return true;
        }
        return false;
    }



}

