<?php $this->load->view('other'); ?>
<! ––Carga la vista del Menu de administrador ––>
<div class="container">
	<div class="row">
		<div class="col">
			<a href="<?php echo base_url(); ?>ubicacionController/municipio" class="btn btn-block" style="background-color: #0A0C57; color: white;">MUNICIPIOS</a>
			<a href="<?php echo base_url(); ?>ubicacionController/departamento" class="btn btn-block" style="background-color: #0A0C57; color: white;">DEPARTAMENTOS</a>
		</div>
	</div>
</div>