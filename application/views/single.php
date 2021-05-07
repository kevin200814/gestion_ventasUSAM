<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php foreach ($producto as $valor): ?>
				<div class="col-md-6">
					<br>
					<br>
					<img src="<?php echo base_url().'assets/images/'.$valor->NOMBRE_IMAGEN; ?>" style="width: 475px;height: 575px" >
				</div>
				<div class="col-md-6">
					<br>
					<br>
					<h3 class="mb-3"><?=$valor->NOMBRE_PRODUCTO ?></h3>
					<p class="mb-3">
						<br>
						<br>
						<span class="item_price"><b>Precio: </b> $ <?=number_format($valor->PRECIO ,2); ?></span>
						
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3"> <b>Marca: </b><br>
								<?=$valor->MARCA ?>
							</li>
							<li class="mb-3"><b>Especificaciones: </b><br>
								<?=$valor->ESPECIFICACIONES ?>
							</li>
							
						</ul>
					</div>
					<!--<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>1 Year</label>Manufacturer Warranty</p>
							<ul>
								<li class="mb-1">
									3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
								</li>
								<li class="mb-1">
									5.5 inch Full HD Display
								</li>
								<li class="mb-1">
									13MP Rear Camera | 8MP Front Camera
								</li>
								<li class="mb-1">
									3300 mAh Battery
								</li>
								<li class="mb-1">
									Exynos 7870 Octa Core 1.6GHz Processor
								</li>
							</ul>
							<p class="my-sm-4 my-3">
								<i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
							</p>
						</div>-->
						<br>
						<div class="occasion-cart">
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
								<form action="<?php echo base_url(); ?>producto/agregarCarrito" method="post">
									<fieldset>
										<input type="hidden" name="ID_PRODUCTO" value="<?=$valor->ID_PRODUCTO ?>">
										<input type="hidden" name="NOMBRE_PRODUCTO" value="<?=$valor->NOMBRE_PRODUCTO ?>">
										<label>Cantidad:</label>
										<br>
										<input type="number" class="form-control" name="CANTIDAD" min="0" max="<?=$valor->STOCK_INICIAL ?>">
										<input type="hidden"  name="PRECIO" value="<?=$valor->PRECIO ?>">
										<br>
										<br>	
										<input type="submit" class="btn btn-success" name="Enviar" value="Agregar al carrito">
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
</div>

</body>
</html>