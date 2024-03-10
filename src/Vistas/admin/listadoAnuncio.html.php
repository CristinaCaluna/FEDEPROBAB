<div class="content-documentacion p-5">
    <h2 class="fw-light thead-light text-dark text-center">Activar o Inactivar Anuncios</h2>
    <br>
    <form action="" method="post">
        <table class="p-5 table table-hover table-bordered text-center caption-top mx-auto" style="width: 90%;">
            <thead class="p-5 table-dark">
                <tr class="pt-5 border-dark">
                    <th class="lead text-body-dark"><strong>FECHA</strong></th>
                    <th class="lead text-body-dark"><strong>TITULO</strong></th>
                    <th class="lead text-body-dark"><strong>PUBLICACIÓN</strong></th>
                    <th class="lead text-body-dark"><strong>ESTADO</strong></th>
                    <th class="lead text-body-dark"><strong>ACCIÓN</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($publicaciones as $count => $publicacion): ?>
                    <tr class="<?= (isset($publicacion->estado) && $publicacion->estado === 'inactivo') ? 'remove-publicacion' : ''; ?>">
                        <td><?= $publicacion->fecha ?? 'desconocido'; ?></td>
                        <td><?= $publicacion->titulo ?? 'desconocido'; ?></td>
                        <td style="font-size: smaller"><?= $publicacion->publicacion ?? 'desconocido'; ?></td>
                        <td><?= $publicacion->estado ?? 'desconocido'; ?></td>
                        <td>
                            <input class="text-center" type="checkbox" name="publicaciones[<?= $count; ?>][estado]" id="">
                            <input type="hidden" name="publicaciones[<?= $count; ?>][idpublicaciones]" value="<?= $publicacion->idpublicaciones; ?>">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <button style="display:block; margin: 0.5rem auto;" class="col-sm-2 btn btn-dark btn-lg button-submit" type="submit" name="guardarCambios">Guardar</button>
    </form>
</div>
