<?php $this->load->view('other'); ?>

<div class="container">
	<div  class="row">
		<div style="left: 90px;" class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>Categoria/">Listar 
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>Categoria/TraerCategoria">
						Mantenimiento
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br/>
	<div class="row">
		<div style="left: 190px;" class="col-md-6">
			<form  action="<?php echo base_url(); ?>Categoria/ActualizarCategoria"  method="post">
				<div class="card">
					<div class="card-header">
						<h2>Categorias</h2>
					</div>
					<div class="card-body">
						
						<div class="form-group">
							<label>Nombre de la Categoria:</label>

							<input type="text" name="NOMBRE_CATEGORIA" value="<?=$cate->NOMBRE_CATEGORIA ?>" class="form-control"/>
						</div>

						<input type="hidden" value="<?=$cate->ID_CATEGORIA ?>"  name="ID_CATEGORIA" />
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success">EDITAR</button>

						<a href='<?=base_url();?>Categoria/Index' class="btn btn-danger">CANCELAR</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
