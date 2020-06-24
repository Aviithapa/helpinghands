<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends BaseController
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        parent::__construct();
    }

    public function index()
    {
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        switch ($role) {
            case 'administrator':
                $inactive_users = $this->userRepository->getAllInActive();
                return $this->view('dashboard.administrator', compact('inactive_users'));
                break;
            case 'eventorganizer':
                return $this->view('dashboard.default');
                break;
            case 'travel_agent':
                return $this->view('dashboard.travel-agent');
                break;
            case 'b2b_agent':
                return $this->view('dashboard.b2b-agent');
                break;
            case 'api_agent':
                return $this->view('dashboard.api-agent');
                break;
            case 'travel_guide':
                return $this->view('dashboard.travel-guide');
                break;
            default:
                return $this->view('dashboard.default');

        }
    }

}
