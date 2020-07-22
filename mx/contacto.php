<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <title>MASPM | Contacto</title>
    <?php include_once('template/head.php'); ?>
</head>
<body>
    <?php include_once('template/nav.php'); ?>

    <section class="mp-main-container mp-bg-cl-gray-light">
        <!-- Content -->
        <section id="mp-contacto" class="uk-block mp-bg-cl-gray-light mp-bg-img">
            <div class="uk-grid uk-width-small-1-1 uk-width-medium-4-5 uk-width-large-4-5 uk-container-center">
                <div class="uk-width-small-1-1 uk-width-medium-2-3 uk-width-large-2-3 mp-bg-cl-primary uk-text-center">
                    <h1 class="uk-text-center mp-font-roboto mp-head-xl mp-head-xl-light uk-contrast">Contacto</h1>
                    <div class="uk-grid uk-grid-collapse" data-uk-grid>
                        <div class="uk-width-1-1 uk-text-center">
                            <img src="/resources/images/contacto/cdmx.svg" width="200" height="200" alt="CDMX" class="uk-margin-right">
                            <div class="uk-text-center uk-margin-right">
                                <h2 class="mp-color-white">CDMX</h2>
                                <a href="tel:+525552640992"><p class="mp-color-white">Tel.: +52 (55) 5264-0992</p></a>
                                <p class="mp-color-white">Juan Racine 112 Piso 10, Col. Los morales, Del. Miguel Hidalgo, Ciudad de México C.P 11510</p>
                                <p class="mp-color-white">Horario: 08:00 a 20:00 horas</p>
                                <a href="https://www.google.com/maps?ll=19.43827,-99.212236&z=18&t=m&hl=es-ES&gl=US&mapclient=embed&q=10+Juan+Racine+112+Polanco,+Polanco+I+Secc+11550+Ciudad+de+M%C3%A9xico,+CDMX" target="_blank" class="uk-button mp-border-radius uk-margin-bottom">Ver mapa</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="mensaje" class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 mp-bg-cl-gray uk-hidden">
                    <h1 class="mp-head-xl mp-color-secondary">¿Gracias por enviarnos tus datos, pronto un ejecutivo se comunicara contigo!</h1>
                </div>
                <div id="formulario" class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3 mp-bg-cl-gray">
                    <h1 class="mp-color-secondary">Formulario</h1>
                    <form id="frmContacto" class="uk-form uk-width-1-1">
                        <div class="uk-grid uk-width-1-1">
                            <div class="uk-width-1-1 uk-margin-top">
                                <input name="nombre" type="text" placeholder="Nombre" class="inp-color uk-width-1-1">
                            </div>                               
                            <div class="uk-width-1-1 uk-margin-top">
                                <input name="apellido" type="text" placeholder="Apellido" class="inp-color uk-width-1-1">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <input name="telefono" type="text" placeholder="Telefono" class="inp-color uk-width-1-1">
                            </div>                                                    
                            <div class="uk-width-1-1 uk-margin-top">
                                <input name="correo" type="text" placeholder="Correo" class="inp-color uk-width-1-1">
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <select name="curso" class="inp-color uk-width-1-1">
                                    <option value="">Seleccionar el curso de tu interes</option>
                                    <option value="Diplomado en Dirección de Proyectos" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'ddp') echo 'selected'; ?>>Diplomado en Dirección de Proyectos</option>
                                    <option value="Taller de Preparación para la Certificación PMP<sup>&reg;</sup>" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'taller') echo 'selected'; ?>>Taller de Preparación para la Certificación PMP<sup>&reg;</sup></option>
                                    <option value="Fundamentos en Dirección de Proyectos" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'fundamentos') echo 'selected'; ?>>Fundamentos en Dirección de Proyectos</option>
                                    <option value="MS Project" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'msProject') echo 'selected'; ?>>MS Project</option>
                                    <option value="Scrum Master Certified (SMC™)" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'scrumMas') echo 'selected'; ?>>Scrum Master Certified (SMC™)</option>
                                    <option value="Scrum Developer Certified (SDC™)" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'scrumDev') echo 'selected'; ?>>Scrum Developer Certified (SDC™)</option>
                                    <option value="Scrum Product Owner Certified (SPOC™)" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'scrumProd') echo 'selected'; ?>>Scrum Product Owner Certified (SPOC™)</option>
                                    <option value="Cobit<sup>&reg;</sup>" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'cobit') echo 'selected'; ?>>Cobit<sup>&reg;</sup></option>
                                    <option value="Análisis de Negocio" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'analisisNegocio') echo 'selected'; ?>>Análisis de Negocio</option>
                                    <option value="BPMN™" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'bpmn') echo 'selected'; ?>>BPMN™</option>
                                    <option value="TOGAF<sup>&reg;</sup>" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'togaf') echo 'selected'; ?>>TOGAF<sup>&reg;</sup></option>
                                    <option value="Liderazgo" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'liderazgo') echo 'selected'; ?>>Liderazgo</option>
                                    <option value="Empoderamiento de Ventas" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'empoderamiento') echo 'selected'; ?>>Empoderamiento de Ventas</option>
                                    <option value="Comunicación efectiva" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'comunicacion') echo 'selected'; ?>>Comunicación efectiva</option>
                                    <option value="Móvil (Android/iOS)" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'movil') echo 'selected'; ?>>Móvil (Android/iOS)</option>
                                    <option value="SQL" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'sql') echo 'selected'; ?>>SQL</option>
                                    <option value="Java" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'java') echo 'selected'; ?>>Java</option>
                                    <option value="SharePoint" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'sharepoint') echo 'selected'; ?>>SharePoint</option>
                                    <option value=".NET" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'net') echo 'selected'; ?>>.NET</option>
                                    <option value="VMware ICM 6.5" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'vmware') echo 'selected'; ?>>VMware ICM 6.5</option>
                                    <option value="Hyper-V" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'hyperv') echo 'selected'; ?>>Hyper-V</option>
                                    <option value="Excel | Word | PowerPoint | Outlook" <?php if(isset($_GET['curso']) && $_GET['curso'] === 'ofimatica') echo 'selected'; ?>>Excel | Word | PowerPoint | Outlook</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>                      
                            <div class="uk-width-1-1 uk-margin-top">
                                <textarea type="text" name="mensaje" id="inpMensaje" cols="30" rows="10" placeholder="Mensaje (mínimo 10 caracteres)" class="uk-width-1-1"></textarea>
                            </div>
                            <div class="uk-margin-top uk-margin-bottom uk-container-center">
                                <button id="btnContacto" type="button" class="uk-button mp-bg-cl-secondary mp-border-radius">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>

    <?php include_once('template/footer.php')?>
</body>
</html>