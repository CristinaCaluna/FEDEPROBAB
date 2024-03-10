<main>
    <br><br>
    <div class="container">
        <div class="row col-sm-9 mx-auto">
            <!-- Carrusel -->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php foreach ($imagenes as $key => $imagen): ?>
                        <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="<?= $key ?>" <?= $key === 0 ? 'class="active" ' : '' ?>aria-label="Slide <?= $key + 1 ?>"></button>
                    <?php endforeach; ?>
                </div>
                <div class="carousel-inner  ">
                    <?php foreach ($imagenes as $key => $imagen): ?>
                        <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>" data-bs-interval="10000">
                            <img src="<?= $imagen->foto ?>" class="w-100" alt="Noticias" width="420px" height="450px">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
            </div>
        </div>
    </div>

    <br>

    <div class="album py-5 bg-light">
        <div class="container">
            <h1 class="fw-light text-center">Noticias</h1> <br><br>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($publicaciones as $publicacion): ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?= $publicacion->foto_publicacion ?>" alt="bootstrap" width="100%" height="225">

                            <div class="card-body">
                                <h2 class="text-break fs-5 fw-bolder lh-base text-center"><?= $valordebusqueda = $publicacion->titulo ?></h2>

                                <div class="text-center">
                                    <div class="btn-group">
                                        <a href='/publicacion?idpublicaciones=<?= $publicacion->idpublicaciones ?>' class="btn btn-outline-dark">Leer más...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
