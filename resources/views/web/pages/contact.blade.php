@extends('web.layouts.app')
@section('content')

    <!-- bradcam_area  -->
    @include('web.layouts.bradcam')
    <!-- /bradcam_area  -->
    <section class="ftco-section contact-section ftco-degree-bg bg-light text-color-dark">
        <div class="container bg-light">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d222219.62321137477!2d80.41922548167841!3d29.51106508744361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a143c61d78dd33%3A0xa218173b0b840579!2sBaitadi!5e0!3m2!1sen!2snp!4v1589255759080!5m2!1sen!2snp" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

            <div class="row block-9 bg-light">
                <div class="col-md-6 pr-md-5">
                    <form action="#">
                        <div class="form-group col-md-12">
                            <label for="inputName">Name</label>
                            <input style="color:black;" type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6" >
                    <div class="row d-flex mb-5 contact-info">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Contact Information</h2>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="ct-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <p><span>Address:</span> TripuraSundari Baitadi</p>
                        </div>
                        <div class="col-md-12">
                            <p><span>Phone:</span> <a href="tel://9867739191">+ 9867739191</a></p>
                        </div>
                        <div class="col-md-12">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">abhishekthapa115@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit col-md-4">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@endsection
