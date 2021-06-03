<?php $this->load->view('other'); ?>
<! ––Carga la vista del Menu de administrador ––>
<div class="container">
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
	<div class="table-responsive">
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
</div>

<!-- Script de datatable -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>