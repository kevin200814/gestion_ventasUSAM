<?php $this->load->view('other'); ?>
<! ––Carga la vista del Menu de administrador ––>
<div class="container">
	<!-- Navegacion del mantenimiento -->
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Listar sexos

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>SexoController/add_sexo">
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
							<th>ID_SEXO</th>
							<th>NOMBRE SEXO</th>
							<th>ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($listar as $S): ?>
							<tr>
								<td><?=$S->ID_SEXO ?></td>
								<td><?=$S->SEXO ?></td>
								<td>
									<!-- Boton de eliminar registro -->
									<a href="<?=base_url().'SexoController/eliminar/'.$S->ID_SEXO;?>" class="btn btn-danger">
										<i class="bi bi-trash-fill"></i>
									</a>
									<!-- Boton de actualizar registro -->
									<a href="<?=base_url().'SexoController/add_sexo/'.$S->ID_SEXO;?>" class="btn btn-primary">
										<i class="bi bi-pencil-square"></i>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>

			</div>
		</div>
		<!-- fin del listado -->

	</div>
</div>

<!-- Script datatable -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#table').DataTable();
	} );
</script>