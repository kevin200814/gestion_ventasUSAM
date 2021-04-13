<script type="text/javascript">
    $('.carousel').carousel()
  </script>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand brand1" href="#" style="text-transform: uppercase;">BIENVENIDO <?= $this->session->userdata('NICK') ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    </ul>

    <form class="form-inline  mr-auto my-lg-0">
      <input class="form-control barra mr-sm-2" style="width: 70%;" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    <button type="button"  class="btn btn-outline-primary col-md-2 " data-toggle="modal" data-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
      <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
    </svg>
    ver carrito
  </button>

  <?php
if (isset($info)) {
  # code...
  foreach ($info->result() as $row)
      {
        if ($row->ID_ROL == 1) //MENU 1 PARA ADMIN
        {
          ?>
          <ul class="navbar-nav  col-md-1 my-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url('Login/cerrar_sesion')?>">Cerrar Sesion</a>
            </div>
          </li>
        </ul>
        <a class="navbar-brand brand1" href="#">Contactanos</a>
      </div>
      </nav>

        <?php
     
        }
        elseif ($row->ID_ROL == 2) //MENU 1 PARA CLIENTES
        {
           ?>
          <ul class="navbar-nav  col-md-1 my-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cliente
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url('Login/cerrar_sesion')?>">Cerrar Sesion</a>
            </div>
          </li>
        </ul>
        <a class="navbar-brand brand1" href="#">Contactanos</a>
      </div>
      </nav>

        <?php
        }
    }
}
else
{
  ?>
    <ul class="navbar-nav  col-md-1 my-lg-0">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Login
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="<?= base_url('Login/login_view')?>">Iniciar sesion</a>
        <a class="dropdown-item" href="#">Registrarse</a>
      </div>
    </li>
  </ul>
  <a class="navbar-brand brand1" href="#">Contactanos</a>
</div>
</nav>

  <?php
}

?>


<!-- --------------------- Segunda Navbar----------------------->
<nav class="navbar navbar-expand-lg StoreT navbar-2">
  <h1> <a class="navbar-brand " ><span>Store </span>Online</a></h1>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


<?php
if (isset($info)) {
  # code...
  foreach ($info->result() as $row)
      {
        if ($row->ID_ROL == 1) //SUB MENU 2 PARA ADMIN
        {
          ?>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio (ADMIN)  / <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> ¿Quiénes Somos? (ADMIN)  / </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#"> Ofertas (ADMIN) / <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contacto (ADMIN)</a>
                </li>
              </ul>
            </div>
          </nav>
        <?php
        }
        elseif ($row->ID_ROL == 2) //SUB MENU PARA CLIENTE
        {
          ?>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio  / <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> ¿Quiénes Somos?  / </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#"> Ofertas / <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contacto</a>
                </li>
              </ul>
            </div>
          </nav>
        <?php
        }

      }
}
else
{
  ?>
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav  ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio  / <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> ¿Quiénes Somos?  / </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> Ofertas / <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
    </ul>
  </div>
</nav>
  <?php
}

?>

  
<hr style="height:2px;border-width:0;color:gray;background-color:gray">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Celulares</a>
        <a href="#" class="list-group-item list-group-item-action">Audio</a>
        <a href="#" class="list-group-item list-group-item-action">Computación</a>
        <a href="#" class="list-group-item list-group-item-action">Almacenamiento</a>
        <a href="#" class="list-group-item list-group-item-action">Video</a>
        <a href="#" class="list-group-item list-group-item-action">Cámaras</a>
        <a href="#" class="list-group-item list-group-item-action">Baterías</a>
      </div>
    </div>

    <div class="col-md-6">
      <div class="caja">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 ima" src="<?php echo base_url(); ?>assets/images/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 ima" src="<?php echo base_url(); ?>assets/images/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 ima" src="<?php echo base_url(); ?>assets/images/3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="clearfix"> </div>

</div>
 