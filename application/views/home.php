<style type="text/css">

	.carousel-caption{
		background: rgba(16, 16, 16, 0.27);
		text-align: left;
		box-shadow: 0px 2px 2px 2px rgba(2, 2, 2, 0.43);

	}

	.carousel-caption h2,
	.carousel-caption h3 {
		font-size: 60px;
		letter-spacing: 4px;
		text-transform: uppercase;
		text-shadow: 3px 8px 2px rgb(12, 12, 12);
	}

	.carousel-caption h2 span,
	.carousel-caption h3 span {
		font-weight: 800;
		color: #F45C5D;
	}


</style>
</body>
</html>	

<div class="container-fluid">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100 ima" style="height: 470px;" src="<?php echo base_url(); ?>assets/images/1.jpg" alt="First slide">
				<div class="w3l-space-banner">
					<div class="carousel-caption p-lg-5 p-sm-4 p-3">
						<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Nuevos
							<span>Productos</span>
						</h3>

					</div>

				</div>

			</div>

			<div class="carousel-item">
				<img class="d-block w-100 ima" style="height: 470px;" src="<?php echo base_url(); ?>assets/images/2.jpg" alt="Second slide">
				<div class="w3l-space-banner">
					<div class="carousel-caption p-lg-5 p-sm-4 p-3">
						<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Solo
							<span>Para ti</span>
						</h3>

					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100 ima" style="height: 470px;"  src="<?php echo base_url(); ?>assets/images/3.jpg" alt="Third slide">
				<div class="w3l-space-banner">
					<div class="carousel-caption p-lg-5 p-sm-4 p-3">

						<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Siempre
							<span>a tu alcance</span>
						</h3>

					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span> 
		</a>
	</div>
</div>

<br>
<br>


</body>
</html>