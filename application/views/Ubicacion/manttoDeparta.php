<br/><br/>
<?php
if(isset($update)){
	$id        = '<input type="hidden" name="txtId" value="'.$this->uri->segment(3).'">';
	$nombre           = $update->NOMBRE_DEPARTAMENTO;
	$id_municipio = $update->ID_MUNICIPIO;
	$accion           ='editarDeparta';
}
else{
	$id        = '';
	$nombre           = '';
	$id_municipio = '';
	$accion           = 'nuevoDeparta';
}
?>
<style type="text/css">
	.bi-file-text-fill,.bi-plus-circle{
		color: black;
	}
</style>
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
				<a class="nav-link active" href="<?php echo base_url(); ?>SexoController">
					<i class="bi bi-people-fill" style="font-size: 25px;"></i>
					Sexo
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-file-earmark-lock-fill" style="font-size: 25px;"></i>
					Roles
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>Categoria/Index">
					<i class="bi bi-book-half" style="font-size: 25px;"></i>
					Categorias
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>Catalogo/CatalogoAdmin">
					<i class="bi bi-camera-fill" style="font-size: 25px;"></i>
					Productos
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>Proveedores/Index">
					<i class="bi bi-truck" style="font-size: 25px;"></i>
					Proveedores
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>tipoPagoController/">
					<i class="bi bi-credit-card" style="font-size: 25px;"></i>
					Pagos
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>ubicacionController/">
					<i class="bi bi-geo-alt-fill" style="font-size: 25px;"></i>
					Ubicación
				</a>
			</nav>

		</div>
	</div>
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

	<div class="row">
		<div class="col-md-6">
			<form method="post" action="<?php echo base_url().'ubicacionController/'.$accion; ?>">
				<div class="card">
					<div class="card-header">
						<h2>Administración de departamentos</h2>
					</div>
					<div class="card-body">
						<?php echo $id; ?>
						<div class="form-group">
							<label>Municipio:</label>
							<select name="txtId_municipio" class="form-control">
								<?php foreach ($municipio as $M): ?>
									<?php if ($accion == ''): ?>
										<option value="<?=$M->ID_MUNICIPIO;?>"><?=$M->NOMBRE_MUNICIPIO;?></option>
										<?php else: ?>
											<option value="<?=$M->ID_MUNICIPIO?>"<?=$M->ID_MUNICIPIO == $id_municipio ? 'selected' : ""; ?>>
												<?=$M->NOMBRE_MUNICIPIO; ?>
											</option>
										<?php endif ?>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label>Nombre del departamento:</label>
								<input type="text" name="txtNombreDepart" class="form-control" value="<?=$nombre;?>" required>
							</div>
						</div>
						<div class="card-footer">
							<button type="submi" class="btn btn-success">ENVIAR</button>
							<a href='<?=base_url();?>ubicacionController/departamento' class="btn btn-danger">CANCELAR</a>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>