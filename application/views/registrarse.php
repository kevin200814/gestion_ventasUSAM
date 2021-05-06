<style type="text/css">
	.button {
    background-color: #FFFFFF; /* Green */
    color: #000000;
    padding: 9px 140px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #FFFFFF;
}

.button1:hover {
    border: 2px solid #000000;
}
.boton
{
	background-color: green;
	padding: 0px 25px

}

.boton:hover
{
	background-color: #42893B; 
}
</style>

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
				<div class="col-md-6 col-lg-10">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Crear Cuenta</h3>
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
		      	<form action="<?= base_url('Login/inserUser')?>" class="signin-form" method="POST" autocomplete="off">
		      		<div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
				      			<input id="nombres" name="nombres" type="text" class="form-control" placeholder="Ingrese sus nombres" >
				      		</div>
				      	</div>
				      	<div class="col-md-6">
                            <div class="form-group">
				      			<input id="apellidos" name="apellidos" type="text" class="form-control" placeholder="Ingrese sus apellidos" >
				            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
				      			<input id="correo" name="correo" type="text" class="form-control" placeholder="Ingrese su correo" >
				      		</div>
				      	</div>
				      	<div class="col-md-6">
                            <div class="form-group">
				      			<input id="edad" name="edad" type="text" class="form-control" placeholder="Ingrese su edad">
				      		</div>
				      	</div>
				    </div>
				    <div class="row">
				    	<div class="col-md-4">
                            <div class="form-group">
				      			<input id="nick" name="nick" type="text" class="form-control" placeholder="Ingrese su nombre de usuario">
				            </div>
                        </div>
				    	<div class="col-md-4">
                            <div class="form-group">
				      			<select class="form-control" id="tusuario" name="tusuario">
				      				<option disabled>Selecciona tu tipo de usuario</option>
				      				<option value="Ocasional" style="color:black;">Ocasional</option>
				      				<option value="Minorista" style="color:black;">Minorista</option>
				      				<option value="Mayorista" style="color:black;">Mayorista</option>
				      			</select>
				            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" style="top:10px;">
				      			<label>Masculino
							  		<input type="radio" name="sexo" value="1">
								</label>
								&nbsp;&nbsp;&nbsp;
								<label>Femenino
							  		<input type="radio" name="sexo" value="2">
								</label>
				            </div>
                        </div>
				    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            	<input id="pass" name="pass" type="password" class="form-control" placeholder="Ingrese contraseña">
	              				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				      		</div>
				      	</div>
				      	<div class="col-md-6">
                            <div class="form-group">
                            	<input id="confipass" name="confipass" type="password" class="form-control" placeholder="Confirmar contraseña">
	              				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				            </div>
                        </div>
                    </div>
                    <center>
                     	<div class="row">
                     		<div class="col-md-4"></div>
	                        <div class="col-md-4">
                        		<button type="submit" class="form-control btn boton">Crear</button>
                        	</div>
                        	<div class="col-md-4"></div>
                    	</div>
                    </center>
                </div>
	          </form>
	          <br>
	          <p class="w-100 text-center">&mdash; ¿Ya tienes una cuenta? &mdash;</p>
	          	<div>
	          		<center><a href="<?= base_url('Login/login_view')?>"><button class="button button1">Iniciar Sesion</button></a></center>
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