<!DOCTYPE html>
<html>
<head>
    <title>MASPM</title>
    <?php include_once('template/head.php'); ?>
</head>
<body>

    <section class="mp-main-container">
        <!-- Content -->
        <section>
            <div class="uk-panel uk-panel-box uk-margin-top uk-margin-bottom">
                <h1>Tipografía</h1>
                <hr class="uk-article-divider">
                <h2 class="mp-font-roboto">• Roboto Slab</h2>
                <p>Usar esta tipografía únicamente en las secciones indicadas de la página web.</p>
                <h2>• Source Sans Pro</h2>
                <p>Esta tipografía esta incluida en todos los títulos del sitio.</p>
                <h2 class="mp-font-quicksand">• Quicksand</h2>
                <p>Esta tipografía esta incluidar por defecto en todo el contenido del sitio. Se puede usar la clase "mp-font-quicksand" si se quiere hacer uso de esta en algún título.</p>
            </div>
            <div class="uk-panel uk-panel-box uk-margin-bottom">
                <h1>Textos</h1>
                <hr class="uk-article-divider">
                <p class="mp-head-xl">Texto prueba (mp-extra-xl)</p>
                <p class="mp-head-xl">Texto prueba <span class="mp-head-xl-light">(mp-extra-xl mp-extra-xl-light)</span></p>
                <h1>Header 1: Texto de prueba</h1>
                <h2>Header 2: Texto de prueba</h2>
                <h3>Header 3: Texto de prueba</h3>
                <h4>Header 4: Texto de prueba</h4>
                <p>Parrafo: Texto de prueba</p>
                <span>Span: Texto de prueba</span><br>
                <a>Link: Texto de prueba</a><br>
                <i>Italic: Texto de prueba</i><br>
                <b>Negrita: Texto de prueba</b><br>
                <ul>
                    <li>Lista: Texto de prueba</li>
                </ul>
            </div>
            <div class="uk-panel uk-panel-box uk-margin-bottom">
                <h1>Colores</h1>
                <hr class="uk-article-divider">
                <div class="uk-contrast">
                    <div class="mp-color-box mp-bg-cl-primary">
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                            <div>
                                <span class="mp-color-white">Color primario</span><br>
                                <span class="mp-color-white">Hex: #162844</span><br>
                                <span class="mp-color-white">RGB: 22, 40, 68</span>
                            </div>
                        </div>
                    </div>
                    <div class="mp-color-box mp-bg-cl-secondary">
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                            <div>
                                <span class="mp-color-white">Color secundario</span><br>
                                <span class="mp-color-white">Hex: #ffcc33</span><br>
                                <span class="mp-color-white">RGB: 255, 204, 51</span>
                            </div>
                        </div>
                    </div>
                    <div class="mp-color-box mp-bg-cl-gray">
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                            <div>
                                <span class="mp-color-white">Color gris</span><br>
                                <span class="mp-color-white">Hex: #666</span><br>
                                <span class="mp-color-white">RGB: 102, 102, 102</span>
                            </div>
                        </div>
                    </div>
                    <div class="mp-color-box mp-bg-cl-white">
                        <div class="uk-flex uk-flex-center uk-flex-middle uk-height-1-1">
                            <div>
                                <span>Color blanco</span><br>
                                <span>Hex: #fff</span><br>
                                <span>RGB: 255, 255, 255</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-panel uk-panel-box uk-margin-bottom">
                <h1>Animaciones</h1>
                <h2>Implementar cajas de información</h2>
                <div class="uk-grid uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3">
                        <section class="mp-info-block">
                            <img src="https://www.definicionabc.com/wp-content/uploads/desarrollo1.jpg" width="300" height="300" alt="Imagen">
                            <div class="mp-info-block-text">
                                <h1>Título</h1>
                                <p>Contenido del servicio/categoría/opción</p>
                            </div>
                        </section>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3">
                        <section class="mp-info-block">
                            <img src="https://www.definicionabc.com/wp-content/uploads/desarrollo1.jpg" width="300" height="300" alt="Imagen">
                            <div class="mp-info-block-text">
                                <h1>Título</h1>
                                <p>Contenido del servicio/categoría/opción</p>
                            </div>
                        </section>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3">
                        <section class="mp-info-block">
                            <img src="https://www.definicionabc.com/wp-content/uploads/desarrollo1.jpg" width="300" height="300" alt="Imagen">
                            <div class="mp-info-block-text">
                                <h1>Título</h1>
                                <p>Contenido del servicio/categoría/opción</p>
                            </div>
                        </section>
                    </div>
                </div>
                <pre class="uk-padding-remove uk-margin-remove">
                    <xmp class="uk-margin-remove">
                        <section class="mp-info-block">
                            <img src="https://www.definicionabc.com/wp-content/uploads/desarrollo1.jpg" width="300" height="300" alt="Imagen">
                            <div class="mp-info-block-text">
                                <h1>Título</h1>
                                <p>Contenido del servicio/categoría/opción</p>
                            </div>
                        </section>
                    </xmp>
                </pre>
                <h2>Implementar cajas de servicios</h2>
                <section class="mp-subservice-block uk-margin-large-top uk-margin-large-bottom">
                    <h1 class="uk-text-center">Dirección de proyectos</h1>
                    <ul>
                        <li>Dirección de proyectos</li>
                        <li>Taller para la certificación</li>
                    </ul>
                    <img src="https://rt-img.gcdn.co/actualidad/public_images/2017.03/original/58d51965c3618814038b460f.jpg" width="300" height="400" alt="Imagen">
                </section>
                <pre class="uk-padding-remove uk-margin-remove">
                    <xmp class="uk-margin-remove">
                        <section class="mp-subservice-block uk-margin-large-top uk-margin-large-bottom">
                            <h1 class="uk-text-center">Dirección de proyectos</h1>
                            <ul>
                                <li>Dirección de proyectos</li>
                                <li>Taller para la certificación</li>
                            </ul>
                            <img src="https://rt-img.gcdn.co/actualidad/public_images/2017.03/original/58d51965c3618814038b460f.jpg" width="300" height="400" alt="Imagen">
                        </section>
                    </xmp>
                </pre>
            </div>
        </section>
    <section>

    <!-- Import JQuery 3.1.1 for extend JavaScript utilities -->
    <script src="/resources/libs/jquery/jquery_3.1.1.min.js"></script>

    <!-- Import UIKit 2.27.2 Framework for responsive design and utilities -->
    <script src="/resources/libs/uikit_2.27.5/js/uikit.min.js"></script>
    <script src="/resources/libs/uikit_2.27.5/js/components/slideset.min.js"></script>
    <script src="/resources/libs/uikit_2.27.5/js/components/slider.min.js"></script>
    <script src="/resources/libs/uikit_2.27.5/js/components/sticky.min.js"></script>
    <script src="/resources/libs/uikit_2.27.5/js/components/parallax.min.js"></script>
    <script src="/resources/libs/uikit_2.27.5/js/components/slideshow.min.js"></script>
    <script src="/resources/libs/uikit_2.27.5/js/components/slideshow-fx.min.js"></script>
    <script src="/resources/libs/uikit_2.27.5/js/components/notify.min.js"></script>

    <!-- Import Own resources for design and functions -->
    <script src="/resources/js/functions.min.js?v=1.0"></script>
</body>
</html>
