<?php

namespace App\Http\Controllers\Admin\WebSite;

use App\Events\UserApprove;
use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Authentication\Role\Repositories\RoleRepository;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Authentication\User\Requests\CreateUserRequest;
use App\Modules\Backend\Authentication\User\Requests\UpdateUserRequest;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class UserController extends BaseController
{
    private $userRepository, $roleRepository, $log;
    use SendsPasswordResetEmails;


    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     * @param RoleRepository $roleRepository
     * @param Log $log
     */
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository, Log $log)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->log = $log;
        parent::__construct();
    }


    /**
     * View all user
     * @return mixed
     */
    public function index()
    {
        if(\request()->ajax()) {
            $users = $this->userRepository->getModel()->where('id',Auth::user()['id'],'=');
            return DataTables::of($users)
                ->addColumn('action', function ($user) {
                    $data = $user;
                    $name = 'dashboard.donation';
                    $show= true;
                    return $this->view('partials.common.action', compact('data', 'name', 'show'))->render();
                })
                ->editColumn('voucher', function ($user) {
                    $url=asset($user->voucherImage());
                    return '<img src='.$url.' border="0" width="40"  />';
////                        return '<img src="'.asset($events->getImage()).'" border="0" width="40" class="img-rounded" align="center" />';
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->rawColumns(['voucher', 'action'])
                ->make(true);

        }
        return $this->view('web-site.donation.index', compact('users'));
    }
    /**
     * @param CreateUserRequest $createUserRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateUserRequest $createUserRequest)
    {
        $data = $createUserRequest->all();
        try {
            $data['password'] = bcrypt($data['password']);
            $data['bank_voucher']=$data['voucher'];
            $user = $this->userRepository->create($data);
            if($user == false)
            {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'User added successfully');
            return redirect()->route('dashboard.users.index');
        }
        catch (\Exception $e) {
            $this->log->error('User create : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Edit User
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $events = $this->userRepository->findById($id);
        return $this->view('web-site.donation.edit', compact('events'));
    }


    public function update(UpdateUserRequest $updateUserRequest, $id)
    {
        $data = $updateUserRequest->all();
        if(isset($data['email'])) {
            unset($data['email']);
        }
        try {
            $user = $this->userRepository->findById($id);
            $data['bank_voucher'] = $data['voucher'];
            $user = $this->userRepository->update($data, $id);
            if($user == false)
            {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'User updated successfully');
            return redirect()->route('dashboard.donation.index');
        }
        catch (\Exception $e) {
            $this->log->error('User update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }

}
