<!DOCTYPE html>
<!--[if IE 9]>
<html class='ie9 no-focus' lang='en'> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-focus" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title>CryptoWave</title>

		<meta name="description"
		      content="CryptoWave">
		<meta name="author" content="pixelcave">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Icons -->
		<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
		{{--<link rel="shortcut icon" href="{{ asset('oneui/assets/img/favicons/favicon.png') }}">--}}

		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-16x16.png') }}"--}}
		{{--sizes="16x16">--}}
		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-32x32.png') }}"--}}
		{{--sizes="32x32">--}}
		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-96x96.png') }}"--}}
		{{--sizes="96x96">--}}
		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-160x160.png') }}"--}}
		{{--sizes="160x160">--}}
		{{--<link rel="icon" type="image/png" href="{{ asset('oneui/assets/img/favicons/favicon-192x192.png') }}"--}}
		{{--sizes="192x192">--}}

		<link rel="shortcut icon" href="{{ asset('stack/img/logo.png') }}">

		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="16x16">
		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="32x32">
		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="96x96">
		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="160x160">
		<link rel="icon" type="image/png" href="{{ asset('stack/img/logo.png') }}"
		      sizes="192x192">

		<link rel="apple-touch-icon" sizes="57x57"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-57x57.png') }}">
		<link rel="apple-touch-icon" sizes="60x60"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-60x60.png') }}">
		<link rel="apple-touch-icon" sizes="72x72"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-72x72.png') }}">
		<link rel="apple-touch-icon" sizes="76x76"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-76x76.png') }}">
		<link rel="apple-touch-icon" sizes="114x114"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-114x114.png') }}">
		<link rel="apple-touch-icon" sizes="120x120"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-120x120.png') }}">
		<link rel="apple-touch-icon" sizes="144x144"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-144x144.png') }}">
		<link rel="apple-touch-icon" sizes="152x152"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-152x152.png') }}">
		<link rel="apple-touch-icon" sizes="180x180"
		      href="{{ asset('oneui/assets/img/favicons/apple-touch-icon-180x180.png') }}">
		<!-- END Icons -->

		<!-- Stylesheets -->
		<!-- Web fonts -->
		<link rel="stylesheet"
		      href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

		<!-- Page JS Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('oneui/assets/js/plugins/datatables/jquery.dataTables.min.css') }}">

		<!-- Bootstrap and OneUI CSS framework -->
		<link rel="stylesheet" href="{{ asset('oneui/assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" id="css-main" href="{{ asset('oneui/assets/css/oneui.css') }}">

		<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
		<link rel="stylesheet" id="css-theme" href="{{ asset('oneui/assets/css/themes/modern.min.css') }}">
		<!-- END Stylesheets -->
	</head>
	<body>
	<!-- Page Container -->
	<div id="page-container" class="sidebar-l side-scroll header-navbar-fixed">

		<!-- Header -->
		<header id="header-navbar">
			<div class="content-mini content-mini-full content-boxed">
				<!-- Header Navigation Left -->
				<ul class="nav-header pull-left">
					<li class="header-content">
						<a class="h5" href="/">
							{{--<i class="fa fa-circle-o-notch text-primary"></i> --}}
							<span class="h4 font-w600 text-primary-dark">CryptoWave™</span>
						</a>
					</li>
				</ul>
				<!-- END Header Navigation Left -->
			</div>
		</header>
		<!-- END Header -->

		<!-- Main Container -->
		<main id="main-container">
			<!-- Sub Header -->
			<div class="bg-gray-lighter visible-xs">
				<div class="content-mini content-boxed">
					<button class="btn btn-block btn-default visible-xs push" data-toggle="collapse"
					        data-target="#sub-header-nav">
						<i class="fa fa-navicon push-5-r"></i>Menu
					</button>
				</div>
			</div>
			<div class="bg-primary-lighter collapse navbar-collapse remove-padding" id="sub-header-nav">
				<div class="content-mini content-boxed">
					<ul class="nav nav-pills nav-sub-header push">
						<li>
							<a href="/home">
								<i class="fa fa-dashboard push-5-r"></i>Dashboard
							</a>
						</li>
						<li>
							{{--<a href="/download" download>--}}
							<a href="/download" target="_blank">
								<i class="fa fa-cloud-download push-5-r"></i>Download Windows Miner
							</a>
						</li>

						<li>
							{{--<a href="/download" download>--}}
							<a id="download-mac-link" href="/download/mac" target="_blank">
								<i class="fa fa-cloud-download push-5-r"></i>Download Mac Miner
							</a>
						</li>

						<li class="active">
							{{--<a href="/download" download>--}}
							<a href="/faq">
								<i class="fa fa-question-circle push-5-r"></i>CryptoWave FAQ
							</a>
						</li>

						<li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST"
							      style="display: none;">
								{{ csrf_field() }}
							</form>
							<a href="{{ route('logout') }}"
							   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								Logout
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- END Sub Header -->

			<!-- Page Content -->
			<div class="content content-boxed">
				<!-- Section -->
				<div class="bg-image img-rounded overflow-hidden push"
				     style="background-image: url('{{ asset('stack/img/promo-1.jpg') }}');">
					<div class="bg-black-op">
						<div class="content">
							<div class="block block-transparent block-themed text-center">
								<div class="block-content">
									<h1 class="h1 font-w700 text-white animated fadeInDown push-5">CryptoWave FAQ</h1>
									<h2 class="h4 font-w400 text-white-op animated fadeInUp">Get the answers below!</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END Section -->

				<div class="content content-boxed">
					<!-- Frequently Asked Questions -->
					<div class="block">
						<div class="block-content block-content-full block-content-narrow">

							<!-- Systems Compatibility -->
							<h2 class="h3 font-w600 push-30-t push">CryptoWave Miner</h2>
							<div id="faq1" class="panel-group">

								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1"
											   href="#faq1_q1">Will the .exe run on Surface Pro laptops?
											</a>
										</h3>
									</div>
									<div id="faq1_q1" class="panel-collapse collapse in">
										<div class="panel-body">
											<p>You can definitely run CryptoWave (windows version) on the Surface Pro.
											   However as the specs of a Surface Pro is more structured for a tablet
											   rather than a full fledged Desktop & Laptop,
											   we do not if this will affect the existing functionalities of the Surface
											   Pro.
											   And also, the results of mining from a Surface Pro might not be the same
											   as a Desktop/Laptop.</p>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1"
											   href="#faq1_q2">I extracted the miner and my xmr-stak.exe went missing!
											</a>
										</h3>
									</div>
									<div id="faq1_q2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>This is due to the Anti-Virus that you have on your computer & the miner
											   has been flagged as a false positive. To solve that, simply disable
											   it.</p>
											<p>If you have disabled your Anti-Virus but the xmr-stak is still missing try going to your Control Panel & search for Real Time Defender.
											<br/>After that just disable real-time scanning. It should look like the photo below:
											</p>
											<img src="{{ asset('realtime-defender-disabling.jpeg') }}" style="height: 400px; width: 250px;">
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1"
											   href="#faq1_q3">I'm getting a NVIDIA Insufficient Driver! message
											</a>
										</h3>
									</div>
									<div id="faq1_q3" class="panel-collapse collapse">
										<div class="panel-body">
											<p>If your miner is showing something like this:</p>
											<img src="{{ asset('cryptowave-nvidia-driver-faq.jpeg') }}" style="height: 400px; width: 600px;">
											<p>It means that the miner detects that you have a NVIDIA Graphic Card but because the drivers are outdated it can't be utilized.
											<br/>
												To allow the miner to use the NVIDIA Graphic Card, simply go to this website:
												<a href="http://www.nvidia.com/Download/index.aspx">here</a>
											</p>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq1"
											   href="#faq1_q4">How long will it take before the stats update on the
											                   dashboard?
											</a>
										</h3>
									</div>
									<div id="faq1_q4" class="panel-collapse collapse">
										<div class="panel-body">
											<p>We do a update on the stashes 7th of every month. For the Hashpower
											   you've contributed, it is updated every 5 to 10 minutes.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- END Systems Compatibility -->

							<!--Monero-->
							<h2 class="h3 font-w600 push-30-t push">Monero (XMR)</h2>
							<div id="faq5" class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq5"
											   href="#faq5_q1">What is Monero (XMR)?
											</a>
										</h3>
									</div>
									<div id="faq5_q1" class="panel-collapse collapse">
										<div class="panel-body">
											<p>
												Monero is a cryptocurrency that promises untraceability and privacy. It accomplishes this by obfuscating and encrypting transactions beyond recognition, while allowing you to discreetly view and manage your assets. You can also prove your transactions to a third party if necessary.
											</p>

											<p>
												The rationale CryptoWave mines for Monero is due to it's underlying algorithm which is friendly for CPU mining, making it easy for anyone without specialized mining rigs to mine for Monero.
											</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Payments -->
							<h2 class="h3 font-w600 push-50-t push">CryptoWave Affiliate</h2>
							<div id="faq3" class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq3"
											   href="#faq3_q2">How-to Refer Users
											</a>
										</h3>
									</div>
									<div id="faq3_q2" class="panel-collapse collapse">
										<div class="panel-body">
											<object width="1000" height="600">
												<param name="movie"
												       value="http://www.youtube.com/v/PacclWDgwnI&hl=en&fs=1"></param>
												<param name="allowFullScreen" value="true"></param>
												<embed src="http://www.youtube.com/v/PacclWDgwnI&hl=en&fs=1"
												       type="application/x-shockwave-flash" allowfullscreen="true"
												       width="425" height="344"></embed>
											</object>
										</div>
									</div>
								</div>
							</div>
							<!-- END Payments -->

							<!-- Payments -->
							<h2 class="h3 font-w600 push-50-t push">Payments</h2>
							<div id="faq3" class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4"
											   href="#faq4_q1">How do we get paid?
											</a>
										</h3>
									</div>
									<div id="faq4_q1" class="panel-collapse collapse">
										<div class="panel-body">
											<p>At the moment, we will be paying out to Monero wallets only.
											   After receiving your Monero you can go through an exchange to convert
											   your Monero into fiat currencies.</p>
											<p>
												We are still exploring on a seamless way to help you guys do a cash out
												without going through all the processes to cashout personally.
											</p>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#faq4"
											   href="#faq4_q2">When will you update our stash?
											</a>
										</h3>
									</div>
									<div id="faq4_q2" class="panel-collapse collapse">
										<div class="panel-body">
											<p>The stash will be updated on the 7th of every month, to ensure accuracy
											   after the end of the previous month.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- END Payments -->
						</div>
					</div>
					<!-- END Frequently Asked Questions -->
				</div>

			</div>
			<!-- END Page Content -->
		</main>
		<!-- END Main Container -->

		<!-- Footer -->
		<footer id="page-footer" class="bg-body font-s12">
			<div class="content-mini content-mini-full content-boxed clearfix push-15">
				{{--<div class="pull-right">--}}
				{{--Crafted with <i class="fa fa-heart text-city"></i> by--}}
				{{--<a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>--}}
				{{--</div>--}}
				<div class="pull-right">
					<a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">CryptoWave</a> &copy; <span
							class="js-year-copy"></span>
				</div>
				{{--<div class="pull-left">--}}
				{{--<a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">CryptoWave</a> &copy; <span--}}
				{{--class="js-year-copy"></span>--}}
				{{--</div>--}}
			</div>
		</footer>
		<!-- END Footer -->
	</div>
	<!-- END Page Container -->

	<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js') }} -->
	<script src="{{ asset('oneui/assets/js/core/jquery.min.js') }}"></script>
	<script src="{{ asset('oneui/assets/js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('oneui/assets/js/core/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('oneui/assets/js/core/jquery.scrollLock.min.js') }}"></script>
	<script src="{{ asset('oneui/assets/js/core/jquery.appear.min.js') }}"></script>
	<script src="{{ asset('oneui/assets/js/core/jquery.countTo.min.js') }}"></script>
	<script src="{{ asset('oneui/assets/js/core/jquery.placeholder.min.js') }}"></script>
	<script src="{{ asset('oneui/assets/js/core/js.cookie.min.js') }}"></script>
	<script src="{{ asset('oneui/assets/js/app.js') }}"></script>

	<!-- Page Plugins -->
	<script src="{{ asset('oneui/assets/js/plugins/chartjs/Chart.min.js') }}"></script>

	<!-- Page JS Code -->
	{{--<script src="{{ asset('oneui/assets/js/pages/base_pages_dashboard_v2.js') }}"></script>--}}

	<!-- Page JS Plugins -->
	<script src="{{ asset('oneui/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>

	</body>
</html>