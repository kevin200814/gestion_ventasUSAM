<script type="text/javascript">
  $('.carousel').carousel()
</script>


<?php
if (isset($info)) {
  foreach ($info->result() as $row)
  {
        if ($row->ID_ROL == 1) //MENU 1 PARA ADMIN
        {
          ?>
          <!--NAVBAR 1 Y 2-->
          <!-- ADMIN -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand brand1" href="#" style="text-transform: uppercase;">BIENVENIDO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto my-lg-0">

              </ul>

              <form class="form-inline  mr-auto my-lg-0">
                <input class="form-control barra mr-sm-2" style="width: 70%;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
              <ul class="navbar-nav  ">
               <a class="nav-link " href="<?php echo base_url(); ?>Carrito/index"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>
            ver carrito </a>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="<?= base_url('Login/cerrar_sesion')?>">Cerrar Sesion</a>
             </div>
           </li>
           <a class="navbar-brand brand1" href="#">Contactanos</a>
         </ul>
       </div>
     </nav>

     <!-- --------------------- SEGUNDA NAVBAR  ---------------------->
     <nav class="navbar navbar-expand-lg StoreT navbar-2">
      <h1> <a class="navbar-brand " ><span>Store </span>Online</a></h1>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/index">Administrar  / <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/home">Inicio  / <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/about"> ¿Quiénes Somos?  / </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/ofertas"> Ofertas / <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/contacto">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             / Categorías
           </a>

           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/index" >Celulares</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/audio" >Audio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/computacion" >Computación</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/almacenamiento" >Almacenamiento</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/video" >Video</a>
            <a class="dropdown-item" href="#" class="list-group-item list-group-item-action">Cámaras</a>
            <a class="dropdown-item" href="#" class="list-group-item list-group-item-action">Baterías</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <hr style="height:2px;border-width:0;color:gray;background-color:gray">


  <?php

}
        elseif ($row->ID_ROL == 2) //MENU 1 PARA CLIENTES
        {
          ?>
          <!--NAVBAR 1 Y 2-->
          <!-- ADMIN -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand brand1" href="#" style="text-transform: uppercase;">BIENVENIDO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto my-lg-0">

              </ul>

              <form class="form-inline  mr-auto my-lg-0">
                <input class="form-control barra mr-sm-2" style="width: 70%;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
              <ul class="navbar-nav  ">
               <a class="nav-link " href="<?php echo base_url(); ?>Carrito/index"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>
            ver carrito </a>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cliente
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="<?= base_url('Login/cerrar_sesion')?>">Cerrar Sesion</a>
             </div>
           </li>
           <a class="navbar-brand brand1" href="#">Contactanos</a>
         </ul>
       </div>
     </nav>

     <!-- --------------------- Segunda Navbar---------------------->
     <nav class="navbar navbar-expand-lg StoreT navbar-2">
      <h1> <a class="navbar-brand " ><span>Store </span>Online</a></h1>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/home">Inicio  / <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/about"> ¿Quiénes Somos?  / </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/ofertas"> Ofertas / <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/contacto">Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             / Categorías
           </a>

           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/index" >Celulares</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/audio" >Audio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/computacion" >Computación</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/almacenamiento" >Almacenamiento</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/video" >Video</a>
            <a class="dropdown-item" href="#" class="list-group-item list-group-item-action">Cámaras</a>
            <a class="dropdown-item" href="#" class="list-group-item list-group-item-action">Baterías</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <hr style="height:2px;border-width:0;color:gray;background-color:gray">

  <?php
}
}
}
else
{
  ?>
  <!--NAVBAR 1 Y 2-->
  <!-- ADMIN -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand brand1" href="#" style="text-transform: uppercase;">BIENVENIDO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto my-lg-0">

      </ul>

      <form class="form-inline  mr-auto my-lg-0">
        <input class="form-control barra mr-sm-2" style="width: 70%;" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
      <ul class="navbar-nav  ">
       <a class="nav-link " href="<?php echo base_url(); ?>Carrito/index"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
      </svg>
    ver carrito </a>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Login
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="<?= base_url('Login/login_view')?>">Iniciar sesion</a>
       <a class="dropdown-item" href="<?= base_url('Login/registro_view')?>">Registrarse</a>
     </div>
   </li>
   <a class="navbar-brand brand1" href="#">Contactanos</a>
 </ul>
</div>
</nav>

<!-- --------------------- Segunda Navbar---------------------->
<nav class="navbar navbar-expand-lg StoreT navbar-2">
  <h1> <a class="navbar-brand " ><span>Store </span>Online</a></h1>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav  ">
     <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/home">Inicio  / <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/about"> ¿Quiénes Somos?  / </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/ofertas"> Ofertas / <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>Store/contacto">Contacto</a>
          </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         / Categorías
       </a>

       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/index" >Celulares</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/audio" >Audio</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/computacion" >Computación</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/almacenamiento" >Almacenamiento</a>
        <a class="dropdown-item" href="<?php echo base_url(); ?>catalogo/video" >Video</a>
        <a class="dropdown-item" href="#" class="list-group-item list-group-item-action">Cámaras</a>
        <a class="dropdown-item" href="#" class="list-group-item list-group-item-action">Baterías</a>
      </div>
    </li>
  </ul>
</div>
</nav>

<hr style="height:2px;border-width:0;color:gray;background-color:gray">

<?php
}

?>
