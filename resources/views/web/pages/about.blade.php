@extends('web.layouts.app')
@section('content')
    <!-- bradcam_area  -->
    @include('web.layouts.bradcam')
    <!-- /bradcam_area  -->

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/DSC_9881.jpg);">
                </div>
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section mb-5">
                        <div class="pl-md-5 ml-md-5 pt-md-5">
                            <span class="subheading mb-2">Welcome to Helping Hands</span>
                            <h2 class="mb-2" style="font-size: 32px;">Event organization specially focus on the donation and help</h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5 justify">
                        <p>A this is this what i am going to describe on how the approach is going on the way to the dehli of the small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country whic our country , in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <div class="founder d-flex align-items-center mt-5">
                            <div class="img" style="background-image: url(images/Abhishek.jpg);"></div>
                            <div class="text pl-3">
                                <h3 class="mb-0">Abhishek Thapa</h3>
                                <span class="position">CEO, Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Want to help us</h2>
                    <p class="mb-0">Your helping hands will protects someones life andgives him a new birth.</p>
                    <p></p>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0"><a href="{{url('donation/0')}}" class="btn btn-secondary px-4 py-3">Donate</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">{{$testimonials->title}}</span>
                    <h2 class="mb-4">{{$testimonials->excerpt}}</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach($testimonial as $testimonial)
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url({{$testimonial->getTestimonialImage()}})">
                                </div>
                                <div class="text pl-4 bg-light">
                  	                <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                    <p>{{$testimonial->content}}</p>
                                    <p class="name">{{$testimonial->title}}</p>
                                    <span class="position">{{$testimonial->excerpt}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@endsection
