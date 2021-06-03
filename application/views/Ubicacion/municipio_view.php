<?php $this->load->view('other'); ?>
<! ––Carga la vista del Menu de administrador ––>
<div class="container">
	<!-- Navegacion del mantenimiento -->
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Listar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>ubicacionController/manttoMuni">
						Agregar
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br>
	<!-- Listado -->
	<div class="table-responsive">
		<div class="row">
			
			<div class="col">
				
				<table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th>ID_MUNICIPIO</th>
							<th>NOMBRE DEL MUNICIPIO</th>
							<th>ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($listar as $S): ?>
							<tr>
								<td><?=$S->ID_MUNICIPIO ?></td>
								<td><?=$S->NOMBRE_MUNICIPIO ?></td>
								<td>
									<!-- Boton de eliminar -->
									<a href="<?=base_url().'ubicacionController/eliminarMunicipio/'.$S->ID_MUNICIPIO;?>" class="btn btn-danger">
										<i class="bi bi-trash-fill"></i>
									</a>
									<!-- Boton de modificar -->
									<a href="<?=base_url().'ubicacionController/manttoMuni/'.$S->ID_MUNICIPIO;?>" class="btn btn-primary">
										<i class="bi bi-pencil-square"></i>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>

			</div>
		</div>
		<!-- Fin Listado -->

	</div>
</div>
<!-- Script de datatable -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>