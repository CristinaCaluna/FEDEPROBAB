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
        <h3 class="mb-3"><span style="vertical-align: inherit;">Imagen a Publicar</span></h3>
               
        <div class="py-5">
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="col-md-6">  
                        <label for="foto" class="form-label"><span style="vertical-align: inherit;">Ingrese la Imagen</span></label>
                        <br> 
                        <br> 
                        <div class="input-group justify-content-center">
                            <label class="input-group-btn">
                                <span >
                                    <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="foto" type="file" id="trabajos">
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
