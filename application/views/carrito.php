<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carrito.css">

</head>
<body>
  <div class="page-head_agile_info_w3l"></div>
  <br>
  <br>
  <div class="container table-responsive">
    <form method="post" action="<?php echo base_url(); ?>carrito/actualizarCarrito">
       <h1 class="subtitu"><span class="titu">CARRITO DE COMPRAS </span><b>STORE ONLINE</b></h1>
       
      <table class="timetable_sub">
        <tr>
          <th>Codigo de Producto</th>
          <th>Nombre del producto</th>
          <th>Precio del producto</th>
          <th>Cantidad</th> 
          <th></th>
          <th>SubTotal:</th>
        </tr>

        <?php 
        $i = 1;
        foreach ($this->cart->contents() as $item):
         ?>
         <input type="hidden" name="<?php echo $i; ?>[rowid]" value="<?php echo $item['rowid'];  ?>">
         <tr>
          <!--Muestra el codigo de producto-->
          <td><?php echo $item['id']; ?></td>
          <!--Muestra Nombre del producto-->
          <td><?php echo $item['name'];  ?></td>s
          <!--Muestra el precio del producto-->
          <td>$ <?php echo number_format($item['price'], 2, ',','.') ?></td>
          <td>
            <input type="number" class="form-control con"  min="0" name="<?php echo $i; ?>[qty]" value="<?php echo $item['qty']; ?>" maxlength="3" size="2">
          </td>
          <td>
            <button type="submit"class="btn btn-success boton"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
              <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
            </svg></button>
          </td>
          <!--Muestra el subtotal del producto-->
          <td>
            <?php echo number_format($item['subtotal'],2,',','.') ?>
          </td>
        </tr>

        <?php 
        $i++;
      endforeach; ?>

      <tr>
        <td colspan="4" >
          <?php echo anchor('carrito/vaciarCarrito', 'Vaciar Carrito','style="color:black"') ?>
        </td>

        <td><b>Total a cancelar:</b></td>
        <td>$ <?php echo number_format($this->cart->total(),2,',','.'); ?></td>
      </tr>

    </table>
  </form>




  <?php 
  $i = 1;
  foreach ($this->cart->contents() as $item):
   ?>
   <form method="post" action="<?php echo base_url(); ?>carrito/registrarDatos">
    <input type="hidden" class="form-control "  min="0" name="ID_PRODUCTO[]" value="<?php echo $item['id']; ?>" >
    <input type="hidden" class="form-control "  min="0" name="PRODUCTO[]" value="<?php echo $item['name']; ?>" >
    <input type="hidden" class="form-control "  min="0" name="PRECIO[]" value="<?php echo $item['price']; ?>" >
    <input type="hidden" class="form-control"  min="0" name="CANTIDAD[]" value="<?php echo $item['qty']; ?>" >
    <input type="hidden" name="FECHA" value="<?php echo date('d-m-Y') ?>">
    <input type="hidden" class="form-control "  min="0" name="SUBTOTAL[]" value="<?php echo $item['subtotal']; ?>" >
    <?php 
    $i++;
  endforeach; ?>    
  <input type="hidden" class="form-control "  min="0" name="TOTAL_FINAL" value="<?php echo $this->cart->total(); ?>" >
  <br>
  <br>
  <input type="submit" name="Enviar" value="Enviar"> 

</form>

</div>
<br>
<br>
</body>
</html>