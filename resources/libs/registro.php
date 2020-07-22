<?php

$keys = ['nombre', 'apellido', 'telefono', 'correo', 'curso', 'mensaje'];
define('URL', 'http://localhost:3000/mx');

foreach($keys as $key) {
    if(!array_key_exists($key, $_POST)) {
        response(false, 'El dato con el identificador: "'.$key.'" no se ha indicado');
        break;
    }
}

$envioCorreoContacto = sendEmailTo(0);
$envioCorreoCliente = sendEmailTo(1, $_POST['correo']);

if(gettype($envioCorreoContacto) == 'string') {
    response(false, $envioCorreoContacto);
} else {
    response();
}

function response($success = true, $mensaje = '') {
    echo json_encode(['success' => $success, 'mensaje' => $mensaje]);
    exit;
}

function sendEmailTo($type, $email = 'jose.perez@maspm.lat') {
    require_once('PHPMailer/PHPMailerAutoload.php');
    
    if($type === 0) {
        $subject = 'Nuevo contacto desde la página web';
        $htmlEmail = getEmailBodyForContacto(true);
        $plainEmail = getEmailBodyForContacto(false);
    } else {
        $subject = 'Gracias por registrarte con nosotros';
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
			
	$mail->setFrom('contacto@maspm.lat','MASPM Contacto');
	$mail->addAddress($email);
	$mail->addReplyTo('no-reply@maspm.lat','No responder');

    if($type === 0) {
        //$mail->addCC('rodrigo.merino@maspm.lat');
        //$mail->addCC('ben.orta@maspm.lat');
        $mail->addCC('jose.perez@gsb.lat');
    }
			
	$mail->isHTML(true);
			
	$mail->Subject = $subject;
	$mail->Body = $htmlEmail;
	$mail->AltBody = $plainEmail;
			
	if($mail->send()) {
		return true;
	} else {
		return $mail->ErrorInfo;
	}
}

function getEmailBodyForContacto($isHTMLFormat) {
    if(!$isHTMLFormat) {
        return 'Hola MASPM; se ha registrado un nuevo contacto a través de la página de MASPM. Sus datos son: '.$_POST['nombre'].' - '.$_POST['apellido'].' - '.$_POST['telefono'].' - '.$_POST['curso'].' -'.$_POST['mensaje'].', saludos.';
    }

    $email = '<html><head><meta charset="UTF-8"><title>Reclutamiento MASPM</title></head><body style="background-color: #E8E8E8;>';
	$email .= '<table width="600" style="margin:0 auto;"><tr><td><img src="'.URL.'/resources/images/logo-maspm.svg" width="157" hright="55" alt="MASPM Logo" style="display:block; margin:0 auto;"></td></tr>';
	$email .= '<tr><td>';
	$email .= 'Hola RH, <br><br>Un nuevo contacto ha enviado su Registro a través de la página de MASPM. Los datos del candidato son:<br><br>';
    $email .= '<ul><li>Nombre: '.$_POST['nombre'].'</li><li>Apellido: '.$_POST['apellido'].'</li><li>Telefono: '.$_POST['telefono'].'</li><li>Curso: '.$_POST['curso']. '</li><li>Mensaje: '.$_POST['mensaje'].'</li><li></ul><br><br>Saludos.';

	$email .= '</td></tr></table>';
	$email .= '</body></html>';

    return $email;			
}

function getEmailBodyForUser($isHTMLFormat) {
    if(!$isHTMLFormat) {
        return 'Hola '.$_POST['nombre'].'; gracias por enviarnos tus datos, en cualquier momento alguno de nuestros ejecutivos se pondrá en contacto contigo para dar seguimiento a tu solicitud. Saludos el equipo de MASPM.';
    }

    $email = '<html><head><meta charset="UTF-8"><title>Reclutamiento MASPM</title></head><body style="background-color: #E8E8E8;>';
	$email .= '<table width="600" style="margin:0 auto;"><tr><td><img src="'.URL.'/resources/images/logo-maspm.svg" width="157" hright="55" alt="MASPM Logo" style="display:block; margin:0 auto;"></td></tr>';
	$email .= '<tr><td>';
	$email .= 'Hola '.$_POST['nombre'].', <br><br>Gracias por enviarnos tus datos, en cualquier momento alguno de nuestros ejecutivos se pondrá en contacto contigo para dar seguimiento a tu solicitud.<br><br>';
    $email .= 'Saludos el equipo de MASPM.';
	$email .= '</td></tr></table>';
	$email .= '</body></html>';

    return $email;
}