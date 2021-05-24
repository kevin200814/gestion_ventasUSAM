<br/><br/>
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
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-book-half" style="font-size: 25px;"></i>
					Categorias
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-camera-fill" style="font-size: 25px;"></i>
					Productos
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-truck" style="font-size: 25px;"></i>
					Proveedores
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
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
	<br/>
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Listar sexos

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>SexoController/add_sexo">
						Agregar <i class="bi bi-plus-circle" style="color:white;font-size: 20px;"></i>
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<div class="row">
		
		<div class="col">
			
			<table id="table" class="table table-bordered">
				<thead>
					<tr>
						<th>ID_SEXO</th>
						<th>NOMBRE SEXO</th>
						<th>ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($listar) > 0): ?>
						<?php foreach ($listar as $S): ?>
							<tr>
								<td><?=$S->ID_SEXO ?></td>
								<td><?=$S->SEXO ?></td>
								<td>
									<a href="<?=base_url().'SexoController/eliminar/'.$S->ID_SEXO;?>" class="btn btn-danger">
										<i class="bi bi-trash-fill"></i>
									</a>
									<a href="<?=base_url().'SexoController/add_sexo/'.$S->ID_SEXO;?>" class="btn btn-primary">
										<i class="bi bi-pencil-square"></i>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
						<?php else: ?>
							<div class="alert alert-warning" role="alert">
								¡No hay datos!
							</div>
						<?php endif ?>
					</tbody>
				</table>

			</div>
		</div>

	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable();
		} );
	</script>