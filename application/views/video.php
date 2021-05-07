<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2>Video</h2>
		<br>
		<br>
		<div class="container">
			<div class="row">
				<?php foreach ($video as $valor): ?>
					<div class="col-md-4">
						<form action="<?php echo base_url(); ?>producto/agregarCarrito" method="post">
							<div class="card" style="width: 18rem;">

								<img class="card-img-top" src="<?php echo base_url().'assets/images/'.$valor->NOMBRE_IMAGEN; ?>" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title"><?=$valor->NOMBRE_PRODUCTO ?></h5>
									<p class="card-text"><?=$valor->ESPECIFICACIONES ?></p>
									<p class="card-text"><b>Precio: </b> $ <?=number_format($valor->PRECIO ,2); ?></p>

									<label><b>Cantidad:</b></label>

									<input type="hidden" name="ID_PRODUCTO" value="<?=$valor->ID_PRODUCTO ?>">
									<input type="hidden" name="NOMBRE_PRODUCTO" value="<?=$valor->NOMBRE_PRODUCTO ?>">
									<input type="number" name="CANTIDAD" min="0" max="<?=$valor->STOCK_INICIAL ?>">
									<input type="hidden" name="PRECIO" value="<?=$valor->PRECIO ?>">
									<br>
									<br>
									<input type="submit" class="btn btn-success" name="Enviar" value="Enviar">
								</div>
							</div>
						</form>
						<br>
						<br>
					</div>
				<?php endforeach; ?>

			</div>
		</div>

	</div>
</body>
</html>
</body>
</html>