<br/><br/>
<?php
// Si existe una variable que contenga datos entonves
if(isset($sexo_update)){
	// Haga la impresion de dichos datos 
	$id_sexo        = '<input type="hidden" name="txtId_sexo" value="'.$this->uri->segment(3).'">';
	$sexo           = $sexo_update->SEXO;
	// Haga la impresion de la accio para el controlador
	$accion           ='editar';
}
else{ //caso contrario, dejar las variables vacias por que significa nuevo registro
	$id_sexo        = '';
	$sexo           = '';
	// Haga la impresion de la accio para el controlador
	$accion           = 'nuevoSexo';
}
?>
<?php $this->load->view('other'); ?>
<! ––Carga la vista del Menu de administrador ––>
</style>
<div class="container">
	<!-- Navegacion del mantenimiento -->
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>SexoController/">Listar sexos
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>SexoController/add_sexo">
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
			<form method="post" action="<?php echo base_url().'SexoController/'.$accion; ?>">
				<div class="card">
					<div class="card-header">
						<h2>Administración de sexos</h2>
					</div>
					<div class="card-body">
						<!-- Identificador -->
						<?php echo $id_sexo; ?>
						<div class="form-group">
							<label>Nombre del sexo:</label>
							<!-- Entrada -->
							<input type="text" name="txtSexo" class="form-control" value="<?=$sexo;?>" required>
						</div>
					</div>
					<div class="card-footer">
						<!-- Boton de enviar -->
						<button type="submi" class="btn btn-success">ENVIAR</button>
						<!-- Boton de cancelar accion -->
						<a href='<?=base_url();?>SexoController/' class="btn btn-danger">CANCELAR</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- fin del formulario -->

</div>