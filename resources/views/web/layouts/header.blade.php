
<!-- header-start -->

<header>
    <div class="py-md-5 py-4 border-bottom">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
                    <a class="navbar-brand" href="{{url('/')}}">{{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}}</a>
                </div>
                <div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
                    <div class="icon d-flex justify-content-center align-items-center order-md-last">
                        <span class="icon-map"></span>
                    </div>
                    <div class="pr-md-4 pl-md-0 pl-3 text">
                        <p class="con"><span>Free Call</span> <span>{{getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): ''}}</span></p>
                        <p class="con">{{getSiteSetting('location') != null? getSiteSetting('location'): ''}}</p>
                    </div>
                </div>
                <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="fas fa-sign-in-alt"></span></div>
                    <div class="text pl-3 pl-md-3">
                        <p class="hr"><a href="{{url('login')}}"><span>login</span></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div  class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{url('events')}}" class="nav-link">Events</a></li>
                    <li class="nav-item"><a href="{{url('blog')}}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
{{--                    <li class="nav-item"><a href="{{url('SingleEvents')}}" class="nav-link">Single Events</a></li>--}}
{{--                    <li class="nav-item"><a href="{{url('single-blog')}}" class="nav-link">Single Blog</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- header-end -->
@push('scripts')
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("ftco-nav");
        var btns = header.getElementsByClassName("nav");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }
                this.className += " active";
            });
        }
    </script>
    @endpush
