<br/><br/> 
<?php
// Si existe una variable que contenga datos entonves
if(isset($update)){
	// Haga la impresion de dichos datos 
	$id        = '<input type="hidden" name="txtId" value="'.$this->uri->segment(3).'">';
	$nombre           = $update->NOMBRE_DEPARTAMENTO;
	$id_municipio = $update->ID_MUNICIPIO;
	// Haga la impresion de la accio para el controlador
	$accion           ='editarDeparta';
}
else{ //caso contrario, dejar las variables vacias por que significa nuevo registro
	$id        = '';
	$nombre           = '';
	$id_municipio = '';
	// Haga la impresion de la accio para el controlador
	$accion           = 'nuevoDeparta';
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
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>ubicacionController/departamento">Listar
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo base_url(); ?>ubicacionController/manttoDeparta">
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
						<h2>Administración de departamentos</h2>
					</div>
					<div class="card-body">
						<!-- Identificador -->
						<?php echo $id; ?>
						<div class="form-group">
							<label>Municipio:</label>
							<select name="txtId_municipio" class="form-control">
								<!-- Enlista todos los municipios disponibles -->
								<?php foreach ($municipio as $M): ?>
									<!-- Si la accion es nuevoDeparta es un nuevo registro -->
									<?php if ($accion == 'nuevoDeparta'): ?>
										<option value="<?=$M->ID_MUNICIPIO;?>"><?=$M->NOMBRE_MUNICIPIO;?></option>
										<!-- Sino la accion es modificar el registro -->
										<?php else: ?>
											<!-- realiza una comparacion -->
											<option value="<?=$M->ID_MUNICIPIO?>"<?=$M->ID_MUNICIPIO == $id_municipio ? 'selected' : ""; ?>>
												<?=$M->NOMBRE_MUNICIPIO; ?>
											</option>
										<?php endif ?>
										<!-- Fin SI -->
									<?php endforeach; ?>
									<!-- Fin recorrido -->
								</select>
							</div>
							<div class="form-group">
								<label>Nombre del departamento:</label>
								<!-- Entrada -->
								<input type="text" name="txtNombreDepart" class="form-control" value="<?=$nombre;?>" required>
							</div>
						</div>
						<div class="card-footer">
							<!-- Boton de enviar -->
							<button type="submi" class="btn btn-success">ENVIAR</button>
							<!-- Boton de cancelar accion -->
							<a href='<?=base_url();?>ubicacionController/departamento' class="btn btn-danger">CANCELAR</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- fin del formulario -->
	</div>