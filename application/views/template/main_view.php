<!DOCTYPE html>
<html>
<head>
	<title><?=$page_title ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carrito.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/datatables.min.js"></script>
	<?php $this->load->view('template/header_view',$data_view); ?>
	<?php $this->load->view($view,$data_view); ?>
	<?php $this->load->view('template/footer_view'); ?>
</body>
</html>