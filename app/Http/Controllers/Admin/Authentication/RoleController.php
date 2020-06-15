<?php

namespace App\Http\Controllers\Admin\Authentication;

use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Authentication\Role\Repositories\RoleRepository;
use App\Modules\Backend\Authentication\Role\Requests\CreateRoleRequest;
use App\Modules\Backend\Authentication\Role\Requests\UpdateRoleRequest;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

class RoleController extends BaseController
{
    private $roleRepository, $log;

    /**
     * RoleController constructor.
     * @param RoleRepository $roleRepository
     * @param Log $log
     */
    public function __construct(RoleRepository $roleRepository, Log $log)
    {
        $this->roleRepository = $roleRepository;
        $this->log = $log;
        parent::__construct();
    }


    /**
     * View all role
     * @return mixed
     */
    public function index()
    {
        $this->authorize('read',$this->roleRepository->getModel());
        if(\request()->ajax()) {
            $roles = $this->roleRepository->getAllForDataTable();
            return DataTables::of($roles)
                ->addColumn('action', function ($role) {
                    $data = $role;
                    $name = 'dashboard.roles';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('authentication.role.index', compact('roles'));
    }

    /**
     * Create new role
     * @return mixed
     */
    public function create()
    {
        $this->authorize('create',$this->roleRepository->getModel());
        return $this->view('authentication.role.create');
    }

    /**
     * @param CreateRoleRequest $createRoleRequest
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(CreateRoleRequest $createRoleRequest)
    {
        $this->authorize('create',$this->roleRepository->getModel());
        $data = $createRoleRequest->all();
        try {
            $role = $this->roleRepository->create($data);
            if($role == false)
            {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Role added successfully');
            return redirect()->route('dashboard.roles.index');
        }
        catch (\Exception $e) {
            $this->log->error('Role create : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $this->authorize('read', $this->roleRepository->getModel());
        $role = $this->roleRepository->findById($id);
        return $this->view('authentication.role.show', compact('role'));
    }

    /**
     * Edit role
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $this->authorize('update',$this->roleRepository->getModel());
        $role = $this->roleRepository->findById($id);
        return $this->view('authentication.role.edit', compact('role'));
    }


    /**
     * @param UpdateRoleRequest $updateRoleRequest
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRoleRequest $updateRoleRequest, $id)
    {
        $this->authorize('update',$this->roleRepository->getModel());
        $data = $updateRoleRequest->all();
        try {
            $role = $this->roleRepository->findById($id);
            $this->roleRepository->update($data, $id);
            session()->flash('success', 'Role updated successfully');
            return redirect()->route('dashboard.roles.index');
        }
        catch (\Exception $e) {
            $this->log->error('Role update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->authorize('delete',$this->roleRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->roleRepository->hardDelete($id);
            else
                $this->roleRepository->delete($id);

            session()->flash('success', 'Role deleted successfully');
            return redirect()->back();

        }
        catch (\Exception $e) {
            $this->log->error('Role delete : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
