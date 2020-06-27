@extends('web.layouts.app')
@section('content')
    <!-- bradcam_area  -->
    @include('web.layouts.bradcam')
    <!-- /bradcam_area  -->

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">{{$blog->title}}</span>
                    <h2 class="mb-4">{{$blog->excerpt}}</h2>
                    <p>{{$blog->content}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4 ftco-animate">

                    <div class="blog-entry">

                        <a href="{{url(('single-blog/'.$blog->slug))}}" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url({{$blog->getNewsImage()}});">
{{--                            <div class="meta-date text-center p-2">--}}
{{--                                <span class="day">18</span>--}}
{{--                                <span class="mos">September</span>--}}
{{--                                <span class="yr">2019</span>--}}
{{--                            </div>--}}
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








    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@endsection
