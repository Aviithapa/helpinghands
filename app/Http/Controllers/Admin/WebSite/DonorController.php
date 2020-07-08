<?php


namespace App\Http\Controllers\Admin\WebSite;
use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Authentication\User\Requests\UpdateUserRequest;
use App\Modules\Backend\Website\Donation\Repositories\DonationRepository;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use Yajra\DataTables\Facades\DataTables;

class DonorController extends BaseController
{
    private $donorRepository;
  private $userRepository;
  private $eventRepository;
    /**
     * UserController constructor.
     * @param DonationRepository $donorRepository
     * @param UserRepository $userRepository
     */
    public function __construct(DonationRepository $donorRepository, UserRepository $userRepository, EventRepository $eventRepository)
    {
        $this->donorRepository = $donorRepository;
        $this->userRepository=$userRepository;
        $this->eventRepository=$eventRepository;
    }

    public function index()
    {

        if (\request()->ajax()) {
            $donors=$this->donorRepository->getAll();
                return DataTables::of($donors)
                    ->addColumn('action', function ($donors) {
                        $data = $donors;
                        $name = 'dashboard.donor';
                        $watch = true;
                        return $this->view('partials.common.action', compact('data', 'name', 'watch'))->render();
                    })
                    ->editColumn('image', function ($donors) {
                        $url=asset($donors->getImage());
                        return '<img src='.$url.' border="0" width="40"  />';
////                        return '<img src="'.asset($events->getImage()).'" border="0" width="40" class="img-rounded" align="center" />';
                    })
                    ->editColumn('id', 'ID: {{$id}}')
                    ->rawColumns(['image', 'action'])
                    ->make(true);
            }
        return $this->view('web-site.donor.index');
    }
    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $donor = $this->donorRepository->findById($id);
        $events=$this->eventRepository->findById($donor['event_id']);
        return $this->view('web-site.donor.show', compact('donor','events'));
    }
    public function edit($id)
    {
        $donor = $this->donorRepository->findById($id);
        return $this->view('web-site.donor.edit', compact('donor'));
    }

    public function update(UpdateUserRequest $updateUserRequest, $id)
    {
        $data = $updateUserRequest->all();
        try {
            $user = $this->donorRepository->findById($id);
            $data['donation_amount'] = $data['donation_amount'];
            $user = $this->donorRepository->update($data, $id);
            if($user == false)
            {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'User updated successfully');
            return redirect()->route('dashboard.donor.index');
        }
        catch (\Exception $e) {
            $this->log->error('User update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
