<main>
    <br><br>
    <div class="container">
        <div class="row">
            <!-- Carrusel a la izquierda -->
            <div class="col-3">
                <div id="carouselExampleIntervalLeft" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
                    <h1 class="fw-light text-start">Noticias</h1> <br>
                    <div class="carousel-inner">
                        <?php foreach ($publicaciones as $key => $publicacion): ?>
                            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>" data-bs-interval="10000">
                                <p class="text-break fs-4 fw-bolder lh-base text-start"><?= $publicacion->titulo ?></p>
                                <p class="text-break fs-6 font-weight-light lh-base text-start"><?= substr($publicacion->publicacion, 0, 200) . '...'; ?></p>
                                <a href='/publicacion?idpublicaciones=<?= $publicacion->idpublicaciones ?>' class="btn btn-outline-dark">Leer más...</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalLeft" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalLeft" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                </div>
            </div>

            <!-- Carrusel a la derecha -->
            <div class="col-8 ms-auto me-0">
                <div id="carouselExampleIntervalRight" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
                    <div class="carousel-indicators">
                        <?php foreach ($publicaciones as $key => $publicacion): ?>
                            <button type="button" data-bs-target="#carouselExampleIntervalRight" data-bs-slide-to="<?= $key ?>" <?= $key === 0 ? 'class="active" ' : '' ?>></button>
                        <?php endforeach; ?>
                    </div>

                    <div class="carousel-inner">
                        <?php foreach ($publicaciones as $key => $publicacion): ?>
                            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>" data-bs-interval="10000">
                                <?php $extension = pathinfo($publicacion->foto_publicacion, PATHINFO_EXTENSION); ?>
                                <?php if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                                    <!-- Es una imagen -->
                                    <img src="<?= $publicacion->foto_publicacion ?>" class="d-block w-100" alt="Noticias" width="420" height="450">
                                <?php elseif (in_array($extension, ['mp4', 'mov', 'avi'])): ?>
                                    <!-- Es un video -->
                                    <video class="d-block w-100" controls>
                                        <source src="<?= $publicacion->foto_publicacion ?>" type="video/mp4">
                                        Tu navegador no soporta el tag de video.
                                    </video>
                                <?php else: ?>
                                    <!-- Tipo de archivo no compatible -->
                                    <p>Tipo de archivo no compatible: <?= $extension ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIntervalRight" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIntervalRight" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    
</main>
