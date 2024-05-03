<br>
<div class="container col-10 ">
  <?php foreach ($publicaciones as $publicacion): ?>
    <div class="text-center">
      <p class="text-break fs-1 fw-bold lh-base"><strong><?= $publicacion->titulo ?></strong></p>
      <p class="text-break fs-6 fst-italic lh-base"><?= $publicacion->fecha ?></p>
    </div>
    <br>
    <div class="clearfix ">
      <img src="<?= $publicacion->foto_publicacion ?>" alt="noticia" class="col-md-6 float-md-end mb-3 ms-md-3">
      <p class="text-break fs-6 fw-light lh-base"><?= $publicacion->publicacion ?></p>
    </div>
  <?php endforeach; ?>
</div>
<br><br>




