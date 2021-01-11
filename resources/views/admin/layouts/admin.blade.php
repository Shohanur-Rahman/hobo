@php

    if(Auth::user()->is_active == 0){
        Auth::logout();
        return redirect(route('login'));
    }
@endphp



<!doctype html>
<html lang="en">

<head>
    <!-- Include header resources files here -->
    @include('admin.partials.layout.resources')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-load"></div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        @include('admin.partials.layout.sidebar')

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            @include('admin.partials.layout.top_header')

            <!-- Main Content Area -->
            <div class="main-content">
                <div class="container-fluid repeat-area">

                    @yield('content')

                </div>

                <!-- Footer Area -->
                {{--@include('admin.partials.layout.footer')--}}
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->


    <script src="{{asset('admin/js/default-assets/admin.common.js')}}"></script>
</body>

</html>


