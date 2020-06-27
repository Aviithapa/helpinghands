<?php


namespace App\Http\Controllers\Admin\WebSite;


use App\Modules\Backend\Website\Help\Repositories\HelpRepository;
use App\Http\Controllers\Admin\BaseController;
use Yajra\DataTables\Facades\DataTables;

class HelpController extends BaseController
{
    private $helpRepository;

    /**
     * UserController constructor.
     * @param HelpRepository $helpRepository
     */
    public function __construct(HelpRepository $helpRepository)
    {
        $this->helpRepository = $helpRepository;
    }

    public function index()
    {
        if (\request()->ajax()) {
            $help = $this->helpRepository->getAll();
            return DataTables::of($help)
                ->addColumn('action', function ($help) {
                    $data = $help;
                    $name = 'dashboard.help';
                    $view = true;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web-site.help.index');
    }


}
