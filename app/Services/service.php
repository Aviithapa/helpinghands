<?php

namespace App\Services;

use App\Modules\Backend\Authentication\Role\Repositories\RoleRepository;
use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Frontend\Website\Slider\Repositories\SliderRepository;
use Illuminate\Http\Request;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;

class service{
    private $postRepository;
    private $request;
    private $homeController;

    public function __construct( PostRepository $postRepository,
                                Request $request,
                                HomeController $homeController)
    {

        $this->postRepository = $postRepository;
        $this->request = $request;
        $this->homeController= $homeController;

        parent::__construct();
    }

public function services($slug = null){
     $slug = $slug ? $slug : 'index';
            $this->view_data['test'] = '';
            $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=');
            $this->view_data['pageContent'] = $this->postRepository->findBySlug($slug, false);
            $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'web/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
            if (file_exists($file_path)) {
                switch ($slug) {
                    case 'index':
                        $this->view_data['banners'] = $this->postRepository->findBy('type', 'homepage_banner', '=');
                        $this->view_data['certified_teacher'] = $this->postRepository->findById(2);
                        $this->view_data['special_education'] = $this->postRepository->findById(3);
                        $this->view_data['book_library'] = $this->postRepository->findById(4);
                        $this->view_data['certification'] = $this->postRepository->findById(5);
                        $this->view_data['what_we_offer'] = $this->postRepository->findById(6);
                        $this->view_data['welcome_kiddos'] = $this->postRepository->findById(7);
                        $this->view_data['homepage_second_banner_section'] = $this->postRepository->findById(8);
                        $this->view_data['homepage_section_4'] = $this->postRepository->findById(9);
                        $this->view_data['teachers'] = $this->postRepository->findBy('type', 'teacher', '=');
                        $this->view_data['courses_section_text'] = $this->postRepository->findById(14);
                        $this->view_data['courses'] = $this->postRepository->findBy('type', 'courses', '=', false, 4);
                        $this->view_data['services'] = $this->postRepository->findBy('type', 'services', '=', false, 6);
                        $this->view_data['homepage_events'] = $this->postRepository->findById(50);

                        $this->view_data['section_6'] = $this->postRepository->findById(19);
                        $this->view_data['section_7'] = $this->postRepository->findById(20);
                        $this->view_data['testimonials'] = $this->postRepository->findBy('type', 'testimonial', '=');
                        $this->view_data['homepage_section_8_request_quote'] = $this->postRepository->findById(24);
                        $this->view_data['homepage_our_blog'] = $this->postRepository->findById(51);
                        $this->view_data['packages'] = $this->postRepository->findBy('type', 'packages', '=', false, 4);
                        $this->view_data['blogs'] = $this->postRepository->findBy('type', 'news', '=', false, 3);
                        $this->view_data['galleries'] = $this->sliderRepository->findBy('status', 'published');
                        break;
                    case 'teachers':
                        $this->view_data['teachers'] = $this->postRepository->findBy('type', 'teacher', '=');
                        break;
                    case 'pricing':
                        $this->view_data['packages'] = $this->postRepository->findBy('type', 'packages', '=');
                        break;
                    case 'courses':
                        $this->view_data['courses'] = $this->postRepository->findBy('type', 'courses', '=');
                        break;
                    case 'blog':
                        break;
                    case 'about':
                        $this->view_data['what_we_offer'] = $this->postRepository->findById(6);
                        $this->view_data['welcome_kiddos'] = $this->postRepository->findById(7);
                        $this->view_data['homepage_second_banner_section'] = $this->postRepository->findById(8);
                        $this->view_data['testimonials'] = $this->postRepository->findBy('type', 'testimonial', '=');
                        $this->view_data['galleries'] = $this->sliderRepository->findBy('status', 'published');
                        $this->view_data['section_6'] = $this->postRepository->findById(19);
                        $this->view_data['homepage_section_8_request_quote'] = $this->postRepository->findById(24);
                        $this->view_data['services'] = $this->postRepository->findBy('type', 'services', '=', false, 6);
                        $this->view_data['section_7'] = $this->postRepository->findById(20);
                        break;

                    default:
                        break;
                }
                return view('web.pages.' . $slug, $this->view_data);
            }
            return view('web.pages.404', $this->view_data);
         }
}