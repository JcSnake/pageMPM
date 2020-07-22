<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <title>MASPM | Inicio</title>
    <?php include_once('template/head.php'); ?>
</head>
<body>
    <?php include_once('template/nav.php'); ?>

    <section class="mp-main-container mp-bg-cl-gray-light">
        <!-- Content -->
        <div id="mp-inicio">
            <div class="uk-slidenav-position uk-hidden-small" data-uk-slideshow="{autoplay: true, pauseOnHover: false, autoplayInterval: 4000}">
                <ul class="uk-slideshow">
                    <li>
                        <img src="/resources/images/slider/inicio.jpg" width="800" height="400" alt="Inicio">
                        <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center mp-overlay">
                            <div class="uk-width-1-1 uk-margin-left uk-margin-right mp-slider-block-responsive">
                                <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                                    <p class="mp-head-xl uk-margin-remove mp-color-white mp-head-xl-slider"><span class="mp-head-xl-light mp-color-white">Transformando Conocimiento </span><b class="mp-font-roboto mp-color-secondary">en Éxito</b></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                        $path = 'resources/json/slides/mx/slides.json';

                        if(file_exists($path)) {
                            $slides = (object)json_decode(file_get_contents($path));
                            $counter = 1;

                            foreach($slides->slides as $slide) {
                                $tmp = '<li data-mp-curso-info="'.$slide->accion.'">';
                                $tmp .= '<img src="/resources/images/slider/slide'.$counter.'.jpg" width="800" height="400" alt="'.$slide->titulo.'">';
                                $tmp .= '<div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center mp-overlay">';
                                $tmp .= '<div class="uk-width-1-1 uk-margin-left uk-margin-right mp-slider-block-responsive">';
                                $tmp .= '<p style="font-size: 1.8em" class="mp-head-xl uk-text-left uk-margin-remove mp-color-white mp-head-xl-slider"><span class="mp-head-xl-light mp-color-white">Curso de </span><b class="mp-font-roboto mp-color-secondary">'.$slide->titulo.'</b></p>';
                                $tmp .= '<h2 class="uk-text-left uk-margin-remove uk-margin-top uk-padding-top mp-color-white"><span class="mp-head-xl-light mp-color-white">'.$slide->fecha.'<span></h2>';
                                $tmp .= '<p class="uk-text-left uk-margin-remove uk-text-large mp-color-white">'.$slide->descripcion.'</p>';
                                $tmp .= '<p class="uk-text-right uk-text-large mp-color-secondary" style="font-weight: 600;">'.$slide->duracion.' HRS';

                                if(!empty($slide->pdus)) {
                                    $tmp .= ' | '.$slide->pdus.' PDUs';
                                }

                                $tmp .= '</p>';
                                $tmp .= '<div class="mp-slide-btn">';
                                $tmp .= '<a href="contacto.php?curso='.$slide->accion.'" class="uk-button mp-bg-cl-secondary">Contáctanos</a>';
                                $tmp .= '</div>';
                                $tmp .= '</div>';
                                $tmp .= '</div>';
                                $tmp .= '</li>';

                                echo $tmp;
                                $counter += 1;
                            }
                        }
                    ?>
                </ul>
                <a href="#" class="uk-slidenav-previous mp-slideshow mp-slideshow-left" data-uk-slideshow-item="previous"></a>
                <a href="#" class="uk-slidenav-next mp-slideshow mp-slideshow-right" data-uk-slideshow-item="next"></a>
            </div>
            <div class="uk-slidenav-position uk-visible-small" data-uk-slideshow="{autoplay: true, pauseOnHover: false, autoplayInterval: 4000}">
                <ul class="uk-slideshow">
                    <li>
                        <img src="/resources/images/slider/inicio-v.jpg" width="375" height="646" alt="Inicio">
                        <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center mp-overlay">
                            <div class="uk-width-1-1 uk-margin-left uk-margin-right mp-slider-block-responsive">
                                <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                                    <p class="mp-head-xl uk-margin-remove mp-color-white mp-head-xl-slider"><span class="mp-head-xl-light mp-color-white">Transformando Conocimiento </span><b class="mp-font-roboto mp-color-secondary">en Éxito</b></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php 
                        if(file_exists($path)) {
                            $slides = (object)json_decode(file_get_contents($path));
                            $counter = 1;

                            foreach($slides->slides as $slide) {
                                $tmp = '<li>';
                                $tmp .= '<img src="resources/images/slider/slide'.$counter.'-v.jpg" width="375" height="646" alt="'.$slide->titulo.'">';
                                $tmp .= '<div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center mp-overlay">';
                                $tmp .= '<div class="uk-widt-1-1">';
                                $tmp .= '<p class="mp-head-xl uk-text-left uk-margin-remove mp-color-white mp-head-xl-slider"><span class="mp-head-xl-light mp-color-white">Curso de </span><b class="mp-font-roboto mp-color-secondary">'.$slide->titulo.'</b></p>';
                                $tmp .= '<h2 class="uk-text-left uk-margin-top uk-padding-top mp-color-white"><span class="mp-head-xl-light mp-color-white">'.$slide->fecha.'</span></h2>';
                                $tmp .= '<p class="uk-text-left uk-text-large mp-color-white">'.$slide->descripcion.'</p>';
                                $tmp .= '<p class="uk-text-right uk-text-large mp-color-secondary">'.$slide->duracion.' HRS';

                                if(!empty($slide->pdus)) {
                                    $tmp .= ' | '.$slide->pdus.' PDUs';
                                }

                                $tmp .= '</p>';
                                $tmp .= '<div class="mp-slide-btn">';
                                $tmp .= '<a href="contacto.php?curso='.$slide->accion.'" class="uk-button mp-bg-cl-secondary">Contáctanos</a>';
                                $tmp .= '</div>';
                                $tmp .= '</div>';
                                $tmp .= '</div>';
                                $tmp .= '</li>';

                                echo $tmp;
                                $counter += 1;
                            }
                        }
                    ?>
                </ul>
                <a href="#" class="uk-slidenav-previous mp-slideshow mp-slideshow-left" data-uk-slideshow-item="previous"></a>
                <a href="#" class="uk-slidenav-next mp-slideshow mp-slideshow-right" data-uk-slideshow-item="next"></a>
            </div>
        </div>
        <!-- Nosotros -->
        <section id="mp-nosotros" class="uk-block mp-bg-cl-gray-light mp-bg-img">
            <div class="uk-grid uk-grid-collapse uk-width-1-1 uk-width-medium-4-5 uk-width-large-4-5 uk-container-center" data-uk-grid>
                <div class="uk-width-1-2 uk-hidden-small">
                    <img class="uk-width-1-1" src="/resources/images/map.svg" width="100" height="100" alt="Mapa" data-uk-scrollspy="{cls: 'uk-animation-scale-down', delay: 300}">
                </div>
                <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                        <div class="uk-width-small-4-5 uk-width-medium-1-1 uk-width-large-1-1 mp-padding-large">
                            <h1 class="uk-margin-remove mp-font-roboto mp-color-primary mp-head-xl mp-head-xl-light">Sobre <b class="mp-color-secondary mp-font-roboto">Nosotros</b></h1>
                            <h2 class="uk-margin-remove mp-head-xx mp-head-xl-light mp-color-primary">MASPM<sup>&reg;</sup></h2>
                            <p class="uk-text-justify">Somos una empresa mexicana con presencia internacional, expertos en estrategias en tecnología y telecomunicaciones, servicios de capital humano y capacitación, garantizando calidad y profesionalismo desde hace más de 10 años a nivel Latinoamérica.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-visible-small">
                    <img class="uk-width-1-1" src="/resources/images/map.svg" width="100" height="100" alt="Mapa">
                </div>
                <div class="uk-width-1-1 uk-text-center uk-margin-large-top uk-margin-bottom">
                    <p class="uk-text-bold"><span class="mp-color-red uk-text-bold">01</span> CDMX - MTY <span class="mp-color-secondary">|</span>
                        <span class="mp-color-green-op uk-text-bold">02</span> BRASIL <span class="mp-color-secondary">|</span></span>
                        <span class="mp-color-blue-light uk-text-bold">03</span> COLOMBIA <span class="mp-color-secondary">|</span></span>
                        <span class="mp-color-purple uk-text-bold">04</span> ARGENTINA <span class="mp-color-secondary">|</span></span>
                        <span class="mp-color-green uk-text-bold">05</span> CHILE <span class="mp-color-secondary">|</span></span>
                        <span class="mp-color-brown uk-text-bold">06</span> PERÚ</span>
                    </p>
                </div>
            </div>
        </section>
        <!-- Servicios -->
        <section id="mp-servicios" class="uk-block uk-padding-remove mp-bg-cl-white">
            <h1 class="uk-text-center mp-font-roboto mp-head-xl mp-head-xl-light">Nuestros <b class="mp-font-roboto mp-color-white">Servicios</b></h1>
            <div class="uk-grid uk-text-center" data-uk-grid data-uk-scrollspy="{cls: 'uk-animation-scale-up uk-invisible', target: '.mp-block-service', delay: 200}">
                <div class="uk-width-small-3-4 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-large-bottom">
                    <div class="uk-invisible mp-block-service">
                        <div>
                            <a href="outsourcing.php"><img src="/resources/images/services/outsourcingServicios.svg" width="300" height="300" alt="Servicio"></a>
                        </div>
                        <div>
                            <h3>Outsourcing</h3>
                            <p>Asignación de Capital Humano especializado en TI y Negocio.</p>
                            <div class="uk-flex uk-flex-center uk-flex-middle mp-block-service-more">
                                <a href="outsourcing.php">&bull;&bull;&bull;</a>
                            </div>
                        </div>
                        <div>
                            <a href="outsourcing.php"><img class="uk-animation-shake uk-animation-hover mp-block-service-icon" src="/resources/images/services/outsourcing.svg" width="50" height="50" alt="Servicio icon"></a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-large-bottom">
                    <div class="uk-invisible mp-block-service">
                        <div>
                            <a href="capacitacion.php"><img src="/resources/images/services/capacitacionServicios.svg" width="300" height="300" alt="Servicio"></a>
                        </div>
                        <div>
                            <h3>Capacitación</h3>
                            <p>Programas de capacitación a la medida y fechas calendario de mejores prácticas de TI y Negocio.</p>
                            <div class="uk-flex uk-flex-center uk-flex-middle mp-block-service-more">
                                <a href="capacitacion.php">&bull;&bull;&bull;</a>
                            </div>
                        </div>
                        <div>
                            <a href="capacitacion.php"><img class="uk-animation-shake uk-animation-hover mp-block-service-icon" src="/resources/images/services/capacitacion.svg" width="50" height="50" alt="Servicio icon"></a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-large-bottom">
                    <div class="uk-invisible mp-block-service">
                        <div>
                            <a href="consultoria.php"><img src="/resources/images/services/consultoriaServicios.svg" width="300" height="300" alt="Servicio"></a>
                        </div>
                        <div>
                            <h3>Consultoria</h3>
                            <p>Trazamos un camino más eficiente y más organizado para alcanzar las metas de tus proyectos y evolucionar tu empresa.</p>
                            <div class="uk-flex uk-flex-center uk-flex-middle mp-block-service-more">
                                <a href="consultoria.php">&bull;&bull;&bull;</a>
                            </div>
                        </div>
                        <div>
                            <a href="consultoria.php"><img class="uk-animation-shake uk-animation-hover mp-block-service-icon" src="/resources/images/services/consultoria.svg" width="50" height="50" alt="Servicio icon"></a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-large-bottom">
                    <div class="uk-invisible mp-block-service">
                        <div>
                            <a href="renta.php"><img src="/resources/images/services/rentaServicios.svg" width="300" height="300" alt="Servicio"></a>
                        </div>
                        <div>
                            <h3>Renta de aulas</h3>
                            <p>Reservación de espacios para llevar a acabo sus eventos de capacitación o formación, conferencias, en aulas diseñadas para el aprendizaje.</p>
                            <div class="uk-flex uk-flex-center uk-flex-middle mp-block-service-more">
                                <a href="renta.php">&bull;&bull;&bull;</a>
                            </div>
                        </div>
                        <div>
                            <a href="renta.php"><img class="uk-animation-shake uk-animation-hover mp-block-service-icon" src="/resources/images/services/aulas.svg" width="50" height="50" alt="Servicio icon"></a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 uk-margin-large-bottom">
                    <div class="uk-invisible mp-block-service">
                        <div>
                            <a href="fabrica_software.php"><img src="/resources/images/services/fabricaServicios.svg" width="300" height="300" alt="Servicio"></a>
                        </div>
                        <div>
                            <h3>Fabrica de Software</h3>
                            <p>Desarrollo de aplicaciones o programas de acuerdo a tus necesidades.</p>
                            <div class="uk-flex uk-flex-center uk-flex-middle mp-block-service-more">
                                <a href="fabrica_software.php">&bull;&bull;&bull;</a>
                            </div>
                        </div>
                        <div>
                            <a href="fabrica_software.php"><img class="uk-animation-shake uk-animation-hover mp-block-service-icon" src="/resources/images/services/software.svg" width="50" height="50" alt="Servicio icon"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php include_once('template/footer.php'); ?>
</body>
</html>
