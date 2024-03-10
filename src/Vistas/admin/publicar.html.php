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

<div class="container">
    <center>
        <h3 class="mb-3"><front style="vertical-align: inherit;">Noticia a Publicar</front></h3>
        <h4 class="lead">Ingrese la información de la Noticia</h4>
        
        <div class="py-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3">
                        <label for="anuncio" class="form-label"><front style="vertical-align: inherit;">Titulo de la Noticia</front></label>
                        <input type="text" name="titulo" class="form-control border border-dark" id="anuncio" placeholder="" value="" required="" style="width: 80%;">
                        <div class="invalid-feedback">
                            Se requiere ingresar un título
                        </div>
                    </div>
                    <br>
                    <br>
               
                    <div class="col-md-6">
                        <label for="fecha_publ" class="form-label"><front style="vertical-align: inherit;">Fecha</front></label>
                        <input type="date" name="fecha" class="form-control border border-dark" id="fecha_publi" placeholder="" value="" required="" style="width: 70%;">
                        <div class="invalid-feedback">
                            Se requiere ingresar una fecha
                        </div>
                    </div>
                    <br>

                    <div class="col-md-6">
                        <label for="publicacion" class="form-label"><front style="vertical-align: inherit;">Contenido</front></label>
                        <textarea class="form-control border border-dark" name="publicacion" aria-label="With textarea" style="width: 80%;"></textarea>
                    </div>

                    <br>

                    <div class="col-md-6">  
                        <label for="img_publ" class="form-label"><front style="vertical-align: inherit;">Imagen</front></label>
                        <br> 
                        <br> 
                        <div class="input-group justify-content-center">
                            <label class="input-group-btn">
                                <span class="">
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="foto_publicacion" type="file" id="trabajos">
                                </span>
                            </label>  
                        </div>
                    </div>
                </div>
    
                <br>
                <div class="text-center">
                    <button class="mb-3 col-sm-2 btn btn-dark btn-lg mt-4" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </center>
</div>
