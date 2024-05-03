<?php if(isset($error)): ?> 
  <div class="alert alert-danger text-center" role="alert">
    <?= $error ?>
  </div>
<?php endif; ?>    

<?php if(isset($exito)): ?>
  <div class="alert alert-success text-center" role="alert">
    <?= $exito ?>
  </div>
<?php endif; ?> 

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>LOTAIP</h2>
    </div>

    <div class="mx-auto" style="width: 50%;">
      <form class="needs-validation" novalidate action="" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center">
          <div class="col-md-8">

            <div class="form-group">
              <label for="anio" class="form-label">Año</label>
              <select class="form-control border border-dark" id="anio" name="anio" aria-label="Seleccione un año" required>
                  <option value="" selected disabled>Seleccione</option>
                  <?php foreach ($anios as $anio): ?>
                      <option value="<?= $anio->anio ?>"><?= $anio->anio ?></option>
                  <?php endforeach; ?>
              </select>
            </div><br>

            <div class="form-group">
              <label for="mes" class="form-label">Mes</label>
              <select class="form-control border border-dark" id="mes" name="mes" aria-label="Seleccione un mes" required>
                <option value="" selected disabled>Seleccione</option>
                <?php foreach ($meses as $mes): ?>
                    <option value="<?= $mes->mes ?>"><?= $mes->mes ?></option>
                <?php endforeach; ?>
             </select>
            </div><br>

            <div class="form-group">
              <label for="lotaip_li" class="form-label">Literal de Lotaip</label>
              <select class="form-control border border-dark" id="lotaip_lis" name="lotaip_lis" aria-label="Seleccione una categoría" required>
                  <option value="" selected disabled>Seleccione</option>
                  <?php foreach ($lotaip_lis as $lotaip_li): ?>
                      <option value="<?= $lotaip_li->literal?>"><?= $lotaip_li->literal ?></option>
                  <?php endforeach; ?>
              </select>
            </div><br>

            <div class="form-group">
              <label for="lotaip" class="form-label">Lotaip</label>
              <select class="form-control border border-dark" id="lotaip_lisli" name="lotaip_lisli" aria-label="Seleccione un género" required>
                <option value="" selected disabled>Seleccione</option>
                <?php foreach ($lotaip_lisli as $lotaip_li): ?>
                    <option value="<?= $lotaip_li->subliteral ?>"><?= $lotaip_li->subliteral ?></option>
                <?php endforeach; ?>
              </select>
            </div><br>
  
            <div class="col-sm-8 mx-auto">  
              <div class="input-group justify-content-center">
                  <label class="input-group-btn">
                      <span class="btn ">
                          Archivo (PDF, Word, Excel)<br><br> <input accept=".pdf,.doc,.docx,.xls,.xlsx" class="hidden" name="archivo" type="file" id="archivo">
                      </span>
                  </label>  
              </div>
            </div>

          </div>
        </div>
        <br>
        <div class="text-center">
                    <button class="col-sm-4 btn btn-dark btn-lg" type="submit">Guardar</button>
        </div>
      </form>
    </div>
  </main>
</div>
