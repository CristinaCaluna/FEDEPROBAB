


<div class="content-documentacion p-5">
      
<h2 class="fw-light thead-light text-dark text-center">LISTADO DE USUARIOS </h2>
    <br>
    <form action="" method="post">

<table class="table table-hover  table-bordered text-center  caption-top" >
<thead class="table-dark ">
    <tr class=" pt-5  ">
            <th class="lead text-body-dark" ><strong>CEDULA</strong></th>
            <th class= "lead text-body-dark"><strong>NOMBRES</strong></th>
            <th class="lead text-body-dark"><strong>APELLIDOS</strong></th>
            <th class=" lead text-body-dark"><strong>ESTADO</strong></th>
            <th class=" lead text-body-dark"><strong>ACCIÓN</strong></th></tr>
        </thead>
                <tbody>
                    <?php $count = 0;
                    foreach($sucursales as $sucursal): ?>
                            <tr class="<?php
                                          if(isset($sucursal->estado) && $sucursal->estado === 'inactivo'){
                                             echo 'remove-agentente';
                                          }              
                                    ?>">
                                <td><?= $sucursal->idusuarios ?? 'desconocido'; ?></td>
                                <td><?= $sucursal->nombres ?? 'desconocido'; ?></td>
                                <td><?= $sucursal->apellidos ?? 'desconocido'; ?></td>
                                <td><?= $sucursal->estado?? 'desconocido'; ?></td>
                                <td>
                                    <input type="checkbox" name="usuario<?= $count;?>[rol]" id="">
                                    <input type="hidden" name="usuario<?= $count;?>[idusuarios]" value="<?= $sucursal->idusuarios;?>">
                                </td>
                            </tr>
                    <?php $count ++; endforeach; ?>
                </tbody>
            </table>
            <br>
            <button style="display:block; margin: 0.5rem auto;" class="button-submit col-sm-2 btn btn-dark  button-submit" type="submit">Guardar</button>                          
        </form>
    </div>
</div><br><br><br><br>