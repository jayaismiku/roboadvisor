<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />

	<link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
	<link rel="manifest" href="/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title><?= $web_title ?></title>

	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/vendor/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i,900,900i&display=swap" rel="stylesheet">
</head>

<body class="theme-light" data-highlight="highlight-red" data-gradient="body-default">

	<div id="preloader">
		<div class="spinner-border color-highlight" role="status"></div>
	</div>

	<div id="page">

		<div id="footer-bar" class="footer-bar-1">
			<a href="/" <?= ($menu == 'home') ? 'class="active-nav"' : '' ?>><i class="fa fa-home"></i><span>Home</span></a>
			<a href="/form" <?= ($menu == 'form') ? 'class="active-nav"' : '' ?>><i class="fab fa-wpforms"></i><span>Form</span></a>
			<a href="/payment" <?= ($menu == 'payment') ? 'class="active-nav"' : '' ?>><i class="fas fa-file-invoice"></i><span>Payment</span></a>
			<a href="#" data-menu="menu-settings"><i class="fas fa-user-cog"></i><span>User Settings</span></a>
		</div>

		<div class="page-content header-clear-small">

			<div class="card card-style preload-img" data-src="/img/18w.jpg" data-card-height="130">
				<div class="card-center ms-3 me-5">
					<h1 class="color-white mb-0 fs-4 fw-bold"><?= $title_page ?></h1>
				</div>
				<div class="card-center me-3">
					<a href="#" data-back-button class="btn btn-m float-end rounded-xl shadow-xl text-uppercase font-800 bg-highlight">Back</a>
				</div>
				<div class="card-overlay bg-black opacity-80"></div>
			</div>

			<?= $this->renderSection('main') ?>

			<div class="footer card card-style">
				<a href="#" class="footer-title"><span class="color-highlight">Rumahku Syurgaku</span></a>
				<p class="footer-text"><span>Made with <i class="fa fa-heart color-highlight font-16 ps-2 pe-2"></i> by Enabled</span></p>
				<div class="text-center mb-3">
					<a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-twitter"><i class="fab fa-twitter"></i></a>
					<a href="#" class="icon icon-xs rounded-sm shadow-l me-1 bg-phone"><i class="fa fa-phone"></i></a>
					<a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm me-1 shadow-l bg-red-dark"><i class="fa fa-share-alt"></i></a>
					<a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark-light"><i class="fa fa-angle-up"></i></a>
				</div>
				<p class="footer-copyright">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All Rights Reserved.</p>
				<div class="clear"></div>
			</div>
		</div>

		<div id="menu-settings" class="menu menu-box-bottom menu-box-detached">
			<div class="menu-title mt-0 pt-0">
				<h1>User Settings</h1>
				<p class="color-highlight">Flexible and Easy to Use</p>
				<a href="#" class="close-menu"><i class="fa fa-times"></i></a>
			</div>
			<div class="divider divider-margins mb-n2"></div>
			<div class="content">
				<div class="list-group list-custom-small">
					<a href="#" data-toggle-theme data-trigger-switch="switch-dark-mode" class="pb-2 ms-n1">
						<i class="fa font-12 fa-moon rounded-s bg-highlight color-white me-3"></i>
						<span>Dark Mode</span>
						<div class="custom-control scale-switch ios-switch">
							<input data-toggle-theme type="checkbox" class="ios-input" id="switch-dark-mode">
							<label class="custom-control-label" for="switch-dark-mode"></label>
						</div>
						<i class="fa fa-angle-right"></i>
					</a>
					<a href="/account" class="pb-2 ms-n1"><i class="fas fa-user-edit"></i>User Edit</a>
					<a href="/logout" class="pb-2 ms-n1"><i class="fas fa-sign-out-alt"></i><?= lang('Auth.logout') ?></a>
				</div>
			</div>
		</div>

		<!-- Menu Share -->
		<div id="menu-share" class="menu menu-box-bottom menu-box-detached">
			<div class="menu-title mt-n1">
				<h1>Share the Love</h1>
				<p class="color-highlight">Just Tap the Social Icon. We'll add the Link</p><a href="#" class="close-menu"><i class="fa fa-times"></i></a>
			</div>
			<div class="content mb-0">
				<div class="divider mb-0"></div>
				<div class="list-group list-custom-small list-icon-0">
					<a href="auto_generated" class="shareToFacebook external-link">
						<i class="font-18 fab fa-facebook-square color-facebook"></i>
						<span class="font-13">Facebook</span>
						<i class="fa fa-angle-right"></i>
					</a>
					<a href="auto_generated" class="shareToTwitter external-link">
						<i class="font-18 fab fa-twitter-square color-twitter"></i>
						<span class="font-13">Twitter</span>
						<i class="fa fa-angle-right"></i>
					</a>
					<a href="auto_generated" class="shareToLinkedIn external-link">
						<i class="font-18 fab fa-linkedin color-linkedin"></i>
						<span class="font-13">LinkedIn</span>
						<i class="fa fa-angle-right"></i>
					</a>
					<a href="auto_generated" class="shareToWhatsApp external-link">
						<i class="font-18 fab fa-whatsapp-square color-whatsapp"></i>
						<span class="font-13">WhatsApp</span>
						<i class="fa fa-angle-right"></i>
					</a>
					<a href="auto_generated" class="shareToMail external-link border-0">
						<i class="font-18 fa fa-envelope-square color-mail"></i>
						<span class="font-13">Email</span>
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>

	</div>

	<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/SwupPreloadPlugin.min.js"></script>
	<script type="text/javascript" src="/js/custom.js"></script>
</body>
