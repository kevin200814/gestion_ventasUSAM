<br/><br/>
<?php
// Si existe una variable que contenga datos entonves
if(isset($update)){
	// Haga la impresion de dichos datos 
	$id        = '<input type="hidden" name="txtId" value="'.$this->uri->segment(3).'">';
	$nombre           = $update->NOMBRE_MUNICIPIO;
	// Haga la impresion de la accio para el controlador
	$accion           ='editarMuni';
}
else{//caso contrario, dejar las variables vacias por que significa nuevo registro
	$id        = '';
	$nombre           = '';
	// Haga la impresion de la accio para el controlador
	$accion           = 'nuevoMuni';
}
?>
<?php $this->load->view('other'); ?>
<! ––Carga la vista del Menu de administrador ––>
<div class="container">
	<!-- Navegacion del mantenimiento -->
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>ubicacionController/">Listar
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>ubicacionController/manttoMuni">
						Agregar
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br/>
	
	<!-- formulario -->
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="<?php echo base_url().'ubicacionController/'.$accion; ?>">
				<div class="card">
					<div class="card-header">
						<h2>Administración de municipios</h2>
					</div>
					<div class="card-body">
						<!-- Identificador -->
						<?php echo $id; ?>
						<div class="form-group">
							<label>Nombre del municipio:</label>
							<!-- Entrada -->
							<input type="text" name="txtNombreMuni" class="form-control" value="<?=$nombre;?>" required>
						</div>
					</div>
					<div class="card-footer">
						<!-- Boton de enviar -->
						<button type="submi" class="btn btn-success">ENVIAR</button>
						<!-- Boton de cancelar -->
						<a href='<?=base_url();?>ubicacionController/municipio' class="btn btn-danger">CANCELAR</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Fin formulario -->
</div>