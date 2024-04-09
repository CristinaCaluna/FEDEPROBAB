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
            <h2>Noticia a Publicar</h2>
            <p class="lead">Ingrese la información de la Noticia</p>
        </div> 

        <div class="mx-auto">
            <form class="needs-validation" action="" method="post" enctype="multipart/form-data">
                <div class="g-3">
                <div class="col-sm-8 mx-auto">
                        <label for="fecha_publ" class="form-label">Fecha</label>
                        <input type="date" name="fecha" class="form-control border border-dark" id="fecha_publi" placeholder="" value="<?= date_create('now', new DateTimeZone('America/Guayaquil'))->format('Y-m-d'); ?>" required="" style="width: 70%;">
                        <div class="invalid-feedback">
                            Se requiere ingresar una fecha.
                        </div>
                    </div><br>
                  <div class="col-8 mx-auto">
                        <label for="anuncio" class="form-label">Título de la Noticia</label>
                        <input type="text" name="titulo" class="form-control border border-dark" id="anuncio" placeholder="" value="" required="" style="width: 80%;">
                        <div class="invalid-feedback">
                            Se requiere ingresar un título.
                        </div>
                    </div><br>

                    <div class="col-sm-8 mx-auto">
                        <label for="publicacion" class="form-label">Contenido</label>
                        <textarea class="form-control border border-dark" name="publicacion" aria-label="With textarea" style="width: 80%;"></textarea>
                    </div><br>


                    <br>
                    <div class="col-sm-8 mx-auto">  
                        <label for="archivo_publ" class="form-label">Archivo (Imagen/Video)</label>
                        <br> 
                        
                        <div class="input-group justify-content-center">
                            <label class="input-group-btn">
                                <span class="btn ">
                                    <input accept=".jpg,.png,.jpeg,.gif,.mp4,.mov,.avi" class="hidden" name="foto_publicacion" type="file" id="foto_publicacion">
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <button class="col-sm-2 btn btn-dark btn-lg" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </main>
</div>
<br>
