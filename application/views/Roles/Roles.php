<?php $this->load->view('other'); ?>
<div class="container">
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Listar Roles

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url().'Roles/rolView' ?>">
						Agregar <i class="bi bi-plus-circle" style="color:white;font-size: 20px;"></i>
					</a>
				</li>
			</ul>
			
		</div>
	</div>
<div class="row">
		
		<div class="col">

	<table id="DataTable" class="table table-bordered col-md-8">

		<thead>
			<th>ID</th>
			<th>Rol</th>
			<th></th>
			<th></th>
		</thead>

		<tbody>

			<?php if (count($r) >0) :?>

				<?php foreach ($r as $r ): ?>
					<tr>
						<td><?php echo $r->ID_ROL ; ?></td>
						<td><?php echo $r->ROL  ; ?></td>

						<td>
							<a class="btn btn-danger" href="<?php echo base_url(). 'Roles/EliminarRol/'.$r->ID_ROL; ?>" >
								<i class="bi bi-trash-fill"></i>
							</a>
						</td>

						<td>
							<a class="btn btn-primary" href="<?php echo base_url(). 'Roles/getRol/'.$r->ID_ROL; ?>" >
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