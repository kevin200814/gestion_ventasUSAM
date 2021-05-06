<!DOCTYPE html>
<html>
<head>
	<title>Inciar Sesión</title>
</head>
<body>
	<div class="container">
		<form>
			<label>Usuario:</label>
			<input type="tex" class="form-control" name="Usuario">
			<br/>
			<label>Contraseña:</label>
			<input type="password" class="form-control" name="contrasena">
			<br/>
			<a href="<?=base_url();?>RecoveryController/recoveryPassword_Alt">¿olvistaste tu contraseña?</a>
			<br/>
			<button type="submit">Logear</button>
		</form>
	</div>
</body>
</html>