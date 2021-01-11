<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="index.html"><img src="{{asset('admin/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class="zmdi zmdi-menu"></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class="zmdi zmdi-menu"></i>
            </div>
        </div>
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="fa fa-reorder"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">
            <!-- Left Side Nav -->
            <li>{{"Welcome " . \Illuminate\Support\Facades\Auth::user()->name}}</li>
            {{--<li class="hide-phone app-search">
                <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <button type="submit" class="mr-0"><i class="fa fa-search"></i></button></form>
            </li>--}}

           {{-- <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>

                <div class="dropdown-menu dropdown-menu-right">
                    <!-- Top Message Area -->
                    <div class="top-message-area">
                        <!-- Heading -->
                        <div class="top-message-heading">
                            <div class="heading-title">
                                <h6>Messages</h6>
                            </div>
                            <span>07 New</span>
                        </div>
                        <div class="message-box" id="messageBox">
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/10.png')}}" alt="">
                                <span class="message-text">
                                    <span>Jhon Lina</span>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, voluptas!</span>
                                </span>
                            </a>
                            <span class="message-heading">New Messages</span>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/11.png')}}" alt="">
                                <span class="message-text">
                                    <span>Google Ads: You'll get a refund soon</span>
                                    <span>27 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/7.png')}}" alt="">
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/8.png')}}" alt="">
                                <span class="message-text">
                                    <span>The Complete JavaScript Handbook</span>
                                    <span>1 hour ago</span>
                                </span>
                            </a>
                            <span class="message-heading">Hot Messages</span>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/9.png')}}" alt="">
                                <span class="message-text">
                                    <span>New comment: ecaps Template</span>
                                    <span>2 days ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/10.png')}}" alt="">
                                <span class="message-text">
                                    <span>6-hour video course on Angular</span>
                                    <span>3 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/11.png')}}" alt="">
                                <span class="message-text">
                                    <span>Google Ads: You'll get a refund soon</span>
                                    <span>27 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/12.png')}}" alt="">
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>--}}

           {{-- <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="active-status"></span></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- Top Notifications Area -->
                    <div class="top-notifications-area">
                        <!-- Heading -->
                        <div class="notifications-heading">
                            <div class="heading-title">
                                <h6>Notifications</h6>
                            </div>
                        </div>

                        <div class="notifications-box" id="notificationsBox">
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/1.png')}}" alt="">
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/2.png')}}" alt="">
                                <span class="message-text">
                                    <span>Andrew Done Project</span>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, quam.</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/3.png')}}" alt="">
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/4.png')}}" alt="">
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/5.png')}}" alt="">
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/6.png')}}" alt="">
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{asset('admin/img/member-img/7.png')}}" alt="">
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>--}}

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth()->user()->userProfile->avatar != null)
                        <img class="rounded-circle" src="{{asset(Auth()->user()->userProfile->avatar)}}"  style="width: 50px ;height: 35px" alt="profile image">
                    @else
                        <img class="rounded-circle" src="{{asset('user/assets/images/avatar.png')}}"  alt="profile image">
                    @endif

                </button>
                <div class="dropdown-menu header-profile dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <a href="{{route('app.home')}}" target="_blank" class="dropdown-item"><i class="zmdi zmdi-globe profile-icon" aria-hidden="true"></i> Visit Site</a>
                        <a href="{{route('admin-profiles.create')}}" class="dropdown-item"><i class="zmdi zmdi-account profile-icon" aria-hidden="true"></i> My profile</a>
                        
                        <a href="{{route('admin-change-password.edit')}}" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon" aria-hidden="true"></i> Account settings</a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-unlink profile-icon" aria-hidden="true"></i> Sign-out</a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
