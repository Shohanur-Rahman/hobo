<!doctype html>
<html class="no-js" lang="zxx">

<head>
	@include('user.partials.layout.second.resources')
	
</head>

<body>
	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--header-area start-->
	@include('user.partials.layout.second.header')
	<!--header-area end-->
	
	<section class="app_content_area">
		@yield('content')
	</section>
	
	<!--footer-area start-->
	@include('user.partials.layout.second.footer')
  
</body>

</html>
