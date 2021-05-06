<body style="
		background-image: url(<?= base_url('assets/images/fondo_login.jpg')?>);
		background-size: 100%; background-repeat: no-repeat;
		height: 100vh;">

	<br>
	<br>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Store Online</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Iniciar Sesion</h3>
		      	 <!----->
	            <div>
	            	<div align="center">
						<?php
							if (isset($msj_error)) {
								# code...
								?><h4 style="color: #fff"><?php echo $msj_error; ?></h4><?php
							}
							
						?>
					</div>	            		
	            </div>
	            <!------>
		      	<form action="<?= base_url('Login/validateUser')?>" class="signin-form" method="POST" autocomplete="off">
		      		<label>
		      			<?php  echo form_error('username'); ?>
		      		</label>
		      		<div class="form-group">
		      			<input id="username" name="username" type="text" class="form-control" placeholder="Usuario" >
		      		</div>
	            	<label>
		      			<?php  echo form_error('password-field'); ?>
		      		</label>
	            <div class="form-group">
	              <input id="password-field" name="password-field" type="password" class="form-control" placeholder="Contraseña" >
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            	</label>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Ingresar</button>
	            </div>
	            <div>
	            	<div align="center">
						<a href="#" style="color: #fff">¿Olvido su contraseña?</a>
					</div>	            		
	            </div>
	          </form>
	          <br>
	          <p class="w-100 text-center">&mdash; ¿No tienes cuenta? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="<?= base_url('Login/registro_view')?>" class="px-2 py-2 mr-md-1 rounded"> Crear Cuenta</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('assets/js/login/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/js/login/popper.js')?>"></script>
	<script src="<?= base_url('assets/js/login/main.js')?>"></script>
	
	</body>
</html>