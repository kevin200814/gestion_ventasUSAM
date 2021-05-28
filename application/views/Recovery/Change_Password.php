<br><br>
<div class="container">
	<div class="col-md-8 center">
		<form method="post" action="<?=base_url().'RecoveryController/restablecer';?>">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Pregunta de recuperación</h3>
				</div>
				<div class="card-body">
					<!-- Lista de datos ocultos del usuario para actualizar -->
					<input type="hidden" name="id_usuario" value="<?=$usuario->ID_USUARIO;?>">
					<input type="hidden" name="nombres" value="<?=$usuario->NOMBRES;?>">
					<input type="hidden" name="apellidos" value="<?=$usuario->APELLIDOS;?>">
					<input type="hidden" name="edad" value="<?=$usuario->EDAD;?>">
					<input type="hidden" name="id_sexo" value="<?=$usuario->ID_SEXO;?>">
					<input type="hidden" name="email" value="<?=$usuario->EMAIL;?>">
					<input type="hidden" name="nick" value="<?=$usuario->NICK;?>">
					<input type="hidden" name="tipo_usuario" value="<?=$usuario->TIPO_USUARIO;?>">
					<input type="hidden" name="recovery_pregunta" value="<?=$usuario->RECOVERY_PREGUNTA;?>">
					<input type="hidden" name="recovery_respuesta" value="<?=$usuario->RECOVERY_RESPUESTA;?>">
					<input type="hidden" name="id_rol" value="<?=$usuario->ID_ROL;?>">
					<!-- fin de datos ocultos -->
					<div class="form-group">
						<label>Nueva contraseña</label>
						<!-- Entrada para ingresar nueva contraseña -->
						<input type="txt" name="txtContrasena" class="form-control" required="Debe ingresar, dato obligatorio">
					</div>
				</div>
				<div class="card-footer">
					<!-- Boton Enviar -->
					<button type="submit" class="btn btn-success">CAMBIAR</button>
					<!-- Boton de cancelar -->
					<a href="<?=base_url().'RecoveryController/recoveryPassword_Alt';?>" class="btn btn-secondary">CANCELAR</a>
				</div>
			</div>
		</form>
	</div>
</div>
<br><br>