<br><div class="container">
    <div class="row justify-content-center">
        <h2 class="fw-light thead-light text-dark text-center">Eventos deportivos de Fútbol Sala 2024 </h2>
    </div>
    <br><br>
    <style>
        .table {
            width: 100%;
        }
        
        .table tbody tr {
            height: auto;
        }
        
        .fecha-column {
            width: 20%; 
        }
    </style>
<div class="row   ">
        <form action="" method="post">
            <div class="table-responsive-md ">
                <table class=" table table-hover   caption-top  align-middle table-sm" >
                    <thead class=" table-dark">
                        <tr >
                            <th class="lead text-center text-body-dark h6 fecha-column"><strong>FECHA DE INICIO</strong></th>
                            <th class="lead text-center text-body-dark h6"><strong>CANTON</strong></th>
                            <th class="lead text-center text-body-dark h6"><strong>PARROQUIA</strong></th>
                            <th class="lead text-center text-body-dark h6"><strong>CATEGORIA</strong></th>
                            <th class="lead text-center text-body-dark h6"><strong>GENERO</strong></th>
                            <th class="lead text-center text-body-dark h6"><strong>ESCENARIO DEPORTIVO</strong></th>
                            <th class="lead text-center text-body-dark h6"><strong>DIRECCION</strong></th>
                            <th class="lead text-center text-body-dark h6"><strong>MAPA</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($eventosdeportivos as $eventode): ?>
                            <tr>
                            <td class="text-center" ><?= $eventode->fecha ?? 'desconocido'; ?></td>
                            <td class="text-center" ><?= $eventode->canton ?? 'desconocido'; ?></td>
                                <td class="text-center" ><?= $eventode->parroquia ?? 'desconocido'; ?></td>
                                <td class="text-center" ><?= $eventode->categoria ?? 'desconocido'; ?></td>
                                <td class="text-center"> <?= $eventode->genero ?? 'desconocido'; ?></td>
                                <td class="text-center" ><?= $eventode->escenario ?? 'desconocido'; ?></td>
                                <td class="text-center" ><?= $eventode->direccion ?? 'desconocido'; ?></td>

                               <td class="d-flex justify-content-center" >
                                    <!-- Botón que activa el modal -->
                                    <button type="button" class="btn btn-dark text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8z"/>
                                    <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
                                    </svg>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 justify-content-center" id="staticBackdropLabel">EVENTO DEPORTIVO DE FUTBOL SALA 2024</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4 justify-content-start"><br>          
                                            <p><strong>Cantón: </strong><?= $eventode->canton ?? 'desconocido'; ?></p>
                                            <p><strong>Parroquia:</strong> <?= $eventode->parroquia ?? 'desconocido'; ?></p>
                                            <p><strong>Categoria:</strong> <?= $eventode->categoria ?? 'desconocido'; ?><p>
                                            <p><strong>Genero:</strong> <?= $eventode->genero ?? 'desconocido'; ?></p>
                                            <p><strong>Escenario:</strong> <?= $eventode->escenario ?? 'desconocido'; ?></p>
                                            <p><strong>Dirección:</strong> <?= $eventode->direccion ?? 'desconocido'; ?></p>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="mapa<?= $eventode->id_evento ?>" style="height: 300px;"></div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                </td>


                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
<script>
    <?php foreach ($eventosdeportivos as $eventode): ?>
        var mapa<?= $eventode->id_evento ?> = L.map('mapa<?= $eventode->id_evento ?>').setView([<?= $eventode->latitud ?>, <?= $eventode->longitud ?>], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mapa<?= $eventode->id_evento ?>);
        
        L.marker([<?= $eventode->latitud ?>, <?= $eventode->longitud ?>]).addTo(mapa<?= $eventode->id_evento ?>);
    <?php endforeach; ?>
</script>
