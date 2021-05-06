<!DOCTYPE html>
<html>
<head>
	<title><?=$page_title ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<style type="text/css">
		@font-face {
			font-family: 'FontFamilyLogo';
			src: url('<?php echo base_url(); ?>assets/fonts/goodtime-webfont.woff2') format('woff2'),
			url('<?php echo base_url(); ?>assets/fonts/goodtime-webfont.woff') format('woff'),
			url('<?php echo base_url(); ?>assets/fonts/goodtime-webfont.ttf') format('truetype'),
			url('<?php echo base_url(); ?>assets/fonts/goodtime-webfont.svg') format('svg');
			font-weight: normal;
			font-style: normal;
		}
		a{
			text-decoration: none;
			color: blue;
		}
		.panel{
			color: cornflowerblue;
		}
		.tittles-pages-logo{
			font-family: "FontFamilyLogo";
			color: #0A0C57;
		}
		.bi,.active{
			color: white;
		}
	</style>
	<?php require 'modal.php' ?>
</head>
<body>
	<?php $this->load->view('template/header'); ?>
	<br/><br/>

	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="panel">Panel de administración
					<small class="tittles-pages-logo">STORE ONLINE</small>
				</h1>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">

				<nav class="nav" style="background-color: #0A0C57;border-radius: 10px;">
					<a class="nav-link active" href="<?php echo base_url(); ?>">
						<i class="bi bi-person-fill" style="font-size: 25px;"></i>
						Usuarios
					</a>
					<a class="nav-link active" href="<?php echo base_url(); ?>">
						<i class="bi bi-people-fill" style="font-size: 25px;"></i>
						Sexo
					</a>
					<a class="nav-link active" href="<?php echo base_url(); ?>">
						<i class="bi bi-file-earmark-lock-fill" style="font-size: 25px;"></i>
						Roles
					</a>
					<a class="nav-link active" href="<?php echo base_url(); ?>">
						<i class="bi bi-book-half" style="font-size: 25px;"></i>
						Categorias
					</a>
					<a class="nav-link active" href="<?php echo base_url(); ?>">
						<i class="bi bi-camera-fill" style="font-size: 25px;"></i>
						Productos
					</a>
					<a class="nav-link active" href="<?php echo base_url(); ?>">
						<i class="bi bi-truck" style="font-size: 25px;"></i>
						Proveedores
					</a>
					<a class="nav-link active" href="<?php echo base_url(); ?>">
						<i class="bi bi-credit-card" style="font-size: 25px;"></i>
						Pagos
					</a>
				</nav>
				
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php $this->load->view($view,$data_view); ?>
			</div>
		</div>

	</div>
	<br/><br/>
	<?php $this->load->view('template/footer_view'); ?>
</body>
</html>