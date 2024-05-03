<br><br>
<div class="container">
    <div class="row justify-content-center">
        <h2 class="fw-light thead-light text-dark text-center fw-bold">Transparencia LOTAIP</h2>
    </div>
    <br><br>
    <div class="row justify-content-center">
        <p class='lh-lg'>La Ley Orgánica de Transparencia y Acceso a la Información Pública (LOTAIP) garantiza y norma el ejercicio del derecho fundamental 
        de las personas a la información. Por eso, en este espacio transparentamos los actos de quienes hacemos el CPCCS y cumplimos con 
        parte del proceso de rendición de cuentas hacia la ciudadanía.</p>

        <p class='lh-lg'>Art. 7.- Difusión de la Información Pública.- Por la transparencia en la gestión administrativa que están obligadas a observar 
        todas las instituciones del Estado que conforman el sector público en los términos del artículo 225 de la Constitución de la
        República y demás entes señalados en el artículo 1 de la presente Ley, difundirán a través de un portal de información o página
        web, así como de los medios necesarios a disposición del público, implementados en la misma institución, la siguiente información 
        mínima actualizada, que para efectos de esta Ley, se la considera de naturaleza obligatoria.</p>
    </div><br>

    
    <div class="accordion accordion-flush" id="accordionFlushExample">
    <?php foreach ($lotaip_pris as $index => $lotaip_pri): ?>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading-<?= $index ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $index ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $index ?>">
                <?= $lotaip_pri->anio ?>
            </button>
        </h2>
        <div id="flush-collapse-<?= $index ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $index ?>" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $index ?>-<?= $lotaip_pri->mes ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $index ?>-<?= $lotaip_pri->mes ?>">
                    <?= $lotaip_pri->mes ?>
                </button>
                <div id="flush-collapse-<?= $index ?>-<?= $lotaip_pri->mes ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $index ?>" data-bs-parent="#flush-collapse-<?= $index ?>">
                    <div class="accordion-body">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $index ?>-<?= $lotaip_pri->mes ?>-<?= $lotaip_pri->lotaip_lis ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $index ?>-<?= $lotaip_pri->mes ?>-<?= $lotaip_pri->lotaip_lis ?>">
                            <?= $lotaip_pri->lotaip_lis ?>
                        </button>
                        <div id="flush-collapse-<?= $index ?>-<?= $lotaip_pri->mes ?>-<?= $lotaip_pri->lotaip_lis ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $index ?>-<?= $lotaip_pri->mes?>-<?= $lotaip_pri->lotaip_lis ?>" data-bs-parent="#flush-collapse-<?= $index ?>-<?= $lotaip_pri->mes ?>-<?= $lotaip_pri->lotaip_lis ?>">
                            <div class="accordion-body">
                                <p class="fs-5 text-dark"><?= $lotaip_pri->lotaip_lisli ?></p>
                                <a class="text-dark" href="<?= $lotaip_pri->archivo ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="dark" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16" style="margin-right: 5px;">
                                        <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708"/>
                                    </svg> 
                                    Descargar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>


</div>
