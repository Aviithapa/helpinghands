<?php


namespace App\Http\Controllers\Admin\WebSite;

use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Authentication\Role\Repositories\RoleRepository;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Authentication\User\Requests\UpdateUserRequest;
use App\Modules\Backend\Website\Donation\Repositories\DonationRepository;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DonationController extends BaseController
{
    private $donationRepository , $roleRepository, $log;
    use SendsPasswordResetEmails;


    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     * @param RoleRepository $roleRepository
     * @param Log $log
     */
    public function __construct(DonationRepository $donationRepository, RoleRepository $roleRepository, Log $log)
    {
        $this->donationRepository = $donationRepository;
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
            $users = $this->donationRepository->getModel()->where('user_id',Auth::user()['id'],'=');
            return DataTables::of($users)
                ->addColumn('action', function ($user) {
                    $data = $user;
                    $name = 'dashboard.donation';
                    $show= true;
                    return $this->view('partials.common.action', compact('data', 'name', 'show'))->render();
                })
                ->editColumn('voucher', function ($user) {
                    $url=asset($user->getImage());
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
     * Edit User
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $events = $this->donationRepository->findById($id);
        return $this->view('web-site.donation.edit', compact('events'));
    }


    public function update(UpdateUserRequest $updateUserRequest, $id)
    {
        $data = $updateUserRequest->all();
        if(isset($data['email'])) {
            unset($data['email']);
        }
        try {
            $user = $this->donationRepository->findById($id);
            $data['image'] = $data['voucher'];
            $user = $this->donationRepository->update($data, $id);
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
