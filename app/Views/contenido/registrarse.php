<section>

    <form class="formulario-registrarse row g-3 mt-5 needs-validation container-fluid" novalidate>
    <h2> <center><br>Registrarse</center></h2>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-check-label">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                !Muy bien¡
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-check-label">Apellido</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
            <div class="valid-feedback">
                ¡Muy bien!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-check-label">Email</label>
            <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Por favor escriba un email.
            </div>
            </div>
        </div>
        <div class="col-md-5">
            <label for="validationCustom03" class="form-check-label">Provincia/Estado</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Por favor seleccione una provincia válida.
            </div>
        </div>
        <div class="col-md-5">
            <label for="validationCustom04" class="form-check-label">País</label>
            <input type="text" class="form-control" id="validationDefault01" value="" required>
            <div class="invalid-feedback">
                Por favor seleccione un país.
            </div>
        </div>
        <div class="col-md-4">
            
            <label for="validationCustom04" class="form-check-label">Contraseña</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Debe tener 8 dígitos la contraseña.
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-check-label">Repetir contraseña</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Las contraseñas no coinciden.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Aceptar términos y condiciones.
            </label>
            <div class="invalid-feedback">
                Debe aceptar antes de finalizar.
            </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Finalizar</button>
        </div>
    </form>
    <br>
    <div style="margin-bottom: 10px; margin-top: 10px; margin-left: 45%">
        <a class="btn btn-primary" href="<?php echo base_url('/'); ?>" role="button">Volver al inicio</a>
    </div>
    
    </section>