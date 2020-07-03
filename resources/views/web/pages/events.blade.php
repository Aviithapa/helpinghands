@extends('web.layouts.app')
@section('content')
    <!-- bradcam_area  -->
    @include('web.layouts.bradcam')
    <!-- /bradcam_area  -->
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light mt-10">
        <div class="container" style="margin-top: 100px;">
            <div class="row no-gutters">
  @foreach($event as $event)
                    @if($event->status=='active')
                <div class="col-md-4 d-flex">
                    <div class="blog-entry ftco-animate">
                        <a href="{{url('SingleEvents/'.$event->slug)}}" class="img" style="background-image: url({{$event->getImage()}});"></a>
                        <div class="text p-4">
                            <h3 class="mb-2"><a href="{{url('SingleEvents/'.$event->slug)}}">{{$event->title}}</a></h3>
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
        </div>
    </section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@endsection
