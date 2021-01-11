@php
    $siteSetting = \App\Models\SiteSetting::first();

if (Auth::check()) {
    if(Auth::user()->is_active == 0){
        Auth::logout();
        return redirect(route('login'));
    }
}

@endphp

    <!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>@yield('title')</title>
    <meta name="description" content="{{$siteSetting != null ? $siteSetting->description : ''}}">

    @include('user.partials.layout.third.resources')

</head>

<body>

<!--header-area start-->
@include('user.partials.layout.third.header')
<!--header-area end-->


<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-9 col-sm-12 col-xs-12 col-md-12 col-xl-10">
            @yield('content')

            @include('user.partials.widget.brand_slider')
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 hidden-xs">
            @include('user.partials.layout.third.menu')
        </div>

    </div>
</div>

<!--footer-area start-->
@include('user.partials.layout.third.footer')

</body>

</html>
