<?php
    $home = ($_SERVER['REQUEST_URI'] === '/mx/' || $_SERVER['REQUEST_URI'] === '/mx/index.php');
?>
<div id="top" class="uk-grid uk-grid-collapse mp-bg-cl-primary mp-main-container">
    <div class="uk-container-center uk-hidden-small mp-nav-float-right mp-bg-cl-white mp-border-radius-left mp-hidden">
        <a href="#"><img src="/resources/images/paises.svg" class="uk-align-center uk-margin-remove mp-image-container" data-src="/resources/images/paises.svg" data-hover="/resources/images/paises_hover.svg" width="43" height="39" alt="Paises"></a>
        <h3 class="uk-margin-remove mp-color-gray mp-line-height-remove"><b>PAÍS</b></h3>
    </div>
    <div class="uk-width-1-1">
        <div class="uk-grid uk-container-center uk-hidden-small mp-header">
            <div class="uk-width-small-1-1 uk-width-medium-1-5 uk-width-large-2-5 uk-margin-top uk-padding-remove">
                <a href="index.php"><img src="/resources/images/logo.svg" class="uk-align-left"></a>
            </div>
            <div class="uk-width-large-3-5 uk-width-medium-4-5 uk-width-small-1-1 uk-margin-top mp-header-white-color">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-medium-1-3">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-2-6">
                                <img src="/resources/images/telefono.svg" class="uk-align-center" width="53" height="49" alt="Telefono">
                            </div>
                            <div class="uk-width-4-6">
                                <h2 class="uk-h3 uk-margin-remove">LLÁMANOS</h2>
                                <a href="tel:+525552640992"><p class="uk-margin-remove mp-color-white">+52 (55) 5264-0992</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-3">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-2-6">
                                <img src="/resources/images/email.svg" class="uk-align-center" width="53" height="49" alt="Correo">
                            </div>
                            <div class="uk-width-4-6">
                                <h2 class="uk-h3 uk-margin-remove">CORREO</h2>
                                <a href="mailto:contacto@maspm.lat"><p class="uk-margin-remove mp-color-white">contacto@maspm.lat</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-3">
                        <div class="uk-grid uk-grid-collapse">
                            <div class="uk-width-2-6">
                                <a href="https://wa.me/525545306918" target="_blank"><img src="/resources/images/whatsapp.svg" class="uk-align-center" width="53" height="49" alt="WhatsApp"></a>
                            </div>
                            <div class="uk-width-4-6">
                                <h2 class="uk-h3 uk-margin-remove"><a href="https://wa.me/525545306918" class="uk-contrast" target="_blank">WHATSAPP</a></h2>
                                <p class="uk-margin-remove mp-color-white"><a href="https://wa.me/525545306918" class="uk-contrast" target="_blank">+52 (55) 4530-6918</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-width-1-1">
        <nav class="uk-navbar uk-container-center uk-hidden-small mp-nav mp-border-radius-top">
            <ul id="mpNav" class="uk-navbar-nav uk-hidden-small uk-width-1-1 mp-nav-icon-bg">
                <?php
                    if($home) {
                ?>
                    <li class="mp-nav-li"><a href="#mp-servicios" data-uk-smooth-scroll>SERVICIOS</a></li>
                <?php      
                    } else {
                ?>
                    <li class="mp-nav-li" data-uk-dropdown>
                        <a href="#">SERVICIOS</a>
                        <div class="uk-dropdown uk-dropdown-small uk-margin-top mp-sub-nav">
                            <ul class="uk-nav uk-nav-dropdown uk-padding-remove">
                                <li class="mp-relative mp-sub-nav-hassubs">
                                    <a href="outsourcing.php">OUTSOURCING</a>
                                </li>
                                <li class="mp-relative mp-sub-nav-hassubs">
                                    <a href="capacitacion.php">CAPACITACIÓN</a>
                                </li>
                                <li class="mp-relative mp-sub-nav-hassubs">
                                    <a href="consultoria.php">CONSULTORÍA</a>
                                </li>
                                <li class="mp-relative mp-sub-nav-hassubs">
                                    <a href="renta.php">RENTA DE AULAS</a>
                                </li>
                                <li class="mp-relative mp-sub-nav-hassubs">
                                    <a href="fabrica_software.php">FÁBRICA DE SOFTWARE</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                <?php
                    }
                ?>
                <li class="mp-nav-li" data-uk-dropdown>
                    <a href="capacitacion.php">CAPACITACIÓN</a>
                    <div class="uk-dropdown uk-dropdown-small uk-margin-top mp-sub-nav">
                        <ul class="uk-nav uk-nav-dropdown">
                            <li class="mp-relative mp-sub-nav-hassubs">
                                <a href="#">DIRECCIÓN DE PROYECTOS <i class="uk-align-right uk-icon-chevron-right mp-margin-icon"></i></a>
                                <ul class="mp-sub-nav-dropdown">
                                    <li><a href="curso.php?curso=ddp">Diplomado en Dirección de Proyectos</a></li>
                                    <li><a href="curso.php?curso=taller">Taller de Preparación para la Certificación PMP<sup>&reg;</sup></a></li>
                                    <li><a href="curso.php?curso=fundamentos">Fundamentos en Dirección de Proyectos</a></li>
                                    <li><a href="curso.php?curso=msProject">MS Project</a></li>
                                </ul>
                            </li>
                            <li class="mp-relative mp-sub-nav-hassubs">
                                <a href="#">DIRECCIÓN DE PROYECTOS ÁGIL <i class="uk-align-right uk-icon-chevron-right mp-margin-icon"></i></a>
                                <ul class="mp-sub-nav-dropdown">
                                    <li><a href="curso.php?curso=scrumMas">Scrum Master Certified (SMC™)</a></li>
                                    <li><a href="curso.php?curso=scrumDev">Scrum Developer Certified (SDC™)</a></li>
                                    <li><a href="contacto.php?curso=scrumProd">Scrum Product Owner Certified (SPOC™)</a></li>
                                </ul>
                            </li>
                            <li class="mp-relative mp-sub-nav-hassubs">
                                <a href="#">MEJORES PRÁCTICAS DE NEGOCIO Y TI <i class="uk-align-right uk-icon-chevron-right mp-margin-icon"></i></a>
                                <ul class="mp-sub-nav-dropdown">
                                    <li><a href="curso.php?curso=cobit">COBIT<sup>&reg;</sup> 5 Foundation</a></li>
                                    <li><a href="curso.php?curso=analisisNegocio">Análisis de negocio</a></li>
                                    <li><a href="curso.php?curso=bpmn">BPMN™</a></li>
                                    <li><a href="curso.php?curso=togaf">TOGAF<sup>&reg;</sup></a></li>
                                </ul>
                            </li>
                            <li class="mp-relative mp-sub-nav-hassubs">
                                <a href="#">COMPETENCIAS INTERPERSONALES Y DIRECTIVAS <i class="uk-align-right uk-icon-chevron-right mp-margin-icon"></i></a>
                                <ul class="mp-sub-nav-dropdown">
                                    <li><a href="curso.php?curso=liderazgo">Liderazgo</a></li>
                                    <li><a href="curso.php?curso=empoderamiento">Empoderamiento de ventas</a></li>
                                    <li><a href="curso.php?curso=comunicacion">Comunicación efectiva</a></li>
                                </ul>
                            </li>
                            <li class="mp-relative mp-sub-nav-hassubs">
                                <a href="#">DESARROLLO<i class="uk-align-right uk-icon-chevron-right mp-margin-icon"></i></a>
                                <ul class="mp-sub-nav-dropdown">
                                    <li><a href="contacto.php?curso=movil">Móvil (Android/iOS)</a></li>
                                    <li><a href="contacto.php?curso=sql">SQL</a></li>
                                    <li><a href="contacto.php?curso=java">Java</a></li>
                                    <li><a href="contacto.php?curso=sharepoint">SharePoint</a></li>
                                    <li><a href="contacto.php?curso=net">.NET</a></li>
                                </ul>
                            </li>
                            <li class="mp-relative mp-sub-nav-hassubs">
                                <a href="#">OTROS<i class="uk-align-right uk-icon-chevron-right mp-margin-icon"></i></a>
                                <ul class="mp-sub-nav-dropdown">
                                    <li><a href="contacto.php?curso=vmware">VMware ICM 6.5</a></li>
                                    <li><a href="contacto.php?curso=hyperv">Hyper-V</a></li>
                                    <li><a href="contacto.php?curso=ofimatica">Excel | Word | PowerPoint | Outlook</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mp-nav-li"><a href="calendario.php">CALENDARIO</a></li>
                <li class="mp-nav-li"><a href="#modalBolsa" data-uk-modal>BOLSA DE TRABAJO</a></li>
                <li class="mp-nav-li"><a href="contacto.php">CONTACTO</a></li>
                <li class="mp-nav-icon">
                    <a href="#modalPaypal" class="mp-height" data-uk-modal>
                        <img src="/resources/images/paypal.svg" data-src="/resources/images/paypal.svg" data-hover="/resources/images/paypal_hover.svg" class="uk-align-center mp-image-container" width="40" height="40" alt="Paypal">
                    </a>
                </li>
                <li class="mp-nav-icon">
                    <a href="https://twitter.com/MASPMlat" target="_blank">
                        <img src="/resources/images/twitter.svg" data-src="/resources/images/twitter.svg" data-hover="/resources/images/twitter_hover.svg" class="uk-align-center mp-image-container" width="40" height="40" alt="Twitter">
                    </a>
                </li>
                <li class="mp-nav-icon">
                    <a href="https://www.facebook.com/MASPMLAT" target="_blank">
                        <img src="/resources/images/fb.svg" data-src="/resources/images/fb.svg" data-hover="/resources/images/fb_hover.svg" class="uk-align-center mp-image-container" width="40" height="40" alt="FaceBook">
                    </a>
                </li>
                <li class="mp-nav-icon">
                    <a href="https://www.instagram.com/maspmlat/" target="_blank">
                        <img src="/resources/images/instagram.svg" data-src="/resources/images/instagram.svg" data-hover="/resources/images/instagram_hover.svg" class="uk-align-center mp-image-container" width="40" height="40" alt="Instagram">
                    </a>
                </li>
                <li class="mp-nav-icon">
                    <a href="https://www.linkedin.com/in/maspm-méxico/" class=" mp-border-radius-right" target="_blank">
                        <img src="/resources/images/linkedin.svg" data-src="/resources/images/linkedin.svg" data-hover="/resources/images/linkedin_hover.svg" class="uk-align-center mp-image-container" width="40" height="40" alt="Linkedin">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="uk-width-1-1 uk-visible-small uk-margin-top mp-relative">
        <div class="mp-nav-float">
            <a href="#mp-nav-offcanvas" class="uk-navbar-toggle mp-color-white" data-uk-offcanvas="{mode:'slide'}"></a>
        </div>
        <a href="index.php"><img src="/resources/images/logo.svg" class="uk-align-center" alt="MASPM"></a>
    </div>
