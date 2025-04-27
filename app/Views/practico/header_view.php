<!DOCTYPE html>
<html lang="en">


<head>
  <link rel="icon" href="assets/img/icono.png" type="image/x-icon">
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
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
         <!-- Ícono y Nombre -->
         <a class="navbar-brand" href="<?php echo base_url('/'); ?>">
            <img src="assets/img/icono.png" alt="FCBox" width="40" height="40">
            <span class="brand-text">FCBox</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/'); ?>">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercializacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('terminos'); ?>">Términos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a>
            </li>
            
          </ul>
            
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
            
            <a class="btn btn-outline-success me-2" href="<?php echo base_url('login'); ?>" role="button">Login</a>
          </form>
        </div>
      </div>
    </nav>
  </section>

  
</header>