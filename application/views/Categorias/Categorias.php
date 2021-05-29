<?php $this->load->view('other'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Listar sexos

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url().'Categoria/VistaCat' ?>">
						Agregar <i class="bi bi-plus-circle" style="color:white;font-size: 20px;"></i>
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br>
	<div class="table-responsive">
		<div class="row">

			<div class="col">

				<table id="DataTable" class="table table-bordered col-md-8">

					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th></th>
						<th></th>
					</thead>

					<tbody>

						<?php if (count($cat) >0) :?>

							<?php foreach ($cat as $c ): ?>
								<tr>
									<td><?php echo $c->ID_CATEGORIA; ?></td>
									<td><?php echo $c->NOMBRE_CATEGORIA ; ?></td>

									<td>
										<a class="btn btn-danger" href="<?php echo base_url(). 'Categoria/EliminarCat/'.$c->ID_CATEGORIA; ?>" >
											<i class="bi bi-trash-fill"></i>
										</a>
									</td>

									<td>
										<a class="btn btn-primary" href="<?php echo base_url(). 'Categoria/TraerCategoria/'.$c->ID_CATEGORIA; ?>" >
											<i class="bi bi-pencil-square"></i>
										</td>
									</tr>

								<?php endforeach; ?>
							</tbody>
						</table>

					<?php else:?>
						<h2>Actualmente no existen datos</h2>
					<?php endif;?>
				</div>
			</div>

		</div>

		<script type="text/javascript" >

			$(document).ready( function () {
				$('#DataTable').DataTable();
			} );
		</script>
	</div>
