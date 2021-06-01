<?php $this->load->view('other'); ?>
<! ––Carga la vista del Menu de administrador ––>

<div class="container">
	<div  class="row">
		<div  class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>Roles/">Listar 
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>Roles/">
						Mantenimiento
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br>
	<div class="row">
		<div style="left: 190px;" class="col-md-6">
			<form  action="<?php echo base_url(); ?>Roles/ActualizaRol" method="post">
				<div class="card">
					<div class="card-header">
						<h2>Roles</h2>
					</div>
					<div class="card-body">
						
						<div class="form-group">
							<label>Nombre del Rol:</label>
							<input value="<?=$rol->ROL ?>" type="text" name="ROL" class="form-control"/>
						</div>

						<! ––Campo de texto escondido con valor del ID para la funcion actualizar ––>

						<input value="<?=$rol->ID_ROL ?>" type="hidden" name="ID_ROL" class="form-control"/>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success">ENVIAR</button>

						<a href='<?=base_url();?>Roles/Index' class="btn btn-danger">CANCELAR</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
