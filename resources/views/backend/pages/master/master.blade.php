<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     @include('backend.includes.css')
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('backend.includes.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
        @include('backend.includes.header')
		<!--end header -->
		{{-- main-content --}}
		    @yield('main-content')
        {{--End main-content --}}
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('backend.includes.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
    @include('backend.includes.switcher')
	<!--end switcher-->
    @include('backend.includes.js')
</body>

</html>
