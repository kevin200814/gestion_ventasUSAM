<?php $this->load->view('other'); ?>
<br>
<div class="container">
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Listar Productos

					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url().'Catalogo/VistaProd' ?>">
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

				<table id="DataTable" class="table table-bordered">

					<thead>
						<th>Producto</th>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Marca</th>
						<th>Especificacion</th>
						<th>Proveedor</th>
						<th>Categoria</th>
						<th>Stock</th>
						<th>Entradas</th>
						<th>Salidas</th>
						<th>Existencia</th>
						<th>Precio</th>
						<th>Estado</th>
						<th>Oferta</th>
						<th></th>
						<th></th>

					</thead>

					<tbody>

						<?php if (count($prod) >0) :?>

							<?php foreach ($prod as $c ): ?>
								<tr>
									<td>
										<img style="width: 150px; height: 150px; padding: 6px;" src="<?=base_url()?>./assets/images/Upload/<?php echo $c->NOMBRE_IMAGEN ;?>"></td>

										<td><?php echo $c->CODIGO_PRODUCTO ; ?></td>
										<td><?php echo $c->NOMBRE_PRODUCTO  ; ?></td>
										<td><?php echo $c->MARCA ; ?></td>
										<td><?php echo $c->ESPECIFICACIONES  ; ?></td>
										<td><?php echo $c->NOMBRE_PROVEEDOR   ; ?></td>
										<td><?php echo $c->NOMBRE_CATEGORIA   ; ?></td>
										<td><?php echo $c->STOCK_INICIAL  ; ?></td>
										<td><?php echo $c->ENTRADAS  ; ?></td>
										<td><?php echo $c->SALIDAS  ; ?></td>
										<td><?php echo $c->CANTIDAD_EXISTENCIA  ; ?></td>
										<td><?php echo $c->PRECIO  ; ?></td>
										<td><?php echo $c->ESTADO  ; ?></td>
										<td><?php echo $c->OFERTA  ; ?></td>


										<td>
											<a class="btn btn-danger" href="<?php echo base_url(). 'Catalogo/EliminarProd/'.$c->ID_PRODUCTO; ?>" >
												<i class="bi bi-trash-fill"></i>
											</a>
										</td>

										<td>
											<a class="btn btn-primary" href="<?php echo base_url(). 'Catalogo/EditProducto/'.$c->ID_PRODUCTO; ?>" >
												<i class="bi bi-pencil-square"></i>
											</a>
										</td>
									</tr>

								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>

		<?php else:?>
			<h2>Actualmente no existen datos</h2>
		<?php endif;?>

		<script type="text/javascript" >

			$(document).ready( function () {
				$('#DataTable').DataTable();
			} );
		</script>
	</div>
