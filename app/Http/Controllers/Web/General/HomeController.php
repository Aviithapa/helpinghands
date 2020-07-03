<?php

namespace App\Http\Controllers\Web\General;

use App\Http\Controllers\Web\BaseController;
use App\Models\Website\Donation;
use App\Models\Website\GetTouch;
use App\Models\Website\Help;
use App\Models\Website\StoreRequestQuote;
use App\Modules\Backend\Authentication\Role\Repositories\RoleRepository;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Countries\Country\Repositories\CountryRepository;
use App\Modules\Backend\Disciplines\Discipline\Repositories\DisciplineRepository;
use App\Modules\Backend\Levels\Level\Repositories\LevelRepository;
use App\Modules\Backend\Schools\School\Repositories\SchoolRepository;
use App\Modules\Backend\Schools\SchoolProgram\Repositories\SchoolProgramRepository;
use App\Modules\Backend\Website\Donation\Repositories\DonationRepository;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Frontend\Website\Slider\Repositories\SliderRepository;
use App\Save;
use http\Exception\UnexpectedValueException;
use http\Message\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use PhpParser\Node\Expr\PostDec;
use Auth;
use Session;
use Models;


class HomeController extends BaseController
{
    private $sliderRepository, $view_data, $postRepository,$eventRepository,$donationRepository;
    private $roleRepository;
    private $userRepository;
    private $request;

    public function __construct(SliderRepository $sliderRepository,
                                PostRepository $postRepository,
                                RoleRepository $roleRepository,
                                UserRepository $userRepository,
                                Request $request,EventRepository $eventRepository,DonationRepository $donationRepository)
    {
        $this->sliderRepository = $sliderRepository;
        $this->postRepository = $postRepository;
        $this->roleRepository = $roleRepository;
        $this->userRepository = $userRepository;
        $this->request = $request;
        $this->eventRepository=$eventRepository;
        $this->donationRepository=$donationRepository;

        parent::__construct();
    }

    public function index()
    {
        return view('web.pages.index');
    }

    public function resetPasswordWithCode($code)
    {
        $isUser = false;
        if ($code === '' && $code === null) {
            $isUser = false;
        }
        $user = $this->userRepository->findByFirst('password_change_code', $code, '=');
        if ($user) {
            $isUser = true;
        }

        return view('auth.changePassword', compact('user', 'isUser', 'code'));

    }

    public function resetPasswordStore()
    {
        try {
            $user = $this->userRepository->findByFirst('password_change_code', $this->request->code, '=');
            $data['password'] = bcrypt($this->request->password);
            $userData = $this->userRepository->update($data, $user->id);
//            $this->sendResetLinkEmail($request);
            session()->flash('success', 'New password has been save successfully.Please login with your credentials');
            return redirect()->route('login');

        } catch (\Exception $e) {
//            $this->log->error('User update : '.$e->getMessage());
            session()->flash('danger', 'Oops! Something went wrong.');
            return redirect()->back();
        }


    }


    public function slug($slug = null, Request $request)
    {
        $slug = $slug ? $slug : 'index';
        $this->view_data['pageContent'] = $this->postRepository->findBySlug($slug, false);
        $this->view_data['Event'] = $this->eventRepository->findBy('type', 'events', '=','false','6');
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'web/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':
                    $this->view_data['banners'] = $this->postRepository->findBy('type', 'homepage_banner', '=',false,3);
                    $this->view_data['services'] = $this->postRepository->findBy('type', 'services', '=',false,3);
                    $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=',false,4);
                    $this->view_data['blog']=$this->postRepository->findById(5);
                    break;
                case 'about':
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    $this->view_data['testimonials'] = $this->postRepository->findById(4);

                    break;
                case 'events':
                    $this->view_data['event']=$this->eventRepository->findBy('type', 'events', '=');
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');

                    break;
                case 'blog':
                    $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=',false,4);
                    $this->view_data['blog']=$this->postRepository->findById(5);
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    break;
                case 'contact':
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    break;
                case 'SingleEvents':
                    $this->view_data['company_info'] = $this->postRepository->findById(2);
                    $this->view_data['testimonials'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    $this->view_data['services'] = $this->postRepository->findBy('type', 'services', '=', false, 6);
                    $this->view_data['Subscribe'] = $this->postRepository->findById(9);
                    break;
                case 'donation':
                    $this->view_data['Subscribe'] = $this->postRepository->findById(9);

                    break;
            }
                    return view('web.pages.' . $slug, $this->view_data);
        }
        // 3. No page exist (404)
        return view('web.pages.404', $this->view_data);

    }

     public function SingleEvents($slug = null, Request $request){
        $slug = $slug ? $slug : 'abcd';
        $this->view_data['pageContent'] = $this->postRepository->findBySlug('/SingleEvents/'.$slug, false);
        $this->view_data['Event'] = $this->eventRepository->findBy('slug', $slug, '=', false, 6);
        $this->view_data['Events'] = $this->eventRepository->findBy('type', 'events', '=', false, 3);


        return view('web.pages.SingleEvents' , $this->view_data);

    }
    public function singleBlog($slug = null, Request $request){

        $slug = $slug ? $slug : 'hello';
        $this->view_data['pageContent'] = $this->postRepository->findBySlug('/single-blog/'.$slug, false);
        $this->view_data['blog'] = $this->postRepository->findBy('slug', $slug, '=', false, 6);
        $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=', false, 3);


        return view('web.pages.single-blog' , $this->view_data);

    }

    public function Help(Request $request){
        try {
            $help = new Help();
            $help->name = $request->name;
            $help->phone = $request->phone;
            $help->email = $request->email;
            $help->problem = $request->problem;
            $help->message = $request->message;
            $help->save();
            session()->flash('success',"We will Contact you soon");
            return  redirect('/');


        }catch (\UnexpectedValueException $e){

        }
    }
    public function Donation(Request $request){
        try {
            $donation=$request->all();
            $this->donationRepository->create($donation);
            return view('web.pages.success');


        }catch (\UnexpectedValueException $e){

        }
    }
}
