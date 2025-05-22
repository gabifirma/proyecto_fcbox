<section>
  <br>
  <div id="carouselExampleInterval" class="carousel slide text-center" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="4000">
        <img src="assets/img/imagen1.jpg" class="img-fluid" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="4000">
        <img src="assets/img/imagen2.jpg" class="img-fluid" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="4000">
        <img src="assets/img/imagen3.jpg" class="img-fluid" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section class="mt-4 container">
  <hr style="border-top: 5px solid #32cd32; width: auto;">
  <h1>Top 3 Populares</h1>

  <div class="mt-3 mb-3">
    <a class="btn btn-outline-success" href="<?php echo base_url('galeria'); ?>" role="button">Mostrar todo</a>
  </div>
  
  <div class="row row-cols-1 row-cols-md-3 g-1">
    <div class="col">
      <div class="card">
        <img src="assets/img/juego8.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="assets/img/juego14.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="assets/img/juego7.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>

  </div>

</section>

<section class="mt-5 container">
  <hr style="border-top: 5px solid #32cd32; width: auto;">
  <div>
    <h1>Ofertas Mensuales</h1>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-1">

    <div class="col">
      <div class="card">
        <img src="assets/img/juego7.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="assets/img/juego15.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="assets/img/juego17.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>

  </div>

</section>

<section class="mt-5 container">
  <hr style="border-top: 5px solid #32cd32; width: auto;">
  <div>
    <h1>Novedades</h1>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-1">
    <div class="col">
      <div class="card">
        <img src="assets/img/nuevo1.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="assets/img/nuevo2.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>
    
    <div class="col">
      <div class="card">
        <img src="assets/img/nuevo3.jpg" class="img-fluid card-img-top" alt="...">
        <div class="capa">
          <h4>hola gabi</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <a href="<?php echo base_url('galeria'); ?>" class="stretched-link"></a>
      </div>
    </div>
    
  </div>

</section>

<section class="mt-3 container-xl">
  <hr style="border-top: 5px solid #32cd32; width: auto;">
  <div>
    <h1>Géneros</h1>
  </div>

  <div class="row row-cols-1 row-cols-md-6 g-1 mt-2" id="botones">
    <div class="col">
      <a href="<?php echo base_url('galeria'); ?>"><button type="button" class="btn btn-outline-success btn-lg"><span class="fa-solid--chess"></span><br>Estrategia</button></a>
    </div>
    <div class="col">
      <a href="<?php echo base_url('galeria'); ?>"><button type="button" class="btn btn-outline-success btn-lg"><span class="lucide--swords"></span><br>Acción</button></a>
    </div>
    <div class="col">
      <a href="<?php echo base_url('galeria'); ?>"><button type="button" class="btn btn-outline-success btn-lg"><span class="mdi--compass"></span><br>Aventura</button></a>
    </div>
    <div class="col">
      <a href="<?php echo base_url('galeria'); ?>"><button type="button" class="btn btn-outline-success btn-lg"><span class="fa6-solid--gun"></span><br>Disparos</button></a>
    </div>
    <div class="col">
      <a href="<?php echo base_url('galeria'); ?>"><button type="button" class="btn btn-outline-success btn-lg"><span class="iconoir--boxing-glove"></span><br>Pelea</button></a>
    </div>
    <div class="col">
      <a href="<?php echo base_url('galeria'); ?>"><button type="button" class="btn btn-outline-success btn-lg"><span class="iconoir--soccer-ball"></span><br>Deportes</button></a>
    </div>
  </div>
</section>