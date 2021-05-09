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
		<div class="container">
			<div class="row">
				<?php foreach ($video as $valor): ?>
					<div class="col-md-3">
						<form action="<?php echo base_url(); ?>Carrito/agregarCarrito" method="post">
							<div class="card" style="width: 14rem;">
								<br>
								<center>
									<img class="card-img-top tagImg" src="<?php echo base_url().'assets/images/'.$valor->NOMBRE_IMAGEN; ?>" alt="Card image cap" style="width: 115px;height: 125px">
								</center>

								<div class="card-body">

									<h5 class="card-title"><?=$valor->NOMBRE_PRODUCTO ?></h5>
									<p class="card-text"><b>Precio: </b> $ <?=number_format($valor->PRECIO ,2); ?></p>

									<label><b>Cantidad:</b></label>
									<input type="hidden" name="ID_PRODUCTO" value="<?=$valor->ID_PRODUCTO ?>">
									<input type="hidden" name="NOMBRE_PRODUCTO" value="<?=$valor->NOMBRE_PRODUCTO ?>">
									<input type="number" class="form-control" name="CANTIDAD" min="0" max="<?=$valor->STOCK_INICIAL ?>">

									<input type="hidden"  name="PRECIO" value="<?=$valor->PRECIO ?>">
									<br>

									<input type="submit" style="width: 190px;" class="btn btn-success" name="Enviar" value="Agregar al carrito">
									<br>
									<br>
									<a style="width: 190px;" href="<?php echo base_url().'catalogo/verDetalle/' .$valor->ID_PRODUCTO?>" class="btn btn-primary">Ver Detalles</a>

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