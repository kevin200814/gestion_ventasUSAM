<!DOCTYPE html>
<html>
<head>
	<title><?=$page_title ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
	<?php require 'modal.php' ?>
</head>
<body>
	<?php $this->load->view('template/header'); ?>
	<?php $this->load->view($view,$data_view); ?>
	<?php $this->load->view('template/footer_view'); ?>
</body>
</html>