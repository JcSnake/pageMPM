<?php
    $path = __DIR__.'/resources/json/calendario/mx/calendario.json';

    if(!file_exists($path)) {
        header('Location: /');
    }

    $calendario = (object)json_decode(file_get_contents($path));
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <title>MASPM | Calendario</title>
    <?php include_once('template/head.php'); ?>
    <link rel="stylesheet" href="/resources/css/calendario.min.css?v=1.0" media="screen">
</head>
<body>
    <?php include_once('template/nav.php'); ?>

    <section class="mp-main-container mp-bg-cl-gray-light">
        <section id="mp-capacitacion" class="uk-block mp-bg-cl-gray-light mp-bg-img">
            <div class="uk-width-small-9-10 uk-width-medium-4-5 uk-width-large-4-5 uk-container-center">
                <h1 class="mp-font-roboto mp-color-primary mp-head-xl mp-head-xl-light uk-margin-top-remove">Nuestro Calendario Trimestral <b class='mp-font-roboto mp-color-secondary'>2019</b></h1>
                <div class="uk-grid uk-grid-collapse" data-uk-grid>
                    <div class="uk-width-small-1-1 uk-width-medium-1-6 uk-width-large-1-6">
                        <button class="uk-width-1-1 uk-height-1-1 uk-button mp-border-radius" data-mp-set-categoria="1">DIRECCIÓN DE PROYECTOS</button>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-6 uk-width-large-1-6">
                        <button class="uk-width-1-1 uk-height-1-1 uk-button mp-border-radius cl-btn-cat-primary" data-mp-set-categoria="2">DIRECCIÓN DE PROYECTOS ÁGIL</button>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-6 uk-width-large-1-6">
                        <button class="uk-width-1-1 uk-height-1-1 uk-button mp-border-radius cl-btn-cat-secondary" data-mp-set-categoria="3">MEJORES PRÁCTICAS DE NEGOCIO Y TI</button>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-6 uk-width-large-1-6">
                        <button class="uk-width-1-1 uk-height-1-1 uk-button mp-border-radius" data-mp-set-categoria="4">COMPETENCIAS INTERPERSONALES Y DIRECTIVAS</button>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-6 uk-width-large-1-6">
                        <button class="uk-width-1-1 uk-height-1-1 uk-button mp-border-radius cl-btn-cat-primary" data-mp-set-categoria="5">DESARROLLO</button>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-6 uk-width-large-1-6">
                        <button class="uk-width-1-1 uk-height-1-1 uk-button mp-border-radius cl-btn-cat-secondary" data-mp-set-categoria="6">OTROS</button>
                    </div>
                </div>
                <?php if(count($calendario->sabatino->cursos) > 0) { ?>
                    <p class="cl-titulo uk-margin-large-top">Horario Sabatino 9:00 a 15:00 Hrs.</p>
                    <div class="uk-overflow-container">
                        <table class="cl">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="cl-border-primary"><p>&nbsp;&nbsp;HRS.</p><img src="resources/images/reloj.svg" width="30" height="30" alt="HRS"></th>
                                    <?php
                                        foreach($calendario->sabatino->meses as $mes) {
                                            echo '<th><p>'.$mes.'</p></th>';
                                        }
                                    ?>
                                    <th><p></p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($calendario->sabatino->cursos as $curso) {
                                        $row = '<tr'.($curso->categoria != 1 ? ' class="uk-hidden" ' : ' ').'data-mp-categoria="'.$curso->categoria.'">';
                                        $row .= '<td>'.$curso->titulo.'</td>';
                                        $row .= '<td class="cl-border-primary">'.$curso->duracion.'</td>';

                                        for($i = 0; $i < count($calendario->sabatino->meses); $i++) {
                                            $row .= '<td class="cl-border-dotted">'.($curso->mes == $i ? $curso->dia : '').'</td>';
                                        }

                                        $row .= '<td><a class="uk-button" href="contacto.php?curso='.$curso->curso.'">INSCRIBIRME</a></td>';
                                        $row .= '</tr>';

                                        echo $row;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
                <?php if(count($calendario->semanal->cursos) > 0) { ?>
                    <p class="cl-titulo uk-margin-large-top">Horario Lunes a Viernes 9:00 a 15:00 Hrs.</p>
                    <div class="uk-overflow-container">
                        <table class="cl">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="cl-border-primary"><p>&nbsp;&nbsp;HRS.</p><img src="resources/images/reloj.svg" width="30" height="30" alt="HRS"></th>
                                    <?php
                                        foreach($calendario->semanal->meses as $mes) {
                                            echo '<th><p>'.$mes.'</p></th>';
                                        }
                                    ?>
                                    <th><p></p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($calendario->semanal->cursos as $curso) {
                                        $row = '<tr'.($curso->categoria != 1 ? ' class="uk-hidden" ' : ' ').'data-mp-categoria="'.$curso->categoria.'">';
                                        $row .= '<td>'.$curso->titulo.'</td>';
                                        $row .= '<td class="cl-border-primary">'.$curso->duracion.'</td>';

                                        for($i = 0; $i < count($calendario->semanal->meses); $i++) {
                                            $row .= '<td class="cl-border-dotted">'.($curso->mes == $i ? $curso->dia : '').'</td>';
                                        }

                                        $row .= '<td><a class="uk-button" href="contacto.php?curso='.$curso->curso.'">INSCRIBIRME</a></td>';
                                        $row .= '</tr>';

                                        echo $row;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
                <?php if(count($calendario->especial->cursos) > 0) { ?>
                    <p class="cl-titulo uk-margin-large-top">Horario Martes y Jueves 18:00 a 22:00 Hrs.</p>
                    <div class="uk-overflow-container">
                        <table class="cl">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="cl-border-primary"><p>&nbsp;&nbsp;HRS.</p><img src="resources/images/reloj.svg" width="30" height="30" alt="HRS"></th>
                                    <?php
                                        foreach($calendario->especial->meses as $mes) {
                                            echo '<th><p>'.$mes.'</p></th>';
                                        }
                                    ?>
                                    <th><p></p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($calendario->especial->cursos as $curso) {
                                        $row = '<tr'.($curso->categoria != 1 ? ' class="uk-hidden" ' : ' ').'data-mp-categoria="'.$curso->categoria.'">';
                                        $row .= '<td>'.$curso->titulo.'</td>';
                                        $row .= '<td class="cl-border-primary">'.$curso->duracion.'</td>';

                                        for($i = 0; $i < count($calendario->especial->meses); $i++) {
                                            $row .= '<td class="cl-border-dotted">'.($curso->mes == $i ? $curso->dia : '').'</td>';
                                        }

                                        $row .= '<td><a class="uk-button" href="contacto.php?curso='.$curso->curso.'">INSCRIBIRME</a></td>';
                                        $row .= '</tr>';

                                        echo $row;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </section>
    </section>

    <?php include_once('template/footer.php'); ?>
</body>
</html>