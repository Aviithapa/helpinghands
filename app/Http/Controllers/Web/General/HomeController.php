<?php

namespace App\Http\Controllers\Web\General;

use App\Http\Controllers\Web\BaseController;
use App\Models\Website\GetTouch;
use App\Models\Website\StoreRequestQuote;
use App\Modules\Backend\Authentication\Role\Repositories\RoleRepository;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Countries\Country\Repositories\CountryRepository;
use App\Modules\Backend\Disciplines\Discipline\Repositories\DisciplineRepository;
use App\Modules\Backend\Levels\Level\Repositories\LevelRepository;
use App\Modules\Backend\Schools\School\Repositories\SchoolRepository;
use App\Modules\Backend\Schools\SchoolProgram\Repositories\SchoolProgramRepository;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Frontend\Website\Slider\Repositories\SliderRepository;
use App\Save;
use http\Exception\UnexpectedValueException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use PhpParser\Node\Expr\PostDec;
use Auth;
use Session;
use Models;


class HomeController extends BaseController
{
    private $sliderRepository, $view_data, $postRepository, $disciplineRepository, $level, $countryRepository, $schoolRepository;
    private $schoolProgramRepository;
    private $roleRepository;
    private $userRepository;
    private $request;

    public function __construct(SliderRepository $sliderRepository,
                                PostRepository $postRepository,
                                RoleRepository $roleRepository,
                                UserRepository $userRepository,
                                Request $request)
    {
        $this->sliderRepository = $sliderRepository;
        $this->postRepository = $postRepository;
        $this->roleRepository = $roleRepository;
        $this->userRepository = $userRepository;
        $this->request = $request;


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
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'web/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'index':
                    $this->view_data['banners'] = $this->postRepository->findBy('type', 'homepage_banner', '=',false,3);
                    $this->view_data['services'] = $this->postRepository->findBy('type', 'services', '=',false,3);
                    $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=',false,4);
                    break;
                case 'about':
                    $this->view_data['testimonial'] = $this->postRepository->findBy('type', 'testimonial', '=');
                    break;
            }
                    return view('web.pages.' . $slug, $this->view_data);
        }
        // 3. No page exist (404)
        return view('web.pages.404', $this->view_data);

    }






}
