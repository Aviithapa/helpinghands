<?php

namespace App\Http\Controllers\Admin\WebSite;


use App\Http\Controllers\Admin\BaseController;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use Illuminate\Contracts\Logging\Log;
use App\Modules\Backend\Website\Post\Requests\CreatePostRequest;
use App\Modules\Backend\Website\Post\Requests\UpdatePostRequest;
use Yajra\DataTables\Facades\DataTables;

class ServicesController extends BaseController
{
    private $postRepository, $log;
    public function __construct(Log $log, PostRepository $postRepository )
    {
        $this->postRepository = $postRepository;
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
        $this->authorize('read', $this->postRepository->getModel());
        if(\request()->ajax()) {
            $services = $this->postRepository->allServiceType();
            return DataTables::of($services)
                ->editColumn('action', function ($services) {
                    $data = $services;
                    $name = 'dashboard.services';
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'));
                })

                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);

        }
        return $this->view('web-site.services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $this->postRepository->getModel());
        return $this->view('web-site.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $createPostRequest)
    {
        $this->authorize('create', $this->postRepository->getModel());
        $data = $createPostRequest->all();
        try {
            $service = $this->postRepository->create($data);
            if($service == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Service created successfully');
            return redirect()->route('dashboard.services.index');
        }
        catch (\Exception $e) {
            $this->log->error('Services create : '.$e->getMessage());
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
        $this->authorize('update', $this->postRepository->getModel());
        $service = $this->postRepository->findById($id);
        return $this->view('web-site.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $updatePostRequest, $id)
    {
        $this->authorize('update', $this->postRepository->getModel());
        $data = $updatePostRequest->all();
        try {
            $service = $this->postRepository->update($data, $id);
            if($service == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Service updated successfully');
            return redirect()->route('dashboard.services.index');
        }
        catch (\Exception $e) {
            $this->log->error('Service update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back()->withInput();
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
        $this->authorize('delete', $this->postRepository->getModel());
        try {
            if(isset($request->hard_delete))
                $this->postRepository->hardDelete($id);
            else
                $this->postRepository->delete($id);
            session()->flash('success', 'Service deleted successfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            $this->log->error('Service delete : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
