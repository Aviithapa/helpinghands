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
            <div class="heading-section text-center" >
                <h1>From Our Events Post</h1>
            </div>
            <div class="row no-gutters">
                @foreach($Event as $event)
                    @if($event->status=='active')
                <div class="col-md-3 d-flex">
                    <div class="blog-entry ftco-animate">
                        <a href="{{url('SingleEvents/'.$event->slug)}}" class="img" style="background-image: url({{$event->getImage()}});"></a>
                        <div class="text p-4">
                            <h3 class="mb-2"><a href="{{url('SingleEvents/'.$event->slug)}}"> {{str_limit($event['title'],50)}}    </a></h3>
                            <div class="meta-wrap">
                                <p class="meta">
                                    <span><i class="icon-calendar mr-2"></i>{{$event->start_date}}</span>
                                </p>
                            </div>
                                           <p class="mb-4">{{str_limit($event["content"],100)}}</p>
                            <p><a href="{{url('SingleEvents/'.$event->slug)}}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                @endif
                    @endforeach
            </div>
            <div class="button" style="margin-top: 20px; text-align: center;">
                <a href="{{url('events')}}"> <input type="Submit" value="View All Events" class="btn btn-primary py-2 px-6"></a>
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
                        <h3 class="mb-4">Our Motive</h3>
                        <p>If you can you must have.</p>
                        <a href="#" class="btn-custom">Make everyone Laugh</a>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="consultation consul w-100 px-4 px-md-5">
                        <div class="text-center">
                            <h3 class="mb-4">Apply For Help</h3>
                        </div>
                        <form action="{{url('help')}}" class="appointment-form" method="post">
                            {{csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email"  required>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Contact Number" name="phone" required>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <select class="form-control" name="problem" required>
                                                <option style="color: black" value="#">Problem</option>
                                                <option style="color: black" value="MentalStress">Mental Stress</option>
                                                <option style="color: black" value="EconomicalProblem">Economical Problem</option>
                                                <option style="color: black" value="FamilyProblem">Family Problem</option>
                                                <option style="color: black" value="Depression">Depression</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <input type="text" class="form-control" placeholder="Message" name="message" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="submit" value="Help" class="btn btn-secondary py-2 px-4">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="consultation w-100 text-center px-4 px-md-5">
                        <h3 class="mb-4">Find A Mentor</h3>
                        <p>We are always here to help the people who really wants the Help.</p>
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
                    <span class="subheading">{{$blog->title}}</span>
                    <h2 class="mb-4">{{$blog->excerpt}}</h2>
                    <p>{{$blog->content}}</p>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-3 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{url(('single-blog/'.$blog->slug))}}" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url({{$blog->getNewsImage()}});">
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
            <div class="button" style="margin-top: 20px; text-align: center;">
                <a href="{{url('blog')}}"> <input type="Submit" value="View All Blogs" class="btn btn-primary py-2 px-6"></a>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Sucessful</h4>
                </div>
                <div class="modal-body">
                    <p>Your request have been submited we will contact you soon</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!---End Blog Section--->



@endsection

@push('scripts')
    @if(session()->flash('success',"We will Contact you soon"))
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
@endif
@endpush
