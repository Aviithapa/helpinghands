<?php

namespace App\Http\Controllers\Admin\WebSite;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Website\Post;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Backend\Website\Post\Requests\CreatePostRequest;
use App\Modules\Backend\Website\Post\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Logging\Log;

class BannerController extends BaseController
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
                $banners = $this->postRepository->findByDataTable('type','homepage_banner','=');
                return DataTables::of($banners)
                    ->editColumn('action', function ($banner) {
                        $data = $banner;
                        $name = 'dashboard.banners';
                        $view = false;
                        return $this->view('partials.common.action', compact('data', 'name', 'view'));
                    })
                    ->editColumn('banner_image', function ($banner) {
                        $url=asset($banner->getImage());
                        return '<img src='.$url.' border="0" width="40"  />';
//                        return '<img src="'.asset($banner->getImage()).'" border="0" width="40" class="img-rounded" align="center" />';
                        })
                    ->editColumn('id', 'ID: {{$id}}')
//                    ->rawColumns(['banner_image'])
                    ->rawColumns(['banner_image', 'action'])
                    ->make(true);

            }
        return $this->view('web-site.banner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $this->postRepository->getModel());
        return $this->view('web-site.banner.create');
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
        $data['image']=$data['banner'];
        try {
            $banner = $this->postRepository->create($data);
            if($banner == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Banner created successfully');
            return redirect()->route('dashboard.banners.index');
        }
        catch (\Exception $e) {
            $this->log->error('Banner create : '.$e->getMessage());
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
        $banner = $this->postRepository->findById($id);
        return $this->view('web-site.banner.edit', compact('banner'));
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
        $data['image']=$data['banner'];
        try {
            $banner = $this->postRepository->update($data, $id);
            if($banner == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Banner updated successfully');
            return redirect()->route('dashboard.banners.index');
        }
        catch (\Exception $e) {
            $this->log->error('Banner update : '.$e->getMessage());
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
            session()->flash('success', 'Banner deleted successfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            $this->log->error('Banner delete : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
