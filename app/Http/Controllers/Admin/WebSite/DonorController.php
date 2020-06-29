<?php


namespace App\Http\Controllers\Admin\WebSite;
use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Website\Donation\Repositories\DonationRepository;
use Yajra\DataTables\Facades\DataTables;

class DonorController extends BaseController
{
    private $donorRepository;

    /**
     * UserController constructor.
     * @param DonationRepository $donorRepository
     */
    public function __construct(DonationRepository $donorRepository)
    {
        $this->donorRepository = $donorRepository;
    }

    public function index()
    {
        if (\request()->ajax()) {
            $help = $this->donorRepository->getAll();
            return DataTables::of($help)
                ->addColumn('action', function ($help) {
                    $data = $help;
                    $name = 'dashboard.donor';
                    $view = true;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web-site.donor.index');
    }
}
