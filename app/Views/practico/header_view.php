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
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('principal'); ?>">Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Galería</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('terminos'); ?>">Términos y Usos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a>
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