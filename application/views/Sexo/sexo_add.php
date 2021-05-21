<br/><br/>
<?php
if(isset($sexo_update)){
	$id_sexo        = '<input type="hidden" name="txtId_sexo" value="'.$this->uri->segment(3).'">';
	$sexo           = $sexo_update->SEXO;
	$accion           ='editar';
}
else{
	$id_sexo        = '';
	$sexo           = '';
	$accion           = 'nuevoSexo';
}
?>
<style type="text/css">
	.bi-file-text-fill,.bi-plus-circle{
		color: black;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="panel">Panel de administración
				<small class="tittles-pages-logo">STORE ONLINE</small>
			</h1>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col">

			<nav class="nav" style="background-color: #0A0C57;border-radius: 10px;">
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-person-fill" style="font-size: 25px;"></i>
					Usuarios
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>SexoController">
					<i class="bi bi-people-fill" style="font-size: 25px;"></i>
					Sexo
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-file-earmark-lock-fill" style="font-size: 25px;"></i>
					Roles
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-book-half" style="font-size: 25px;"></i>
					Categorias
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-camera-fill" style="font-size: 25px;"></i>
					Productos
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-truck" style="font-size: 25px;"></i>
					Proveedores
				</a>
				<a class="nav-link active" href="<?php echo base_url(); ?>">
					<i class="bi bi-credit-card" style="font-size: 25px;"></i>
					Pagos
				</a>
				
				<a class="nav-link active" href="<?php echo base_url(); ?>ubicacionController/">
					<i class="bi bi-geo-alt-fill" style="font-size: 25px;"></i>
					Ubicación
				</a>
			</nav>

		</div>
	</div>
	<div class="row">
		<div class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>SexoController/">Listar sexos
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>SexoController/add_sexo">
						Mantenimiento
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br/>
    
	<div class="row">
        <div class="col-md-6">
            <form method="post" action="<?php echo base_url().'SexoController/'.$accion; ?>">
                <div class="card">
                    <div class="card-header">
                        <h2>Administración de sexos</h2>
                    </div>
                    <div class="card-body">
                        <?php echo $id_sexo; ?>
                        <div class="form-group">
                            <label>Nombre del sexo:</label>
                            <input type="text" name="txtSexo" class="form-control" value="<?=$sexo;?>" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submi" class="btn btn-success">ENVIAR</button>
					    <a href='<?=base_url();?>SexoController/' class="btn btn-danger">CANCELAR</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>