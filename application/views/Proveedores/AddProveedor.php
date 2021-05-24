<?php $this->load->view('other'); ?>
<div  class="row">
	<div style="left: 90px;" class="col">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>Proveedores/">Listar 
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>Proveedores/InsertarProv">
					Mantenimiento
				</a>
			</li>
		</ul>
		
	</div>
</div>
<br/>
<div class="row">
	<div style="left: 190px;" class="col-md-6">
		<form  action="<?php echo base_url(); ?>Proveedores/InsertarProv" method="post">
			<div class="card">
				<div class="card-header">
					<h2>Proveedores</h2>
				</div>
				<div class="card-body">
					
					<div class="form-group">
						<label>Nombre del Proveedor:</label>
						<input type="text" name="nombre" class="form-control"/>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-success">ENVIAR</button>
					<a href='<?=base_url();?>Proveedores/Index' class="btn btn-danger">CANCELAR</a>
				</div>
			</div>
		</form>
	</div>
</div>
