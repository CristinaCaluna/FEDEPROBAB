<div class="content-documentacion p-5">
    <h2 class="fw-light thead-light text-dark text-center">Auditoria de Anuncios</h2>
    <br>
    <form action="" method="post">
        <table class="p-5 table table-hover table-bordered text-center caption-top mx-auto" style="width: 90%;">
            <thead class="p-5 table-dark">
                <tr class="pt-5 border-dark">
                    <th class="lead text-body-dark"><strong>FECHA DE PUBLICACIÓN</strong></th>
                    <th class="lead text-body-dark"><strong>FECHA DE ELIMINACIÓN</strong></th>
                    <th class="lead text-body-dark"><strong>TITULO DE LA PUBLICACIÓN</strong></th>
                    <th class="lead text-body-dark"><strong>PUBLICACIÓN</strong></th>
                    <th class="lead text-body-dark"><strong>ESTADO</strong></th>
                    <th class="lead text-body-dark"><strong>USUARIO</strong></th>
                    <th class="lead text-body-dark"><strong>ROL</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($publicaciones as $count => $publicacion): ?>
                    <tr class="<?= (isset($publicacion->estado) && $publicacion->estado === 'inactivo') ? 'remove-publicacion' : ''; ?>">
                        <td><?= $publicacion->fecha ?? 'desconocido'; ?></td>
                        <td><?= $publicacion->fecha_fin ?? 'desconocido'; ?></td>
                        <td><?= $publicacion->titulo ?? 'desconocido'; ?></td>
                        <td style="font-size: smaller"><?= $publicacion->publicacion ?? 'desconocido'; ?></td>
                        <td><?= $publicacion->estado ?? 'desconocido'; ?></td>
                        <td><?= $publicacion->usuario_desactiva?? 'desconocido'; ?></td>
                        <td><?= $publicacion->rol_desactiva ?? 'desconocido'; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
    </form>
</div>
