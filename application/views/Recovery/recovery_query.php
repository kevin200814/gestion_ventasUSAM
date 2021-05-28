<br><br>
<div class="container">
	<div class="col-md-8 center">
		<form method="post" action="<?=base_url().'RecoveryController/recoveryVefication';?>">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Pregunta de recuperación</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Correo electronico:</label>
						<!-- Entrada para correo electronico -->
						<input type="email" name="txtEmail" class="form-control" value="<?=$datos->EMAIL;?>" readonly/>
					</div>
					
					<div class="form-group">
						<label>Nickname:</label>
						<!-- Entrada para nombre de usuario -->
						<input type="text" name="txtUsuario" class="form-control" value="<?=$datos->NICK;?>" readonly/>
					</div>
					<div class="form-group">
						<label>Pista: <?=$datos->RECOVERY_PREGUNTA;?></label>
						<!-- Entrada para pregunta de recuperacion -->
						<input type="hidden" name="txtPregunta" value="<?=$datos->RECOVERY_PREGUNTA;?>">
						<!-- Entrada para respuesta de recuperacion -->
						<input type="text" name="txtRespuesta" class="form-control" required="Debe ingresar, dato obligatorio">
					</div>
				</div>
				<div class="card-footer">
					<!-- Boton para consultar -->
					<button type="submit" class="btn btn-success">CONSULTAR</button>
					<!-- Boton para cancelar -->
					<a href="<?=base_url().'RecoveryController/recoveryPassword_Alt';?>" class="btn btn-secondary">CANCELAR</a>
				</div>
			</div>
		</form>
	</div>
</div>
<br><br>