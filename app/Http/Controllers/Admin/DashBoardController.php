<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends BaseController
{
    private $userRepository;
    private $eventRepository;

    public function __construct(UserRepository $userRepository,EventRepository $eventRepository)
    {
        $this->userRepository = $userRepository;
        $this->eventRepository=$eventRepository;
        parent::__construct();
    }

    public function index()
    {
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        switch ($role) {
            case 'administrator':
                $event_created=$this->eventRepository->getAllInActive();
                return $this->view('dashboard.administrator', compact('event_created'));
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
