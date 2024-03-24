<?php if(isset($error)): ?>
  <div class="mt-4">
    <p class="alert alert-danger p-4 text-center w-50 m-auto" role="alert">
      <?= $error ?>
    </p>
  </div>
<?php endif; ?>
<br>
<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8 mb-3 mb-sm-0">
        <form method="post" action="">
          <div>
            <img class="mb-4" src="/assets/img/boli.png" alt="" width="600" height="390">
          </div>
      </div>
      <div class="col-4">
        <div class="py-5">
          <h1 class="fw-light text-dark text-center"><strong>Iniciar Sesión</strong></h1>
          <br><br>
          <div class="form-floating">
            <input type="text" class="form-control border border-dark" id="floatingInput" placeholder="Usuario" name="usuario">
            <label class="lead text-dark" for="floatingInput">Usuario</label>
          </div>
          <br>
          <div class="form-floating">
            <input type="password" class="form-control border border-dark" id="floatingPassword" placeholder="Contraseña" name="password">
            <label class="lead text-dark" for="floatingPassword">Contraseña</label>
          </div>
          <br>
          <button class="w-100 btn btn-lg btn-dark lead" type="submit">Iniciar</button>
        </form>
      </div>
    </div>
  </div>
</main>
