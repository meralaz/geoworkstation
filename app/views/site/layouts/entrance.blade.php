<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			GWS
			@section('title')
			@show
		</title>
		@section('meta_keywords')
		<meta name="keywords" content="your, awesome, keywords, here" />
		@show
		@section('meta_author')
		<meta name="author" content="Jon Doe" />
		@show
		@section('meta_description')
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
                @show
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href='http://fonts.googleapis.com/css?family=Oswald|Bad Script' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.css')}}">
		<link rel="stylesheet" href="css/general.css">
		<style>
        body {
            padding: 50px 0;
			margin: 0px;
        }
		@section('styles')
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body>
		<!-- To make sticky footer need to wrap in a div -->
		<div id="wrap">
		<!-- Navbar -->
		<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
			 <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
						<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">About GWS</a></li>
					</ul>
                    <ul class="nav navbar-nav">
						<li {{ (Request::is('services') ? ' class="active"' : '') }}><a href="{{{ URL::to('services') }}}">Services</a></li>
					</ul>
					<!--
                    <ul class="nav navbar-nav">
						<li {{ (Request::is('prices') ? ' class="active"' : '') }}><a href="{{{ URL::to('prices') }}}">Prices</a></li>
					</ul>
					-->
                    <ul class="nav navbar-nav">
						<li {{ (Request::is('gallery') ? ' class="active"' : '') }}><a href="{{{ URL::to('gallery') }}}">Gallery</a></li>
					</ul>

                    <ul class="nav navbar-nav pull-right">
						<li {{ (Request::is('contactus') ? ' class="active"' : '') }}><a href="{{{ URL::to('contactus') }}}">Contact Us</a></li>
						<!--
						Language
						<li><a href="{{{ URL::to('admin') }}}">En</a></li>
						<li><a href="{{{ URL::to('admin') }}}">Am</a></li>
                        
						@if (Auth::check())
                        @if (Auth::user()->hasRole('admin'))
                        <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                        @endif
                        <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                        <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                        @else
                        <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                        <li {{ (Request::is('user/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li>
                        @endif
						-->
                    </ul>
					<!-- ./ nav-collapse -->
				</div>
			</div>
		</div>
		<!-- ./ navbar -->

		<!-- Banner -->
		<div class="banner">
			<!-- Notifications 
			@include('notifications')-->
			<!-- ./ notifications -->
			

			
			<!-- Content -->
			@yield('content')
			<!-- ./ content -->

			<!-- CompanyNameMotto-->
			@yield('company')
			<!-- ./ CompanyNameMotto -->
			
		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>
		</div>
		<!-- ./wrap -->


	    <div id="footer" class="footer">
	        <p class="muted credit">@yield('footer')</p>
	    </div>

		<!-- Javascripts
		================================================== -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

        @yield('scripts')
	</body>
</html>
