  <section>
    <div class="card text-center container-fluid mb-5" style="width: 45rem; margin-top: 5%">
      <div class="card-header">
        Iniciar Sesión
      </div>
      <div class="card-body">
      <form>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>          
        </form>
        <a href="#" class="btn btn-primary">Entrar</a>
      </div>
      <p class="muted text-center">¿Nuevo usario? <a href="<?php echo base_url('registrarse'); ?>" data-bs-toggle="tooltip" data-bs-title="Default tooltip">Registrarse</a></p>
    </div>
  </section>
