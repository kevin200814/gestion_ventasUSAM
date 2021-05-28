<br><br>
<div class="container">
	<div class="col-md-8 center">
		<form action="<?=base_url().'RecoveryController/recoveryQuery';?>" method="post">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Recuperación de contraseña</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<p style="color: red;font-weight: bold;">
							Estimado usuario, para recuperar su contraseña debe de acordarse de su correo eléctronico, con el cuál se ha seguistrado o posteriormente se le asignó el administrador.
						</p>
						<p style="color: red;font-weight: bold;">
							También debe ingresar su usuario (Nick) el cuál debe estar registrado junto al correo eléctronico.
						</p>
					</div>
					<!-- Entrada para correo electronico -->
					<div class="form-group">
						<label>Ingresa tu correo electronico:</label>
						<input type="email" name="txtEmail" class="form-control" required="Debe ingresar, dato obligatorio" placeholder="Ejem: mail@gmail.com">
					</div>
					<!-- Entrada para nombre de usuario -->
					<div class="form-group">
						<label>Ingresa tu nombre de usuario:</label>
						<input type="text" name="txtUsuario" class="form-control" required="Debe ingresar, dato obligatorio" placeholder="Ejem: username123">
					</div>
				</div>
				<div class="card-footer">
					<!-- Boton de consultar datos -->
					<button type="submit" class="btn btn-success">Consultar</button>
				</div>
			</div>
		</form>
	</div>
</div>
<br><br>