 <section>
    <div class="card text-center formulario-login container-fluid mb-5" style="width: 45rem; margin-top: 5%">
      <div class="card-header">
        Iniciar Sesión
      </div>

      <div class="card-body">
        
        <form action="<?php echo base_url('buscar_usuario') ?>" method="post" autocomplete="off">
            <div class="form-floating mb-3">
                <?php echo form_input(['name' => 'correo', 'id' => 'correo', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'name@example.com', 'value' => set_value('correo')]); ?>
                <label for="floatingInput">Correo Electrónico</label>
            </div>
            <div class="form-floating">
                <?php echo form_input(['name' => 'password', 'id' => 'password', 'type' => 'text', 'class' => 'form-control', 'placeholder' => 'Password', 'value' => set_value('password')]); ?>
                <label for="floatingPassword">Password</label>
            </div>          
        </form>

        <a href="#" class="btn btn-primary mt-4">Entrar</a>
      </div>
      <p class="muted text-center">¿Nuevo usuario? <a href="<?php echo base_url('registrarse'); ?>" data-bs-toggle="tooltip" data-bs-title="Default tooltip">Registrarse</a></p>
    </div>
  </section>