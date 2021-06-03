<?php $this->load->view('other'); ?>
<! ––Carga la vista del Menu de administrador ––>
<div class="container">
	<!-- Navegacion del mantenimiento -->
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>tipoPagoController/">Listar
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>tipoPagoController/manttoTipoPago">
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
							<th>ID</th>
							<th>NOMBRE DE TIPO DE PAGO</th>
							<th>ACCIONES</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($listar as $L): ?>
							<tr>
								<td><?=$L->ID_TIPO_PAGO ?></td>
								<td><?=$L->TIPO_PAGO ?></td>
								<td>
									<!-- Boton de eliminar registro -->
									<a href="<?=base_url().'tipoPagoController/eliminar/'.$L->ID_TIPO_PAGO;?>" class="btn btn-danger">
										<i class="bi bi-trash-fill"></i>
									</a>
									<!-- Boton de actualizar registro -->
									<a href="<?=base_url().'tipoPagoController/manttoTipoPago/'.$L->ID_TIPO_PAGO;?>" class="btn btn-primary">
										<i class="bi bi-pencil-square"></i>
									</a>
								</td>
							</tr>
						<?php endforeach;?>
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