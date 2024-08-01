{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
 --}}



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AUH </title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.offcanvas.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/featherlight.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/hover.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/core.css') }}">

<!-- Custom styles for this template -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Nanum+Gothic&display=swap" rel="stylesheet">
    <style>
        p {
  font-family: "Nanum Gothic", sans-serif !important;
  font-weight: 400;
  font-style: normal;
}
#logo{
        max-height: 120px !important;
     margin:  0 !important;
}

    </style>
	</head>

	<body>
		<header id="masthead" class="site-header container header-1">
			<div class="row">
				<div class="site-branding col-sm-4 col-md-3">
					<h1 class="site-title">
						<a href="/" title="AUH" rel="home">
							<img src="logos/logo-auh.svg" alt="logo"  id="logo">
						</a>
					</h1>
				</div>

				<div class="col-sm-8 col-md-9">
					<nav id="site-navigation" class="navbar">
						<div class="navbar-header">
							<div class="mobile-menu">
								<ul class="nav navbar-nav">
									<li>
										<a href="#" data-featherlight="#search-lightbox-mobile">
											<i class="fa fa-search fa-lg" aria-hidden="true"></i>
										</a>
										<div id="search-lightbox-mobile" class="search-lightbox">
											<div class="gallery-lightbox-content">
												<input type="text" placeholder="Type any keyword to search">
											</div>
										</div>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
										</a>
									</li>
                                    <a href="#">
                                        <x-language-switcher />
									</a>
								</li>
								</ul>
							</div>
							<button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
							<button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
								<i class="fa fa-times fa-2x" aria-hidden="true"></i>
							</button>
							<ul class="nav navbar-nav">
								<li><a href="about">About</a></li>
								<li><a href="academics">Academics</a></li>
								<li><a href="events">Events</a></li>
								<li><a href="news">News</a></li>
								<li><a href="schedule">Schedule</a></li>
								<li><a href="contact">Contact</a></li>
								<li><a href="gallery">Resources</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#" data-featherlight="#search-lightbox">
										<i class="fa fa-search fa-lg" aria-hidden="true"></i>
									</a>
									<div id="search-lightbox" class="search-lightbox">
										<div class="gallery-lightbox-content">
											<input type="text" placeholder="Type any keyword to search">
										</div>
									</div>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
									</a>
								</li>
                                <li>
									<a href="#">
                                        <x-language-switcher />
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>












        {{ $slot }}


<footer id="colophon" class="site-footer">
			<div class="footer-info">
				<div class="container">
					<div class="row">
						<div class="footer-logo col-md-3">
							<a href="/" title="AUH" rel="home">
							<img src="logos/logo-auh.svg" alt="logo" id="logo">
							</a>
						</div>
						<div class="footer-menu col-md-9">
							<div class="footer-links">
								<ul>
									<li><a href="#">About</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Location</a></li>
								</ul>
							</div>
							<div class="footer-links">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Students</a></li>
									<li><a href="#">Teachers</a></li>
								</ul>
							</div>
							<div class="footer-links">
								<ul>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Latest News</a></li>
									<li><a href="#">Resources</a></li>
								</ul>
							</div>
							<div class="footer-links">
								<ul>
									<li><a href="#">Academic</a></li>
									<li><a href="#">Calendar</a></li>
									<li><a href="#">Events</a></li>
								</ul>
							</div>
							<div class="footer-links">
								<ul class="social">
									<li class="facebook">
										<a href="#">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li class="google">
										<a href="#">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
									<li class="twitter">
										<a href="#">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<p>Copyright 2024 | ALL RIGHTS RESERVED</p>
					</div>
				</div>
			</div>
		</footer>

		<script src="js/jquery-3.2.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/featherlight.min.js"></script>
		<script src="js/bootstrap.offcanvas.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
