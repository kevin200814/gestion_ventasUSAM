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
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>Usuario/viewEdit">
						Mantenimiento
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br/>
	<div class="row">
		<div  class="col-md-10">
			<form   action="<?php echo base_url(); ?>Usuario/ActualizarUs" method="post">
				<div class="card">
					<div class="card-header">
						<h2>Usuarios</h2>
					</div>
					<div class="card-body">
						
						<div class="form-group">
							<label>Nombre:</label>
							<input type="hidden" name="ID_USUARIO" value="<?=$us->ID_USUARIO ?>">
							<input type="text" value="<?=$us->NOMBRES  ?>" name="NOMBRES" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Apellido:</label>
							<input type="text" value="<?=$us->APELLIDOS  ?>" name="APELLIDOS" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Edad:</label>
							<input type="number" value="<?=$us->EDAD  ?>" name="EDAD" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Sexo:</label>
							<select class="form-control" name="ID_SEXO">
								
								<?php foreach ($this->usuarioModel->selectSex() as $p ): ?>

									<option value="<?php echo $p->ID_SEXO ;?>" <?php echo $p->ID_SEXO == 
									$us->ID_SEXO ?  'selected' : "" ?> >
									<?php echo $p->SEXO; ?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<label>E mail:</label>
							<input type="email" value="<?=$us->EMAIL  ?>" name="EMAIL" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Nick Name:</label>
							<input type="text" value="<?=$us->NICK  ?>" name="NICK" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Contraseña :</label>
							<input type="password" value="<?=$us->CONTRASENA  ?>" name="CONTRASENA" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Tipo de usuario :</label>
							<input type="text" value="<?=$us->TIPO_USUARIO  ?>" name="TIPO_USUARIO" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Rol dentro del sistema :</label>
							<select class="form-control" name="ID_ROL">
								<?php foreach ($this->usuarioModel->selectRol() as $r ): ?>

									<option value="<?php echo $r->ID_ROL ;?>" <?php echo $r->ID_ROL == 
									$us->ID_ROL ?  'selected' : "" ?> >
									<?php echo $r->ROL; ?>
									</option>
								<?php endforeach; ?>
							</select>
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
