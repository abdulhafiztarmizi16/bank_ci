<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GIS-Bank</title>

 <!-- Custom fonts for this template-->
 <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	<!-- Plugin leaflet maps -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
	
	<!-- Plugin leaflet search -->
	<script src="<?= base_url('leaflet-search/') ?>src/leaflet-search.js"></script>

	<!-- Plugin leaflet GEOCODER -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

	<!-- data table -->
	<link
			href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css"
			rel="stylesheet"
		/>
	
	
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('index.html')?>">
				<div class="sidebar-brand-icon">
					<i class="fas fa-university"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SB Bank</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?=base_url('home')?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				CRUD
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item active">
				<a class="nav-link" href="<?=base_url('Bank_data/tambah')?>">
					<i class="fas fa-fw fa-plus"></i>
					<span>Input Data</span></a>
			</li>
			<!-- <li class="nav-item active">
				<a class="nav-link" href="<?=base_url('Bank_data/edit')?>">
					<i class="fas fa-fw fa-wrench"></i>
					<span>Update Data</span></a> -->
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?=base_url('Bank_data')?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Tampil Data</span></a>
			</li>


			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

			<!-- Sidebar Message
			<div class="sidebar-card">
				<img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
				<p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
					and more!</p>
				<a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
					Pro!</a>
			</div> -->

		</ul>
		<!-- End of Sidebar -->