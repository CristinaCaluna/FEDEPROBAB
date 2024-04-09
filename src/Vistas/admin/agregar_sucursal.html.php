<?php if(isset($error)): ?>
  
  
    <div class="alert alert-danger text-center" role="alert">
        <?= $error ?>
    </div>
<?php endif; ?>    

<?php if(isset($success)): ?>
    <div class="alert alert-success text-center" role="alert">
        <?= $success ?>
    </div>
<?php endif; ?> 


<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Nuevo Usuario Administrador de una Sucursal</h2>
      <p class="lead">Ingrese los datos del nuevo administrador</p>
    </div>

    <div class="mx-auto">
      <form class="needs-validation" novalidate action="" method="POST" enctype="multipart/form-data">
        <div class="g-3 ">
          <div class="col-6 mx-auto">
            <label for="cedula" class="form-label ">Número de cédula</label>
            <input type="text" class="form-control border border-dark" id="cedula" placeholder="Se asignará como usuario y contraseña" name="id" aria-describedby="validacion" required>
            <div id="validacion" class="invalid-feedback">
              Se requiere una cédula válida
            </div>
          </div><br>
          
          <div class="col-sm-6 mx-auto">
            <label for="firstName" class="form-label">Nombres</label>
            <input type="text" class="form-control border border-dark" id="firstName" placeholder="" value="" required name="nombres">
            <div class="invalid-feedback">
              Se requiere el ingreso de un nombre 
            </div>
          </div><br>

          <div class="col-sm-6 mx-auto">
            <label for="lastName" class="form-label">Apellidos</label>
            <input type="text" class="form-control border border-dark" id="lastName" placeholder="" value="" required name="apellidos">
            <div class="invalid-feedback">
              Se requiere el ingreso de un apellido 
            </div>
          </div><br>

          <div class="col-sm-6 mx-auto">
            <label for="idorganizador" class="form-label">Organizacion</label><br>
            <select class="form-select border border-dark text-dark" id="idorganizador" name="idorganizador" aria-label="Seleccione un organizador" required>
                <option selected>Seleccione</option>
                <?php foreach ($organizadores as $organizador): ?>
                    <?php if ($organizador->idorganizador != 1): ?>
                        <option value="<?= $organizador->idorganizador ?>"><?= $organizador->organizacion ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div><br>



          <div class="text-center">
            <button class="col-sm-2 btn btn-dark btn-lg" type="submit">Registrar</button>
          </div>
        </div>
      </form>
    </div>
  </main>
</div>

<br>
