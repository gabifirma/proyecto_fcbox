<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FCBox</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">
  <link rel="stylesheet" href="assets/css/all.min.css"/>
</head>

<body>
  
<header>
  <section>
    <nav class="navbar navbar-expand-lg section-barra">
        <a class="navbar-brand" href="#">
          <img src="assets/img/icono.png" alt="icono" width="50" height="44">
        </a>
      <div class="container-fluid" >
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active"  href="<?php echo base_url(); ?>">Principal</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menú
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url('quienes_somos'); ?>">Quienes Somos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?php echo base_url('contacto'); ?>">Contacto</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Términos y Usos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercialización</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>    
  </section>

  
</header>