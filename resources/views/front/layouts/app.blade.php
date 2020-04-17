<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3ed2a7">

    <link rel="shortcut icon" href="./favicon.png" />

    <title> @yield('title_tab', config('app.name'))</title>

    <meta name="csrf-token"   content="{{ csrf_token() }}">
    <meta property="og:title" content="@yield('title_tab', config('app.name'))" />
    <meta property="og:type"  content="@yield('og:type', 'website')" />
    <meta property="og:url"   content="@yield('og:url', URL::current())" />
    <meta property="og:image" content="@yield('og:image', asset('assets/img/logo/logo-1.svg'))" />
    <meta name="description"  content="@yield('description', '')">
    <meta name="author"       content="@yield('author', config('app.name'))">
    <meta name="keywords"     content="@yield('keywords', '')">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/vendors/liquid-icon/liquid-icon.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/theme-vendors.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/themes/creative.css')}}" />
    <script async src="{{asset('assets/vendors/modernizr.min.js')}}"></script>

</head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="modern" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">

	<div id="wrap">

		<header class="main-header main-header-overlay" data-sticky-header="true" data-sticky-options='{ "stickyTrigger": "first-section" }'>

			<div class="mainbar-wrap">
				<div class="megamenu-hover-bg"></div><!-- /.megamenu-hover-bg -->
				<div class="container-fluid mainbar-container">
					<div class="mainbar">
						<div class="row mainbar-row align-items-lg-stretch px-4">

							<div class="col-auto pr-5">
								<div class="navbar-header">
									<a class="navbar-brand" href="index-creative.html" rel="home">
										<span class="navbar-brand-inner">
											<img class="logo-dark" src="./assets/img/logo/logo-1.svg" alt="Ave HTML Template">
											<img class="logo-sticky" src="./assets/img/logo/logo-1.svg" alt="Ave HTML Template">
											<img class="mobile-logo-default" src="./assets/img/logo/logo-1.svg" alt="Ave HTML Template">
											<img class="logo-default" src="./assets/img/logo/logo-1.svg" alt="Ave HTML Template">
										</span>
									</a>
									<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
										<span class="sr-only">Toggle navigation</span>
										<span class="bars">
											<span class="bar"></span>
											<span class="bar"></span>
											<span class="bar"></span>
										</span>
									</button>
								</div><!-- /.navbar-header -->
							</div><!-- /.col -->

							<div class="col">

								<div class="collapse navbar-collapse" id="main-header-collapse">

									<ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-start" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">

										<li>
											<a href="#content">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Home</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#works">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Works</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#services">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Services</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#about">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">About</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#testimonials">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">Testimonials</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#news">
												<span class="link-icon"></span>
												<span class="link-txt">
													<span class="link-ext"></span>
													<span class="txt">News</span>
												</span>
											</a>
										</li>

								</ul><!-- /#primary-nav  -->

							</div><!-- /#main-header-collapse -->

						</div><!-- /.col -->

						<div class="col text-right">

							<div class="header-module">

								<a href="#" target="_blank" class="btn btn-default text-uppercase circle btn-bordered border-thick font-size-12 font-weight-semibold btn-white">
									<span>
										<span class="btn-txt">Join to Download</span>
									</span>
								</a>

							</div><!-- /.header-module -->

						</div><!-- /.col -->

					</div><!-- /.mainbar-row -->
				</div><!-- /.mainbar -->
			</div><!-- /.mainbar-container -->
		</div><!-- /.mainbar-wrap -->

	</header><!-- /.main-header -->

	<main id="content" class="content">
        @yield('content')
	</main><!-- /#content.content -->

	<footer class="main-footer pt-80">

		<section>

			<div class="container">
				<div class="row">

					<div class="lqd-column col-md-3 col-sm-6">

						<h3 class="widget-title">Navigation</h3>
						<ul class="lqd-custom-menu reset-ul">
							<li><a href="#">Home</a></li>
							<li><a href="#">Product</a></li>
							<li><a href="#">Customers</a></li>
							<li><a href="#">Pricing</a></li>
						</ul>

					</div><!-- /.col-md-3 col-sm-6 -->

					<div class="lqd-column col-md-3 col-sm-6">

						<h3 class="widget-title">Abous Us</h3>
						<ul class="lqd-custom-menu reset-ul">
							<li><a href="#">Company</a></li>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Blog</a></li>
						</ul>

					</div><!-- /.col-md-3 col-sm-6 -->

					<div class="lqd-column col-md-3 col-sm-6">

						<h3 class="widget-title">Workflows</h3>
						<ul class="lqd-custom-menu reset-ul">
							<li><a href="#">Management</a></li>
							<li><a href="#">Reporting</a></li>
							<li><a href="#">Tracking</a></li>
							<li><a href="#">All Users</a></li>
						</ul>

					</div><!-- /.col-md-3 col-sm-6 -->

					<div class="lqd-column col-md-3 col-sm-6">

						<h3 class="widget-title">Resources</h3>
						<ul class="lqd-custom-menu reset-ul">
							<li><a href="#">Ave Guide</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Intergration</a></li>
							<li><a href="#">Communnity</a></li>
						</ul>

					</div><!-- /.col-md-3 col-sm-6 -->

				</div><!-- /.row -->
			</div><!-- /.container -->

		</section>

		<section class="bt-fade-white-015 pt-90 pb-90">
			<div class="container">
				<div class="row">

					<div class="lqd-column col-md-6 col-md-offset-3 text-center">

						<figure class="mb-40">
							<img src="./assets/img/logo/logo-1.svg" alt="Logo">
						</figure>

						<p>© {{date('Y')}} Ave. All Rights Reserved.</p>

					</div><!-- /.col-md-6 -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

	</footer><!-- /.main-footer -->

</div><!-- /#wrap -->

<script src="{{asset('./assets/vendors/jquery.min.js')}}"></script>
<script src="{{asset('./assets/js/theme-vendors.js')}}"></script>
<script src="{{asset('./assets/js/theme.min.js')}}"></script>
<script src="{{asset('./bundle-front.js')}}"></script>

</body>
</html>
