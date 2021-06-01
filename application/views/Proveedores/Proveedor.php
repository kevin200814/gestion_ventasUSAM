


<?php $this->load->view('other'); ?>
<br>
<div class="container">
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Listar sexos

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url().'Proveedores/Vista' ?>">
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


				<table id="data" class="table table-bordered" >

					<thead >
						<tr>
							<th>ID</th>
							<th>Proveedor</th>
							<th></th>
							<th></th>
						</tr>
					</thead>

					<tbody>

						<?php if (count($prov) >0) :?>

							<?php foreach ($prov as $p ): ?>
								<tr>
									<td><?php echo $p->ID_PROVEEDOR; ?></td>
									<td><?php echo $p->NOMBRE_PROVEEDOR ; ?></td>

									<td>
										<a class="btn btn-danger" href="<?php echo base_url().'Proveedores/EliminarProv/'.$p->ID_PROVEEDOR; ?>">

											<i class="bi bi-trash-fill"></i>
										</a>
									</td>

									<td>
										<a class="btn btn-primary" href="<?php echo base_url().'Proveedores/TraerDato/'. $p->ID_PROVEEDOR;?> ">

											<i class="bi bi-pencil-square"></i>
										</a>
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
</div>

<script type="text/javascript">

	$(document).ready( function ()
	{
		$('#data').dataTable();
	} );

</script>














