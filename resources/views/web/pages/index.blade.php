@extends('web.layouts.app')

@section('content')

    <section class="home-slider owl-carousel">
        @foreach($banners as $banner)
        <div class="slider-item" style="background-image:url({{ $banner->getImage() }})" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="col-md-6 text ftco-animate">
                        <h1 class="mb-4">Helping Your <span>Stay Happy One</span></h1>
                        <h3 class="subheading">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
                        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>


    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="#" alt="">
                        </div>
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->content}}</p>
                        <a href="#" class="boxed-btn3-text">Learn More</a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    <!--/ service_area  -->


    <!--Events Section-->
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light mt-10">
        <div class="container-fluid" style="padding:50px;">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex">
                    <div class="blog-entry ftco-animate">
                        <a href="single.html" class="img" style="background-image: url(images/image_4.jpg);"></a>
                        <div class="text p-4">
                            <h3 class="mb-2"><a href="single.html">A Loving Heart is the Truest Wisdom</a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>Sept. 10, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">A small river named Duden flows by their place and supplies</p>
                            <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry ftco-animate">
                        <a href="single.html" class="img" style="background-image: url(images/image_7.jpg);"></a>
                        <div class="text p-4">
                            <h3 class="mb-2"><a href="single.html">A Loving Heart is the Truest Wisdom</a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>Sept. 10, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">A small river named Duden flows by their place and supplies</p>
                            <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex">
                    <div class="blog-entry ftco-animate">
                        <a href="single.html" class="img" style="background-image: url(images/image_8.jpg);"></a>
                        <div class="text p-4">
                            <h3 class="mb-2"><a href="single.html">A Loving Heart is the Truest Wisdom</a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>Sept. 10, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">A small river named Duden flows by their place and supplies</p>
                            <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry ftco-animate">
                        <a href="single.html" class="img" style="background-image: url(images/image_9.jpg);"></a>
                        <div class="text p-4">
                            <h3 class="mb-2"><a href="single.html">A Loving Heart is the Truest Wisdom</a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>Sept. 10, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">A small river named Duden flows by their place and supplies</p>
                            <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="blog-entry ftco-animate">
                        <a href="single.html" class="img" style="background-image: url(images/image_10.jpg);"></a>
                        <div class="text p-4">
                            <h3 class="mb-2"><a href="single.html">A Loving Heart is the Truest Wisdom</a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>Sept. 10, 2019</span>
                                    <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                    <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                                </p>
                            </div>
                            <p class="mb-4">A small river named Duden flows by their place and supplies</p>
                            <p><a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Event Section-->

    <!-- Appointment Section-->
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-md-0" style="padding:50px;">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="consultation w-100 text-center px-4 px-md-5">
                        <h3 class="mb-4">Dental Services</h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <a href="#" class="btn-custom">See Services</a>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="consultation consul w-100 px-4 px-md-5">
                        <div class="text-center">
                            <h3 class="mb-4">Free Consultation</h3>
                        </div>
                        <form action="#" class="appointment-form">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <div class="icon"><span class="ion-md-calendar"></span></div>
                                            <input type="text" class="form-control appointment_date" placeholder="Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <div class="icon"><span class="ion-ios-clock"></span></div>
                                            <input type="text" class="form-control appointment_time" placeholder="Time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="submit" value="Appointment" class="btn btn-secondary py-2 px-4">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="consultation w-100 text-center px-4 px-md-5">
                        <h3 class="mb-4">Find A Mentor</h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <a href="#" class="btn-custom">Meet our Members</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Appointment Section-->


    <!--Blog Section-->
    <section class="ftco-section bg-light">
        <div class="container-fluid" style="padding:50px;">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">Recent Blogs</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-3 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url({{$blog->getNewsImage()}});">
                        </a>
                        <div class="text bg-white p-4" style="background-color: #46b7de;">
                            <h3 class="heading"><a href="#">{{$blog->excerpt}}</a></h3>
                            <p>{{$blog->content}}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!---End Blog Section--->



@endsection

@push('scripts')
    <script>

    </script>

@endpush
