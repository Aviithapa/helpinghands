<!-- BEGIN SIDEBAR -->
<div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
                <img src="{{$authUser->getImage()}}" alt="" data-src="{{$authUser->getImage()}}" data-src-retina="{{$authUser->getImage()}}" width="69" height="69" />
                <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
                <div class="username"><span class="semi-bold">{{$authUser->name}}</span></div>
                <div class="status">{{$authUser->mainRole()?$authUser->mainRole()->display_name:''}}</div>
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->
        <p class="menu-title sm">BROWSE <span class="pull-right"><a href="javascript:void(0);"><i class="material-icons">refresh</i></a></span></p>
        <ul>
            <li>
                <a href="{{route('dashboard.index')}}">
                    <i class="material-icons">home</i>
                    <span class="title">Dashboard</span>
                    <span class="label label-important bubble-only pull-right "></span>
                </a>
            </li>

            <li class="start ">
                <a href="javascript:void(0)"><i class="material-icons">web</i>
                    <span class="title">Site</span> <span class="selected"></span> <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('dashboard.site-settings.index')}}">Site Setting</a></li>
                </ul>
            </li>

            <li class="start ">
                <a href="javascript:void(0)"><i class="material-icons">web</i>
                    <span class="title">CMS</span> <span class="selected"></span> <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('dashboard.banners.index')}}">Banners Management</a></li>
                    <li><a href="{{route('dashboard.posts.index')}}">Contents Management</a></li>
                    <li><a href="{{route('dashboard.events.index')}}">Events Management</a></li>
                    <li><a href="{{route('dashboard.pages.index')}}">Pages Management</a></li>
                    <li><a href="{{route('dashboard.services.index')}}">Services Management</a></li>
                    <li><a href="{{route('dashboard.testimonials.index')}}">Testimonials Management</a></li>
                    <li><a href="{{route('dashboard.news.index')}}">Blogs Management</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('dashboard.users.index')}}">
                    <i class="fa fa-users"></i>
                    <span class="title">User</span>
                </a>
            </li>
            <li class="start ">
                <a href="javascript:void(0)"><i class="material-icons">rowing</i>
                    <span class="title">Auth Setting</span> <span class="selected"></span> <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('dashboard.roles.index')}}">Role</a></li>
                    <li><a href="{{route('dashboard.permissions.index')}}">Permission</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('dashboard.help.index')}}">
                    <i class="fa fa-hands-helping"></i>
                    <span class="title">Help Request</span>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.donor.index')}}">
                    <i class="fa fa-donate"></i>
                    <span class="title">Donor List</span>
                </a>
            </li>

        </ul>
        <div class="clearfix"></div>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<a href="#" class="scrollup">Scroll</a>
<!-- END SIDEBAR -->
