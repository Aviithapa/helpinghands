<?php

namespace App\Http\Controllers\Admin\WebSite;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Website\Post;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use App\Modules\Backend\Website\Event\Requests\CreateEventRequest;
use App\Modules\Backend\Website\Event\Requests\UpdateEventRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Logging\Log;
use App;


class EventController extends BaseController
{
    private $eventRepository, $log;
    public function __construct(Log $log, EventRepository $eventRepository )
    {
        $this->eventRepository = $eventRepository;
        $this->log = $log;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        switch ($role)
        {
            case 'administrator':
                $events = $this->eventRepository->findByDataTable('type','events','=');
                break;
            case 'eventorganizer':
                $events = $this->eventRepository->findByDataTable('user_id',Auth::user()['id'],'=');
                break;

        }
        if(\request()->ajax()) {
            return DataTables::of($events)
                ->editColumn('action', function ($events) {
                    $data = $events;
                    $name = 'dashboard.events';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'))->render();
                })
                ->editColumn('events_pic', function ($events) {
                    $url=asset($events->getImage());
                    return '<img src='.$url.' border="0" width="40"  />';
////                        return '<img src="'.asset($events->getImage()).'" border="0" width="40" class="img-rounded" align="center" />';
                })
                ->editColumn('id', 'ID: {{$id}}')
//                    ->rawColumns(['banner_image'])
                ->rawColumns(['events_pic', 'action'])
                ->make(true);

        }
        return $this->view('web-site.events.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role=Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        return $this->view('web-site.events.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $createPostRequest)
    {
        $data = $createPostRequest->all();
        $data['user_id']=Auth::user()['id'];
        $data['image']=$data['events_pic'];

        try {
            $events = $this->eventRepository->create($data);
            if($events == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Events created successfully');
            return redirect()->route('dashboard.events.index');
        }
        catch (\Exception $e) {
            $this->log->error('Events create : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role=Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        $events = $this->eventRepository->findById($id);
        return $this->view('web-site.events.edit', compact('events','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEventRequest $updatePostRequest
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $updatePostRequest, $id)
    {
        $this->authorize('update', $this->eventRepository->getModel());
        $data = $updatePostRequest->all();
        try {
            $data['image']=$data['events_pic'];
            $events = $this->eventRepository->update($data, $id);

            if($events == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Events updated successfully');
            return redirect()->route('dashboard.events.index');
        }
        catch (\Exception $e) {
            $this->log->error('Events update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
        }
    }


    public function approve(Request $request, $id)
    {
        $this->authorize('update',$this->eventRepository->getModel());
        $data = $request->only('status');
        try {

            $event = $this->eventRepository->update($data, $id);
            if($event == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Events have been added Sucessfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            $this->log->error('User update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', $this->eventRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->eventRepository->hardDelete($id);
            else
                $this->eventRepository->delete($id);
            session()->flash('success', 'Events deleted successfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            $this->log->error('Events delete : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
