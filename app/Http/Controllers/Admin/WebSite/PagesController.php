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

class PagesController extends BaseController
{
    private $postRepository, $log;
    private $viewData;
    private $commonRoute='dashboard.pages';
    private $commonView='web-site.page.';
    private $commonMessage='Page';
    private $type='pages';
    public function __construct(Log $log, PostRepository $postRepository )
    {
        $this->postRepository = $postRepository;
        $this->log = $log;
        $this->viewData['commonRoute']=$this->commonRoute;
        $this->viewData['commonView']=$this->commonView;
        $this->viewData['commonMessage']=$this->commonMessage;
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
            $partners = $this->postRepository->findBy('type',$this->type,'=',false);
            return DataTables::of($partners)
                ->editColumn('action', function ($partner) {
                    $data = $partner;
                    $name = $this->commonRoute;
                    $view = false;
                    return $this->view('partials.common.action', compact('data', 'name', 'view'));
                })
                ->editColumn('partner_pic', function ($partner) {
                    $url=asset($partner->getPartnerImage());
                    return '<img src='.$url.' border="0" width="40"  />';
//                        return '<img src="'.asset($partner->getImage()).'" border="0" width="40" class="img-rounded" align="center" />';
                })
                ->editColumn('id', 'ID: {{$id}}')
//                    ->rawColumns(['partner_image'])
                ->rawColumns(['partner_pic', 'action'])
                ->make(true);

        }
        return $this->view($this->commonView.'index',$this->viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', $this->postRepository->getModel());
        return $this->view($this->commonView.'create',$this->viewData);
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
        $data['image']=$data['post_pic'];
        try {
            $partner = $this->postRepository->create($data);
            if($partner == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', $this->commonMessage.' created successfully');
            return redirect()->route($this->commonRoute.'.index');
        }
        catch (\Exception $e) {
            $this->log->error('Teacher create : '.$e->getMessage());
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
        $partner = $this->postRepository->findById($id);
        return $this->view($this->commonView.   '.edit',$this->viewData, compact('partner'));
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
        $data['image']=$data['post_pic'];
        try {
            $banner = $this->postRepository->update($data, $id);
            if($banner == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', $this->commonMessage.' updated successfully');
            return redirect()->route($this->commonRoute.'.index');
        }
        catch (\Exception $e) {
            $this->log->error('Teacher update : '.$e->getMessage());
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
            session()->flash('success', $this->commonView.' deleted successfully');
            return redirect()->back();
        }
        catch (\Exception $e) {
            $this->log->error('Teacher delete : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }
    }
}
