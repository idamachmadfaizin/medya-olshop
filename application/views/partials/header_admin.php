<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin -  <?= $this->config->item('app_name'); ?></title>
	<meta name="description" content="Admin - <?= $this->config->item('app_name'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
	<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png"> -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/elaadmin/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/elaadmin/css/style.css">
	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
	<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<style>
		#weatherWidget .currentDesc {
			color: #ffffff !important;
		}

		.traffic-chart {
			min-height: 335px;
		}

		#flotPie1 {
			height: 150px;
		}

		#flotPie1 td {
			padding: 3px;
		}

		#flotPie1 table {
			top: 20px !important;
			right: -10px !important;
		}

		.chart-container {
			display: table;
			min-width: 270px;
			text-align: left;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		#flotLine5 {
			height: 105px;
		}

		#flotBarChart {
			height: 150px;
		}

		#cellPaiChart {
			height: 160px;
		}

		.rounded-cover {
			width: 45px;
			height: 45px;
			object-fit: cover;
		}
	</style>
</head>

<body style="background-color:#F1F2F7;">
	<!-- Left Panel -->
	<aside id="left-panel" class="left-panel">
		<nav class="navbar navbar-expand-sm navbar-default">
			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="<?php if (current_url() == site_url('admin/dashboard')) {
									echo "active";
								} ?>">
						<a href="<?= site_url('admin/dashboard') ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
					</li>
					<li class="menu-title">Data Master</li><!-- /.menu-title -->
					<li class="<?php if (current_url() == site_url('admin/category')) {
									echo "active";
								} ?>">
						<a href="<?= site_url('admin/category/index/0') ?>"><i class="menu-icon fas fa-tags"></i>Category</a>
					</li>
					<li class="<?php if (current_url() == site_url('admin/product')) {
									echo "active";
								} ?>">
						<a href="<?= site_url('admin/product/index/0') ?>"><i class="menu-icon fas fa-box"></i>Product</a>
					</li>
					<li class="<?php if (current_url() == site_url('admin/customer')) {
									echo "active";
								} ?>">
						<a href="<?= site_url('admin/customer') ?>"><i class="menu-icon fas fa-user"></i>Customer</a>
					</li>
					<li class="menu-title">Data Order</li><!-- /.menu-title -->
					<li class="<?php if (current_url() == site_url('admin/order')) {
									echo "active";
								} ?>">
						<a href="<?= site_url('admin/order') ?>"><i class="menu-icon fas fa-shopping-cart"></i></i>Orders</a>
					</li>

					<li class="menu-title">Report</li><!-- /.menu-title -->
					<li><a href="<?= site_url('admin/report') ?>"><i class="menu-icon fas fa-file-signature"></i>Report</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</aside>
	<!-- /#left-panel -->
	<!-- Right Panel -->
	<div id="right-panel" class="right-panel">
		<!-- Header-->
		<header id="header" class="header">
			<div class="top-left">
				<div class="navbar-header">
					<a href="<?= base_url() ?>" style="margin-left: 2rem;">
						<img src="<?php echo base_url() ?>assets/img/logos/logo_brand.png" alt="IMG-LOGO" style="height: 53px;">
					</a>
					<!-- <span class="navbar-brand" style="font-family:'Montserrat'"><b><?= $this->config->item('app_name'); ?></b></span> -->
					<a id="menuToggle" class="menutoggle" style="margin-left: 4rem;"><i class="fa fa-bars"></i></a>
				</div>
			</div>
			<div class="top-right">
				<div class="header-menu">

					<div class="user-area dropdown float-right">
						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="user-avatar rounded-circle" src="<?= base_url() ?>assets/elaadmin/images/admin.jpg" alt="User Avatar">
						</a>

						<div class="user-menu dropdown-menu">
							<!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

							<a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> -->

							<a class="nav-link" href="<?= site_url('logout/admin') ?>"><i class="fa fa-power -off"></i>Logout</a>
						</div>
					</div>

				</div>
			</div>
		</header>
		<!-- /#header -->
