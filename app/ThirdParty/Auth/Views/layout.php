<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Jaya Kuncara Rosa Susila">
		<meta name="generator" content="">

		<title>Auth Bootstrap v5.0</title>
				
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.css">

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
		<link rel="manifest" href="/icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
			
		<style>
			html, body { height: 100%; }

			body {
				display: flex;
				align-items: center;
				padding-top: 40px;
				padding-bottom: 40px;
				background-color: #f5f5f5;
			}

			.form-signin {
				width: 100%;
				max-width: 330px;
				padding: 15px;
				margin: auto;
			}

			.form-signin .checkbox { font-weight: 400; }

			.form-signin .form-floating:focus-within { z-index: 2; }

			.form-signin input[type="email"] {
				margin-bottom: -1px;
				border-bottom-right-radius: 0;
				border-bottom-left-radius: 0;
			}

			.form-signin input[type="password"] {
				margin-bottom: 10px;
				border-top-left-radius: 0;
				border-top-right-radius: 0;
			}

			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				user-select: none;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
		</style>
		
	</head>
	
	<body class="text-center">

		<?php
		if (session('isLoggedIn')) {
			echo view('Auth\Views\_navbar');
		}
		?>

		<?= $this->renderSection('main') ?>
	
	</body>
</html>
