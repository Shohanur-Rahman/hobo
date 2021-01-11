<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Title -->
<title>@yield('title') | HOBO admin</title>

<!-- Favicon -->
<link rel="icon" href="{{asset('logo.png')}}">

<!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
<link rel="stylesheet" href="{{asset('admin/style.css')}}">
<link rel="stylesheet" href="{{asset('admin/custom.css')}}">
<!-- Must needed plugins to the run this Template -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script type="text/javascript">
    var pathURL = window.location.pathname; // Returns path only (/path/example.html)
    var pageURL = window.location.href;     // Returns full URL (https://example.com/path/example.html)
    var domainURL = window.location.origin;   // Returns base URL (https://example.com)
    var absoulatePath = "{{env('APP_URL')}}";

</script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/bundle.js')}}"></script>
<script src="{{asset('admin/js/default-assets/setting.js')}}"></script>
<script src="{{asset('admin/js/default-assets/fullscreen.js')}}"></script>
<script src="{{asset('parsley/parsley.min.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('admin/js/default-assets/active.js')}}"></script>


