<br/><br/> 
<?php
// Si existe una variable que contenga datos entonves
if(isset($update)){
	// Haga la impresion de dichos datos 
	$id        = '<input type="hidden" name="txtId" value="'.$this->uri->segment(3).'">';
	$nombre           = $update->TIPO_PAGO;
	// Haga la impresion de la accio para el controlador
	$accion           ='editarTpago';
}
else{ //caso contrario, dejar las variables vacias por que significa nuevo registro
	$id        = '';
	$nombre           = '';
	// Haga la impresion de la accio para el controlador
	$accion           = 'nuevoTpago';
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
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>tipoPagoController/">Listar
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo base_url(); ?>tipoPagoController/manttoTipoPago">
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
			<form method="post" action="<?php echo base_url().'tipoPagoController/'.$accion; ?>">
				<div class="card">
					<div class="card-header">
						<h2>Administración de tipo de pagos</h2>
					</div>
					<div class="card-body">
						<!-- Identificador -->
						<?php echo $id; ?>
						<div class="form-group">
							<label>Nombre del tipo de pago:</label>
							<!-- Entrada -->
							<input type="text" name="txtNombre" class="form-control" value="<?=$nombre;?>" required>
						</div>
					</div>
					<div class="card-footer">
						<!-- Boton de enviar -->
						<button type="submi" class="btn btn-success">ENVIAR</button>
						<!-- Boton de cancelar accion -->
						<a href='<?=base_url();?>tipoPagoController/' class="btn btn-danger">CANCELAR</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- fin del formulario -->
</div>