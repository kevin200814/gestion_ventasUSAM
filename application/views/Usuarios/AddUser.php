<?php $this->load->view('other'); ?>

<div class="container">
	<div  class="row">
		<div style="left: 90px;" >
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>Usuario">Listar 
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>Usuario/ViewUser">
						Mantenimiento
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br/>
	<div class="row">
		<div  class="col-md-10">
			<form   action="<?php echo base_url(); ?>Usuario/InsertUser" method="post">
				<div class="card">
					<div class="card-header">
						<h2>Usuarios</h2>
					</div>
					<div class="card-body">
						
						<div class="form-group">
							<label>Nombre:</label>
							<input type="text" name="NOMBRES" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Apellido:</label>
							<input type="text" name="APELLIDOS" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Edad:</label>
							<input type="number" name="EDAD" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Sexo:</label>
							<select class="form-control" name="ID_SEXO">
								<option>Seleccione</option>
								<?php foreach ($sex as $s ): ?>
									<option value="<?php echo $s->ID_SEXO;?>">
										<?php echo $s->SEXO; ?>

									</option>

								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<label>E mail:</label>
							<input type="email" name="EMAIL" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Nick Name:</label>
							<input type="text" name="NICK" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Contraseña :</label>
							<input type="password" name="CONTRASENA" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Tipo de usuario :</label>
							<input type="text" name="TIPO_USUARIO" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Rol dentro del sistema :</label>
							<select class="form-control" name="ID_ROL">
								<option>Seleccione</option>

								<?php foreach ($rol as $p ): ?>
									<option value="<?php echo $p->ID_ROL ;?>">
										<?php echo $p->ROL; ?>

									</option>

								<?php endforeach; ?>
							</select>
						</div>

						

					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success">ENVIAR</button>

						<a href='<?=base_url();?>Catalogo/CatalogoAdmin' class="btn btn-danger">CANCELAR</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
