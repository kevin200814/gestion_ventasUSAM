
<?php $this->load->view('other'); ?>
<br>
<div class="container">
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Listar Usuarios

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url().'Usuario/ViewUser' ?>">
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
							<th>Nombres </th>
							<th>Apellidos</th>
							<th>Edad</th>
							<th>Sexo</th>
							<th>E-mail</th>
							<th>Nick</th>
							<th>Tipo Usuario</th>
							<th>Rol</th>
							<th></th>
							<th></th>
						</tr>
					</thead>

					<tbody>

						<?php if (count($us) >0) :?>

							<?php foreach ($us as $u ): ?>
								<tr>
									<td><?php echo $u->ID_USUARIO; ?></td>
									<td><?php echo $u->NOMBRES; ?></td>
									<td><?php echo $u->APELLIDOS ; ?></td>
									<td><?php echo $u->EDAD; ?></td>
									<td><?php echo $u->SEXO ; ?></td>
									<td><?php echo $u->EMAIL; ?></td>
									<td><?php echo $u->NICK; ?></td>
									<td><?php echo $u->TIPO_USUARIO; ?></td>
									<td><?php echo $u->ROL; ?></td>

									<td>
										<a class="btn btn-danger" href="<?php echo base_url().'Usuario/EliminarUs/'.$u->ID_USUARIO; ?>">

											<i class="bi bi-trash-fill"></i>
										</a>
									</td>

									<td>
										<a class="btn btn-primary" href="<?php echo base_url().'Usuario/viewEdit/'. $u->ID_USUARIO;?> ">

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














