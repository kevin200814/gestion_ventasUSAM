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
	<!-- Navegacion del mantenimiento -->
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>ubicacionController/">Listar
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>ubicacionController/manttoDeparta">
						Agregar
					</a>
				</li>
			</ul>
			
		</div>
	</div>

	<br/>
	<!-- Listado -->
	<div class="row">
		
		<div class="col">
			
			<table id="table" class="table table-bordered">
				<thead>
					<tr>
						<th>ID_DEPARTAMENTO</th>
						<th>NOMBRE DE DEPARTAMENTO</th>
						<th>MUNICIPIO</th>
						<th>ACCIONES</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($listar as $L): ?>
						<tr>
							<td><?=$L->ID_DEPARTAMENTO ?></td>
							<td><?=$L->NOMBRE_DEPARTAMENTO ?></td>
							<td><?=$L->NOMBRE_MUNICIPIO ?></td>
							<td>
								<!-- Boton de eliminar registro -->
								<a href="<?=base_url().'ubicacionController/eliminarDeparta/'.$L->ID_DEPARTAMENTO;?>" class="btn btn-danger">
									<i class="bi bi-trash-fill"></i>
								</a>
								<!-- Boton de modificar registro -->
								<a href="<?=base_url().'ubicacionController/manttoDeparta/'.$L->ID_DEPARTAMENTO;?>" class="btn btn-primary">
									<i class="bi bi-pencil-square"></i>
								</a>
							</td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>

		</div>
	</div>
	<!-- Fin listado -->
</div>

<!-- Script de datatable -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>