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
<br>
<div class="container-form">
  <center>
    <div class="py-5">
      <h2 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cambio de Contraseña</font></font></h2>
      <h4 class="lead"> Ingrese los datos para actualizar su contraseña</h4>

      <form action="" method="post">
        <div class="col-sm-4 justify-content-lg-start m ">
          <div class="row align-items-center">
            <div class="col-auto">
              <label for="txtPassword" class="col-form-label">Contraseña Actual</label>
            </div>
            <div class="input-group">
              <input type="text" name="actual" class="form-control border border-dark" aria-describedby="passwordHelpInline">
            </div>
          </div>

          <br>

          <div class="row align-items-center">
            <div class="col-auto">
              <label for="txtPassword" class="col-form-label">Nueva Contraseña</label>
            </div>
            <div class="input-group">
              <input type="password" name="newpass" id="txtPassword" class="form-control border border-primary" aria-describedby="passwordHelpInline">
              <div class="input-group-append">
                <button id="show_password" class="btn btn-dark" type="button" onclick="mostrarclave1()"> <span class="fa fa-eye-slash icon"></span> </button>
              </div>
            </div>
          </div>

          <br> 

          <div class="row align-items-center">
            <div class="col-auto">
              <label for="txt-Password" class="col-form-label">Repetir Nueva Contraseña</label>
            </div>
            <div class="input-group">
              <input type="password" name="repitpass" id="txt-Password" class="form-control border border-primary" aria-describedby="passwordHelpInline">
              <div class="input-group-append">
                <button id="show_password" class="btn btn-dark" type="button" onclick="mostrarclave2()"> <span class="fa fa-eye-slash icon"></span> </button>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="text-center">
          <button class="col-sm-2 btn btn-dark btn-lg button-submit " type="submit">Guardar</button>
        </div>
      </form>
    </div>
  </center>
</div>
<br><br>
