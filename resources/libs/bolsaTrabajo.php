<?php 

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_FILES['cv'])) {
    $email = $_POST['email'];

    define('RAND_NUMBER', getRandomNumber());
    define('CV_SAVED', saveCVIntoSite());
    define('URL', 'http://localhost:3000/mx');

    $response = array();
    $response['saveCV'] = CV_SAVED;

    if($response['saveCV']) {
        $response['sendEmailToRH'] = sendEmailTo(0);
        $response['sendConfirmationToUser'] = sendEmailTo(1, $email);

        if($response['sendEmailToRH']) {
            header('Location: '.URL.'/?sCV=true');
            exit;
        }
    }
}

header('Location: '.URL.'/?sCV=false');

function saveCVIntoSite() {
    $dir = '../docs/cvs/';
    $file = $dir.RAND_NUMBER.'_'.basename($_FILES['cv']['name']);
    return move_uploaded_file($_FILES['cv']['tmp_name'], $file);
}

function getRandomNumber() {
    return rand(1000, 9999);
}

function sendEmailTo($type, $email = 'rh@maspm.lat') {
    require_once('PHPMailer/PHPMailerAutoload.php');
    
    if($type === 0) {
        $dir = '../docs/cvs/';
        $file = $dir.RAND_NUMBER.'_'.basename($_FILES['cv']['name']);
        $subject = 'Nuevo CV enviado';
        $htmlEmail = getEmailBodyForRH(true);
        $plainEmail = getEmailBodyForRH(false);
    } else {
        $subject = 'Gracias por unirte a nuestra Bolsa de Trabajo';
        $htmlEmail = getEmailBodyForUser(true);
        $plainEmail = getEmailBodyForUser(false);
    }

    $mail = new PHPMailer;
			
	$mail->isSMTP();
	$mail->Host = 'smtp.webhost4life.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'reclutamiento@maspm.lat';
	$mail->Password = 'h$d54*WN6B63p+5d';
	$mail->SMTPSecure = false;
	$mail->Port = '587';
	$mail->Timeout = 25;
			
	$mail->setFrom('reclutamiento@maspm.lat','MASPM Reclutamiento');
	$mail->addAddress($email);
	$mail->addReplyTo('no-reply@maspm.lat','No responder');

    if($type === 0) {
        $mail->addCC('rodrigo.merino@maspm.lat');
        $mail->addCC('ben.orta@maspm.lat');
        $mail->addAttachment($file, $_FILES['cv']['name']);
    }
			
	$mail->isHTML(true);
			
	$mail->Subject = $subject;
	$mail->Body = $htmlEmail;
	$mail->AltBody = $plainEmail;
			
	if($mail->send()) {
		return true;
	} else {
		return 'error:'.$mail->ErrorInfo;
	}
}

function getEmailBodyForRH($isHTMLFormat) {
    if(!$isHTMLFormat) {
        return 'Hola RH; un nuevo candidato ha enviado su CV a la Bolsa de Trabajo a través de la página de MASPM. Adjunto podrás ver su CV. Sus datos son: '.$_POST['name'].' - '.$_POST['phone'].' - '.$_POST['email'].', saludos.';
    }

    $email = '<html><head><meta charset="UTF-8"><title>Reclutamiento MASPM</title></head><body style="background-color: #E8E8E8;>';
	$email .= '<table width="600" style="margin:0 auto;"><tr><td><img src="'.URL.'/resources/images/logo-maspm.svg" width="157" hright="55" alt="MASPM Logo" style="display:block; margin:0 auto;"></td></tr>';
	$email .= '<tr><td>';
	$email .= 'Hola RH, <br><br>Un nuevo candidato ha enviado su CV a la Bolsa de Trabajo a través de la página de MASPM. Adjunto podrás ver su CV y los datos del candidato son:<br><br>';
    $email .= '<ul><li>Nombre: '.$_POST['name'].'</li><li>Teléfono: '.$_POST['phone'].'</li><li>Correo: '.$_POST['email'].'</li></ul><br><br>Saludos.';

    if(CV_SAVED) {
        $email .= '<br>Si el PDF no viene adjunto lo puedes descargar de <a href="'.URL.'/resources/docs/cvs/'.RAND_NUMBER.'_'.$_FILES['cv']['name'].'">aquí.</a>';
    }

	$email .= '</td></tr></table>';
	$email .= '</body></html>';

    return $email;			
}

function getEmailBodyForUser($isHTMLFormat) {
    if(!$isHTMLFormat) {
        return 'Hola '.$_POST['name'].'; gracias por enviarnos tu CV, en el momento que tengamos una vacante disponible te contactaremos. Saludos el equipo de MASPM.';
    }

    $email = '<html><head><meta charset="UTF-8"><title>Reclutamiento MASPM</title></head><body style="background-color: #E8E8E8;>';
	$email .= '<table width="600" style="margin:0 auto;"><tr><td><img src="'.URL.'/resources/images/logo-maspm.svg" width="157" hright="55" alt="MASPM Logo" style="display:block; margin:0 auto;"></td></tr>';
	$email .= '<tr><td>';
	$email .= 'Hola '.$_POST['name'].', <br><br>Gracias por haber enviado tu CV a nuestra Bolsa de Trabajo. En MASPM tenemos constantes vacantes para distintos proyectos en donde seguro podrás aplicar. En cuanto tengamos algo para ti te estaremos contactando.<br><br>';
    $email .= 'Saludos el equipo de MASPM.';
	$email .= '</td></tr></table>';
	$email .= '</body></html>';

    return $email;
}