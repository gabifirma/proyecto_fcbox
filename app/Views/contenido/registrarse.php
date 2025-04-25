<section>
    <form class="row g-3 mt-5 needs-validation container-fluid" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                !Muy bien¡
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
            <div class="valid-feedback">
                !Muy bien¡
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Por favor escriba un email.
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Provincia</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Por favor seleccione una provincia válida.
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">País</label>
            <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Elija...</option>
            <option>Argentina</option>
            <option>Brasil</option>
            <option>Uruguay</option>
            </select>
            <div class="invalid-feedback">
                Por favor seleccione un país válido.
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
    <div style="margin-bottom: 10px; margin-top: 10px; margin-left: 45%">
        <a class="btn btn-primary" href="<?php echo base_url('/'); ?>" role="button">Volver al inicio</a>
    </div>
    </section>