<?php $this->load->view('other'); ?>

<div class="container">
	<div  class="row">
		<div style="left: 90px;" class="col">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>Catalogo/CatalogoAdmin">Listar 
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>Catalogo/VistaProd">
						Mantenimiento
					</a>
				</li>
			</ul>
			
		</div>
	</div>
	<br/>
	<div class="row">
		<div style="left: 100px;" class="col-md-10">
			<form  enctype="multipart/form-data" action="<?php echo base_url(); ?>Catalogo/Actualizar" method="post">
				<div class="card">
					<div class="card-header">
						<h2>Productos</h2>
					</div>
					<div class="card-body">
						
						<div class="form-group">
							<label>Codigo:</label>
							<input type="hidden" name="ID_PRODUCTO" value="<?=$pro->ID_PRODUCTO ?>">

							<input type="text" name="CODIGO_PRODUCTO" class="form-control" value="<?=$pro->ID_PRODUCTO ?>"/>
						</div>

						<div class="form-group">
							<label>Nombre:</label>
							<input type="text" value="<?=$pro->CODIGO_PRODUCTO ?>" name="NOMBRE_PRODUCTO" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Imagen:</label>
							<input type="file" name="NOMBRE_IMAGEN" class="form-control"/>
							<img style="width: 150px; height: 150px; padding: 6px;"  src="<?=base_url()?>./assets/images/Upload/<?php echo $pro->NOMBRE_IMAGEN  ;?>">
						</div>

						<div class="form-group">
							<label>Marca:</label>
							<input type="text" value="<?=$pro->MARCA ?>" name="MARCA" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Especificacion:</label>
							<input value="<?=$pro->ESPECIFICACIONES ?>" type="text" name="ESPECIFICACIONES" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Proveedor:</label>
							<select class="form-control" name="ID_PROVEEDOR">

								<?php foreach ($this->catalogoModel->SelectProv() as $p ): ?>

									<option value="<?php echo $p->ID_PROVEEDOR ;?>" <?php echo $p->ID_PROVEEDOR == 
									$pro->ID_PROVEEDOR ?  'selected' : "" ?> >
									<?php echo $p->NOMBRE_PROVEEDOR; ?>

								</option>

							<?php endforeach; ?>

						</select>
						</div>
						

						
						<div class="form-group">
							<label>Categoria:</label>
							<select  class="form-control" name="ID_CATEGORIA">

								<?php foreach ($this->catalogoModel->SelectCat() as $c ): ?>

									<option value="<?php echo $c->ID_CATEGORIA; ?>" <?php echo $c->ID_CATEGORIA  == 
									$pro->ID_CATEGORIA  ?  'selected' : "" ?>>
									<?php echo $c->NOMBRE_CATEGORIA ; ?></option>

								<?php endforeach; ?>
							</select>
							</div>
						<div class="form-group">
							<label>Stock Inicial:</label>
							<input value="<?=$pro->STOCK_INICIAL ?>" type="number" name="STOCK_INICIAL" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Entradas :</label>
							<input value="<?=$pro->ENTRADAS ?>" type="number" name="ENTRADAS" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Salidas :</label>
							<input value="<?=$pro->SALIDAS ?>" type="number" name="SALIDAS" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Existencia :</label>
							<input value="<?=$pro->CANTIDAD_EXISTENCIA ?>" type="number" name="CANTIDAD_EXISTENCIA" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Precio :</label>
							<input value="<?=$pro->PRECIO ?>" type="text" name="PRECIO" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Estado :</label>
							<input value="<?=$pro->ESTADO ?>" type="text" name="ESTADO" class="form-control"/>
						</div>

						<div class="form-group">
							<label>Oferta :</label>
							<input value="<?=$pro->OFERTA ?>" type="text" name="OFERTA" class="form-control"/>
						</div>

					</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success">EDITAR</button>

						<a href='<?=base_url();?>Catalogo/CatalogoAdmin' class="btn btn-danger">CANCELAR</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