</div>

<div id="mp-nav-offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
        <div class="uk-width-1-1">
            <a href="index.php"><img src="/resources/images/logo.svg" class="uk-margin-top uk-align-center"></a>
        </div>
        <ul class="uk-nav uk-nav-side uk-nav-parent-icon uk-width-medium-2-3 mp-canvas-nav" data-uk-nav>
            <?php
                if($home) {
            ?>
                <li><a href="#mp-servicios"><i class="uk-icon-list mp-color-white uk-margin-right"></i>SERVICIOS</a></li>
            <?php
                } else {
            ?>
                <li class="uk-parent">
                    <a href="#"><i class="uk-icon-tasks mp-color-white uk-margin-right"></i>SERVICIOS</a>
                    <ul class="uk-nav-sub uk-margin-left">
                        <li><a href="outsourcing.php"><i class="uk-icon-caret-right uk-icon-justify uk-contrast"></i>&nbsp;OUTSOURCING</a></li>
                        <li><a href="capacitacion.php"><i class="uk-icon-caret-right uk-icon-justify uk-contrast"></i>&nbsp;CAPACITACIÓN</a></li>
                        <li><a href="consultoria.php"><i class="uk-icon-caret-right uk-icon-justify uk-contrast"></i>&nbsp;CONSULTORÍA</a></li>
                        <li><a href="renta.php"><i class="uk-icon-caret-right uk-icon-justify uk-contrast"></i>&nbsp;RENTA DE AULAS</a></li>
                        <li><a href="fabrica_software.php"><i class="uk-icon-caret-right uk-icon-justify uk-contrast"></i>&nbsp;FÁBRICA DE SOFTWARE</a></li>
                    </ul>
                </li>
            <?php
                }
            ?>
            <li><a href="capacitacion.php"><i class="uk-icon-suitcase mp-color-white uk-margin-right"></i>CAPACITACIÓN</a></li>
            <li><a href="calendario.php"><i class="uk-icon-calendar mp-color-white uk-margin-right"></i>CALENDARIO</a></li>
            <li><a href="#modalBolsa" data-uk-modal><i class="uk-icon-users mp-color-white uk-margin-right"></i>BOLSA DE TRABAJO</a></li>
            <li><a href="contacto.php"><i class="uk-icon-comment mp-color-white uk-margin-right"></i>CONTACTO</a></li>
        </ul>
        <hr>
        <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-width-large-1-4 uk-margin-bottom uk-margin-top">
            <div>
                <div class="uk-grid uk-grid-collapse uk-margin-top">
                    <div class="uk-width-2-6">
                        <img src="/resources/images/telefono.svg" width="40" height="40" alt="Teléfono" class="uk-align-center">
                    </div>
                    <div class="uk-width-4-6">
                        <b class="uk-margin-remove mp-color-white">LLÁMANOS</b>
                        <a href="tel:+525552640992"><p class="uk-margin-remove mp-color-white">+52 (55) 5264-0992</p></a>
                    </div>
                </div>
                <div class="uk-grid uk-grid-collapse uk-margin-top">
                    <div class="uk-width-2-6">
                        <img src="/resources/images/email.svg" width="40" height="40" alt="Correo" class="uk-align-center">
                    </div>
                    <div class="uk-width-4-6">
                        <b class="uk-margin-remove mp-color-white">CORREO</b>
                        <a href="mailto:contacto@maspm.lat"><p class="uk-margin-remove mp-color-white">contacto@maspm.lat</p></a>
                    </div>
                </div>
                <div class="uk-grid uk-grid-collapse uk-margin-top">
                    <div class="uk-width-2-6">
                        <a href="https://wa.me/525545306918" target="_blank"><img src="/resources/images/whatsapp.svg" width="40" height="40" alt="WhatsApp" class="uk-align-center"></a>
                    </div>
                    <div class="uk-width-4-6">
                        <b class="uk-margin-remove mp-color-white"><a href="https://wa.me/525545306918" class="uk-contrast" target="_blank">WHATSAPP</a></b>
                        <p class="uk-margin-remove mp-color-white"><a href="https://wa.me/525545306918" class="uk-contrast" target="_blank">+52 (55) 4530-6918</a></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="uk-width-small-1-1 uk-width-medium-1-4 uk-width-large-1-4 uk-text-center uk-margin-bottom">
            <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                <div>
                    <div class="uk-grid uk-grid-collapse" data-uk-grid>
                        <div class="uk-width-1-5">
                            <a href="#modalPaypal" target="_blank" data-uk-modal><img src="/resources/images/footer/paypal.svg" width="50" height="50" alt="PayPal"></a>
                        </div>
                        <div class="uk-width-1-5">
                            <a href="https://twitter.com/MASPMlat" target="_blank"><img src="/resources/images/footer/tw.svg" width="50" height="50" alt="Twitter"></a>
                        </div>
                        <div class="uk-width-1-5">
                            <a href="https://www.facebook.com/MASPMLAT" target="_blank"><img src="/resources/images/footer/fb.svg" width="50" height="50" alt="Facebook"></a>
                        </div>
                        <div class="uk-width-1-5">
                            <a href="https://www.instagram.com/maspmlat/" target="_blank"><img src="/resources/images/footer/ins.svg" width="50" height="50" alt="Instagram"></a>
                        </div>
                        <div class="uk-width-1-5">
                            <a href="https://www.linkedin.com/in/maspm-méxico/" target="_blank"><img src="/resources/images/footer/in.svg" width="50" height="50" alt="LinkedIn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>