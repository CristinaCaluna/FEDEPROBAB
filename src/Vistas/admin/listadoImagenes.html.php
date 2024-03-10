<div class="content-documentacion p-5">
    
    <h2 class="fw-light thead-light text-dark text-center">Activar o Inactivar Imagenes</h2>
    <br>
        <form action="" method="post">
        <table class=" p-5 table table-hover table-bordered  text-center  caption-top  mx-auto" style="width: 80%;" >
        <thead class="p-5 table-dark ">
            <tr class=" pt-5 border-dark ">

                    <th class=" lead text-body-dark"><strong>IMAGEN</strong></th>
                    <th class=" lead text-body-dark"><strong>ESTADO</strong></th>
                    <th class=" lead text-body-dark"><strong>ACCIÓN</strong></th></tr>
                </thead>
                <tbody>
                    <?php $count = 0;
                    foreach($imagenes as $imagen): ?>
                                <tr class="<?php
                                          if(isset($imagen->estado) && $imagen->estado === 'inactivo'){
                                             echo 'remove-imagen';
                                          }              
                                    ?>">
                                <td><img src="<?= $imagen->foto ?>" alt="Noticias" width="100px" height="100px"></td>
                                <td><?= $imagen->estado ?? 'desconocido'; ?></td>
                                
                                <td>
                                    <input class="text-center" type="checkbox" name="imagenes<?= $count;?>[estado]" id="">
                                    <input type="hidden" name="imagenes<?= $count;?>[idimagen]" value="<?= $imagen->idimagen;?>">
                                </td>

                            </tr>
                    <?php $count ++; endforeach; ?>
                </tbody>
            </table>
            <br>
            <button style="display:block; margin: 0.5rem auto;" class="col-sm-2 btn btn-dark btn-lg button-submit " type="submit">Guardar</button>                          
        </form>
    </div>
</div>