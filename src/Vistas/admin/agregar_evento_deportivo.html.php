




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
      <h2>Evento Deportivo</h2>
      <p class="lead">Ingrese los datos del nuevo evento</p>
    </div>

    <div class="mx-auto">
      <form class="needs-validation" novalidate action="" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">

          <div class="col-md-12">
              <label for="cedula" class="form-label">Fecha</label><br>
              <input type="date" name="fecha" class="form-control border border-dark" id="date" placeholder="" value="<?= date_create('now', new DateTimeZone('America/Guayaquil'))->format('Y-m-d'); ?>" required="" style="width: 70%;">
                       
            </div><br>
            <div class="col-md-12">
              <label for="cedula" class="form-label">Organizador</label><br>
              <?php ?>
              
              <select class="form-select border border-dark text-dark" id="idorganizador_organizador" name="idorganizador_organizador" aria-label="Seleccione un organizador" required>
                  <option selected>Seleccione</option>
                  <?php foreach ($organizadores as $organizador): ?>
                      <option value="<?= $organizador->idorganizador ?>"><?= $organizador->organizacion ?></option>
                  <?php endforeach; ?>
              </select>

            </div><br>

            <div class="col-md-12">
              <label for="firstName" class="form-label">Evento Deportivo</label>
              <select class="form-select border border-dark text-dark" id="idevento_eventos" name="idevento_eventos" aria-label="Seleccione un evento" required>
                <option selected>Seleccione</option>
                <?php foreach ($eventos as $evento): ?>
                    <option value="<?= $evento->idevento ?>"><?= $evento->evento ?></option>
                <?php endforeach; ?>
             </select>

            </div><br>
            <div class="col-md-12">
             
              <label for="lastName" class="form-label">Categoría</label>
                            <select class="form-select border border-dark text-dark" id="categoria" name="categoria" aria-label="Seleccione una categoría" required>
                                <option selected>Seleccione</option>
                                <?php foreach ($categorias as $categoria): ?>
                                    <option value="<?= $categoria->categoria ?>"><?= $categoria->categoria ?></option>
                                <?php endforeach; ?>
                            </select>
            </div><br>
            <div class="col-md-12">
            <label for="firstName" class="form-label">Género</label>
                            <select class="form-select border border-dark text-dark" id="genero" name="genero" aria-label="Seleccione un género" required>
                                <option selected>Seleccione</option>
                                <?php foreach ($generos as $genero): ?>
                                    <option value="<?= $genero->genero ?>"><?= $genero->genero ?></option>
                                <?php endforeach; ?>
                            </select>
            </div><br>
            
            <div class="col-md-12">
                            <label for="firstName" class="form-label">Cantón</label>
                            <select class="form-select border border-dark text-dark" id="canton" name="canton" aria-label="Seleccione un cantón" required>
                                <option selected>Seleccione</option>
                                <?php foreach ($cantones as $canton): ?>
                                    <option value="<?= $canton->canton ?>"><?= $canton->canton ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div><br>

                        
            <div class="col-md-12">
              <label for="firstName" class="form-label">Parroquia</label>
              <input type="text" class="form-control border border-dark" id="parroquia" placeholder="Ingrese la parroquia" name="parroquia" required>
            </div><br>



          </div>
         <div class="col-md-6">
           <!--  <div class="col-md-12">
              <label for="firstName" class="form-label">Provincia</label>
               
              <select class="form-select border border-dark text-dark" id="provincia" name="provincia" aria-label="Seleccione una provincia">
                <option selected>Seleccione</option>
                <?php foreach ($provincias as $provincia): ?>
                    <option value="<?= $provincia->codigo ?>"> <?= $provincia->provin?> </option>
                <?php endforeach; ?>
            </select>

            </div><br>-->
           
            <div class="col-md-12">
              <label for="firstName" class="form-label">Escenario Deportivo</label>
              <input type="text" class="form-control border border-dark" id="escenario" placeholder="Ingrese el escenario deportivo" name="escenario" required>
            </div><br>
            <div class="col-md-12">
              <label for="firstName" class="form-label">Dirección</label>
              <input type="text" class="form-control border border-dark" id="direcion" placeholder="Ingrese la dirección" name="direccion" required>
            </div><br>

            <div class="col-md-12">
              <label for="firstName" class="form-label">Mapa</label>
              
            <div id="map" style="height: 400px;"></div>

            <input type="hidden" name="latitud" id="latitud">
            <input type="hidden" name="longitud" id="longitud">
            </div><br>




          </div>
        </div><br>
        <div class="text-center">
                    <button class="col-sm-2 btn btn-dark btn-lg" type="submit">Guardar</button>
                </div>
      </form>
    </div>
  </main>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([-1.5922898, -79.0015614], 13); // Coordenadas y nivel de zoom inicial

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([-1.5922898, -79.0015614], { draggable: true }).addTo(map);

    map.on('click', function(e) {
        marker.setLatLng(e.latlng);
        document.getElementById('latitud').value = e.latlng.lat;
        document.getElementById('longitud').value = e.latlng.lng;
    });
</script>
