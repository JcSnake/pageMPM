<?php
    $path = __DIR__.'/resources/json/cursos/mx/'.$_GET['curso'].'.json';

    if(!file_exists($path)) {
        header('Location: /');
    }

    $curso = (object)json_decode(file_get_contents($path));
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <title>MASPM | Curso</title>
    <?php include_once('template/head.php'); ?>
</head>
<body>
    <?php include_once('template/nav.php'); ?>
    <section class="mp-main-container mp-bg-cl-gray-light">
        <section id="mp-cursos" class="uk-block mp-bg-cl-gray-light mp-bg-img">
            <div class="uk-width-small-1-1 uk-width-medium-4-5 uk-width-large-4-5 uk-container-center">
                <div class="uk-grid uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-1-1 uk-margin-bottom">
                        <h1 class="mp-font-roboto mp-color-primary mp-head-xl mp-head-xl-light"><?=$curso->curso?></h1>
                        <div class="uk-grid uk-grid-collapse" data-uk-grid>
                            <div class="uk-width-1-1 uk-hidden-small">
                                <img src="/resources/images/services/capacitacion.svg" width="50" height="50" alt="Servicio icon">
                                <span class="uk-h2"><?=$curso->categoria?></span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-large-1-3 uk-width-large-1-3 mp-bg-cl-secondary uk-text-center">
                        <div class="uk-margin-top">
                            <img src="/resources/images/cursos/objetivo.svg" width="100" height="100" alt="objetivoCurso">
                        </div>
                        <h1>Descripción:</h1>
                        <p class="mp-font-curso-contenido uk-margin-large-bottom uk-width-8-10 uk-container-center"><?=$curso->objetivo?></p>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-large-1-3 uk-width-large-1-3 uk-text-center mp-bg-cl-white">
                        <div class="uk-margin-top">
                            <img src="/resources/images/cursos/dirigido.svg" width="100" height="100" alt="dirigidoCurso">
                        </div>
                        <h1>Dirigido a:</h1>
                        <p class="mp-font-curso-contenido uk-margin-large-bottom uk-width-8-10 uk-container-center"><?=$curso->dirigido?></p>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-large-1-3 uk-width-large-1-3 mp-bg-cl-secondary uk-text-center">
                        <div class="uk-margin-top">
                            <img src="/resources/images/cursos/modalidad.svg" width="100" height="100" alt="modalidadCurso">
                        </div>
                        <h1>Modalidad:</h1>
                        <div class="mp-font-curso-contenido">
                            <p><?=$curso->modalidad?></p>
                        </div>
                    </div>
                    <div class="mp-height-block-curso uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 mp-bg-cl-primary uk-text-center" class="mp-height-container-barra">
                        <?php if($curso->pdus > 0) { ?>
                        <h1 class="mp-color-white">Duración y créditos:</h1>
                        <?php } else { ?>
                        <h1 class="mp-color-white">Duración:</h1>
                        <?php } ?>
                            <div class="mp-barra">
                                <div class="mp-bg-cl-white mp-block-icon-course uk-border-circle uk-flex uk-flex-center uk-flex-middle">
                                    <img src="/resources/images/cursos/tiempo.svg" width="40" height="40" alt="duracionCurso">
                                </div>
                                <div id="barraHrs" class="uk-margin-left mp-bg-cursos-bar mp-bg-cursos-linea uk-width-1-2" data-mp-hrs=<?=$curso->duración?>>
                                    <div class="uk-text-center uk-container-center uk-margin-small-top">
                                        <label class="uk-text-bold"><?=$curso->duración?> horas</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mp-barra">
                                <?php if($curso->pdus > 0) { ?>
                                <div class="mp-bg-cl-white mp-block-icon-course uk-border-circle uk-flex uk-flex-center uk-flex-middle">
                                    <img src="/resources/images/cursos/pdus.svg" width="40" height="40" alt="pdusCurso">
                                </div>
                                <?php } ?>
                                <div id="barraPdus" class="uk-margin-left mp-bg-cursos-creditos mp-bg-cursos-linea uk-width-1-2" data-mp-pdus=<?=$curso->pdus?>>
                                    <div class="uk-text-center uk-container-center uk-margin-small-top">
                                        <label class="uk-text-bold"><?=$curso->pdus?> PDU's</label>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 mp-bg-cl-secondary uk-text-center">
                        <div class="uk-margin-top">
                            <img src="/resources/images/cursos/fechas.svg" width="100" height="100" alt="dirigidoCurso">
                        </div>
                        <h1>Próximas fechas:</h1>
                        <div class="uk-width-4-5 uk-container-center uk-text-center">
                            <label class="uk-text-bold"><?=$curso->proximasFechas?></label>
                        </div>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-text-center mp-bg-cl-white">
                        <div class="uk-margin-top">
                            <img src="/resources/images/cursos/cursosRelacionados.svg" width="100" height="100" alt="cursosRelacionados">
                        </div>
                        <h1>Cursos relacionados:</h1>
                        <div class="uk-width-4-5 uk-container-center uk-text-left">
                            <?=$curso->cursosRelacionados?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="uk-text-center mp-padding-block mp-bg-cl-primary">
            <h1 class="uk-contrast">¿Estás interesado en este curso?</h1>
            <a href="contacto.php?curso=<?=$_GET['curso']?>" class="uk-button uk-button-large mp-bg-cl-secondary">Contáctanos</a>
        </section>
    </section>
    <?php include_once('template/footer.php')?>
    <script src="/resources/js/cursos.min.js?v=1.0"></script>
</body>
</html>