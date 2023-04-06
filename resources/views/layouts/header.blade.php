<!doctype html>
<html class="fixed">
<head>

<!-- Basic -->
<meta charset="UTF-8">


<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

<!-- Vendor CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

<!-- Custom CSS -->
@yield('styles')

<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

<!-- Skin CSS -->
<link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

<!-- Head Libs -->
<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

</head>
<body>
<section class="body">

	<!-- start: header -->
	<header class="header">
		<div class="logo-container">
			<a href="{{route('dashboard')}}" class="logo">
			</a>
			<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>

		<!-- start: search & user box -->
		<div class="header-left" style="margin-left:100px;">

			<span class="separator"></span>

			<div id="userbox" class="userbox">
				<a href="#" data-toggle="dropdown">
					<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
						<span class="name">{{Auth::user()->name}}</span>
						<span class="role">مشرف</span>
					</div>

					<i class="fa custom-caret"></i>
				</a>

				<div class="dropdown-menu">
					<ul class="list-unstyled">
						<li class="divider"></li>
						<li>
							<a role="menuitem" tabindex="-1" href="{{route('logout')}}"><i class="fa fa-power-off"></i> تسجيل خروج</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end: search & user box -->
	</header>
	<!-- end: header -->
