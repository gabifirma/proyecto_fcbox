  <section>
    <div class="card text-center formulario-login container-fluid mb-5" style="width: 45rem; margin-top: 5%">
      <div class="card-header">
        Iniciar Sesión
      </div>
      <div class="card-body">
        <form>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
          </div>          
        </form>
        <a href="#" class="btn btn-primary mt-4">Entrar</a>
      </div>
      <p class="muted text-center">¿Nuevo usuario? <a href="<?php echo base_url('registrarse'); ?>" data-bs-toggle="tooltip" data-bs-title="Default tooltip">Registrarse</a></p>
    </div>
  </section>
