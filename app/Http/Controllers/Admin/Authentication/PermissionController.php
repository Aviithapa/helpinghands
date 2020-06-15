<?php

namespace App\Http\Controllers\Admin\Authentication;

use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Authentication\Permission\Repositories\PermissionRepository;
use App\Modules\Backend\Authentication\Permission\Requests\CreatePermissionRequest;
use App\Modules\Backend\Authentication\Permission\Requests\UpdatePermissionRequest;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends BaseController
{
    private $permissionRepository, $log;
    private $crud_actions = ['create', 'read', 'update', 'delete'];

    /**
     * PermissionController constructor.
     * @param Log $log
     * @param PermissionRepository $permissionRepository
     */

    public function __construct(Log $log, PermissionRepository $permissionRepository )
    {
        $this->permissionRepository = $permissionRepository;
        $this->log = $log;
        parent::__construct();
    }

    /**
     * View all permissions
     * @return mixed
     */
    public function index()
    {
        $this->authorize('read', $this->permissionRepository->getModel());
        if(\request()->ajax()) {
            $permissions = $this->permissionRepository->getAllForDataTable();
            return DataTables::of($permissions)
                ->addColumn('action', function ($permission) {
                    $data = $permission;
                    $name = 'dashboard.permissions';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('authentication.permission.index');
    }

    /**
     * Create new permission
     * @return mixed
     */
    public function create()
    {
        $this->authorize('create', $this->permissionRepository->getModel());
        return $this->view('authentication.permission.create');
    }

    public function store(CreatePermissionRequest $createPermissionRequest)
    {
        $this->authorize('create', $this->permissionRepository->getModel());
        $data = $createPermissionRequest->all();
        try {
            if(isset($data['make_crud']) && $data['make_crud'] == 'on') {
                foreach ($this->crud_actions as $key => $crud_action) {
                    $new_data['name'] = $data['name'].'-'.$crud_action;
                    $new_data['display_name'] =  ucfirst($data['display_name']).' '.ucfirst($crud_action);
                    $new_data['description'] = 'Ability to '.ucfirst($crud_action).' '.ucfirst($data['description']);
                    $this->permissionRepository->create($new_data);
                }
            }
            else {
                $this->permissionRepository->create($data);
            }
            session()->flash('success', 'Permission created successfully');
            return redirect()->route('dashboard.permissions.index');
        }
        catch (\Exception $e) {
            $this->log->error('Permission create : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Edit Permission
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $this->authorize('read', $this->permissionRepository->getModel());
        $permission = $this->permissionRepository->findById($id);
        return $this->view('authentication.permission.edit', compact('permission'));
    }

    /**
     * @param UpdatePermissionRequest $updatePermissionRequest
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePermissionRequest $updatePermissionRequest, $id)
    {
        $this->authorize('update', $this->permissionRepository->getModel());
        $data = $updatePermissionRequest->all();
        try {
            $this->permissionRepository->update($data, $id);
            session()->flash('success', 'Permission updated successfully');
            return redirect()->route('dashboard.permissions.index');
        }
        catch (\Exception $e) {
            $this->log->error('Permission update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->authorize('delete', $this->permissionRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->permissionRepository->hardDelete($id);
            else
                $this->permissionRepository->delete($id);
            session()->flash('success', 'Permission deleted successfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            $this->log->error('Permission delete : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
